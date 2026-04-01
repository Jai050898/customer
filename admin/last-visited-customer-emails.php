<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $smarty->assign('breadcrumb','Manage Total Reports');
    $usr    = new General;
    $smarty->assign("Page","reports");
    $Page = "customers"; 
    $Where  = "1=1 AND company_id = '".$_REQUEST['user_id']."'";
    
    $startYear = 1980;
    $year = date('Y');
    $calculation_of_previous_years = $year-$startYear;
    
    /********** BY TOTAL REPORTS ***********/
    $yearArr    = array();
    for($i=($year-$calculation_of_previous_years),$j=0;$i<= $year;$i++, $j++) {
        $yearArr[$j]['year']        = $i;
        
        //Last time Visited Customer Id's
        //SELECT cust_id, MAX( YEAR( transaction_date ) ) AS MaxYear FROM `XML_ro` WHERE company_id =18 GROUP BY cust_id HAVING MaxYear =2014
        $lastVisited    = array();
        $Fields2        = "cust_id, MAX(YEAR(transaction_date)) AS MaxYear";
        $Where2         = $Where." AND status = 'A' Group BY cust_id HAVING MaxYear = '".$i."'";
        $lastVisited    = $usr->GetSelWhere("XML_ro",$Fields2, $Where2);
        
        if(!empty($lastVisited))  {
        
            $lastVisitedCusts   = array();
            foreach($lastVisited as $last){
                $lastVisitedCusts[]   = $last['cust_id'];
            }
            
            $lastVisitedCustIds = implode(',', $lastVisitedCusts);
            
            // Find Cusotmers Who have Emails
            $LastVisitedCustEmailCnt    = $usr->TotalRows("XML_customers","cust_id IN (".$lastVisitedCustIds.") AND email != '' AND company_id = '".$_REQUEST['user_id']."'");
            
            $yearArr[$j]['emailCnt']    = $LastVisitedCustEmailCnt;
        } else {
            $yearArr[$j]['emailCnt']    = 0;
        }
    }
    
    // Sort array in Descending Order
    usort($yearArr, function ($a, $b) { return $b['year'] - $a['year']; });
    $smarty->assign("Page",$Page);
    $smarty->assign('yearArr', $yearArr);
    $smarty->display('last-visited-customer-emails.tpl');
?>
