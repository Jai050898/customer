<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Manage Total Reports');
    $usr    = new General;
    $smarty->assign("Page","reports");
    $Page = "customers"; 
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    
    $startYear = 1980;
    $year = date('Y');
    $calculation_of_previous_years = $year-$startYear;
    
    /********** BY TOTAL REPORTS ***********/
    $yearArr    = array();
    for($i=($year-$calculation_of_previous_years),$j=0;$i<= $year;$i++, $j++) {
        
        //First Time Visit
        $Where1 = $Where." AND reg_date >'".date($i.'-01-01 00:00:00')."' AND  reg_date <='".date($i.'-12-31 23:59:59')."' AND status = 'A'";
        $yearArr[$j]['year']    = $i;
        $yearArr[$j]['total']   = $usr->TotalRows("XML_customers",$Where1);
        
        if($j == 0)
            $difference  = 0;
        else
            $difference    = $yearArr[$j]['total'] - $yearArr[$j-1]['total'];
        
        $yearArr[$j]['diff']    = $difference;
        
        
        //Last time Visited
        //SELECT cust_id, MAX( YEAR( transaction_date ) ) AS MaxYear FROM `XML_ro` WHERE company_id =18 GROUP BY cust_id HAVING MaxYear =2014
        $lastVisited    = array();
        $Fields2        = "cust_id, MAX(YEAR(transaction_date)) AS MaxYear";
        $Where2         = $Where." AND status = 'A' Group BY cust_id HAVING MaxYear = '".$i."'";
        $lastVisited    = $usr->GetSelWhere("XML_ro",$Fields2, $Where2);
        $yearArr[$j]['lastVisited']   = count($lastVisited);

        
        //Last Visited Difference
        if($j== 0)
            $yearArr[$j]['lastVisitedDiff']   = 0;
        else {
            $yearArr[$j]['lastVisitedDiff']   = $yearArr[$j]['lastVisited'] - $yearArr[$j-1]['lastVisited'];
        }
        
        // No. of customers who visited that year
        $Where3     = $Where." AND YEAR(transaction_date) ='".$i."' AND status = 'A' GROUP BY cust_id";
        $Fields3    = "id";
        $totalVisitedCustomers  = $usr->GetSelWhere("XML_ro",$Fields3, $Where3);
        $yearArr[$j]['totalVisitedCustomers']    = count($totalVisitedCustomers);

        //totalVisitedCustomers Difference
        if($j== 0)
            $yearArr[$j]['totalVisitedCustomersDiff']   = 0;
        else {
            $yearArr[$j]['totalVisitedCustomersDiff']   = $yearArr[$j]['totalVisitedCustomers'] - $yearArr[$j-1]['totalVisitedCustomers'];
        }
        
    }
    
    /*
    if($_SERVER['REMOTE_ADDR'] == '182.72.88.155') {
        echo "<pre>";print_r($yearArr);
        exit;
    }
     */
    
    // Sort array in Descending Order
    usort($yearArr, function ($a, $b) { return $b['year'] - $a['year']; });
    $smarty->assign("Page",$Page);
    $smarty->assign('yearArr', $yearArr);
    $smarty->display('manage-total-reports.tpl');
?>
