<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","reports");

    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    
    $startYear = 1980;
    $year = date('Y');
    $calculation_of_previous_years = $year-$startYear;
    
    /********** BY TOTAL REPORTS ***********/
    $yearArr    = array();
    for($i=($year-$calculation_of_previous_years),$j=0;$i<= $year;$i++, $j++) {
        $Where1 = $Where." AND transaction_date >'".date($i.'-01-01 00:00:00')."' AND  transaction_date <='".date($i.'-12-31 23:59:59')."' AND status = 'A'";
        $yearArr[$j]['year']    = $i;
        $yearArr[$j]['total']   = $usr->TotalRows("XML_ro",$Where1);
        if($j == 0)
            $difference  = 0;
        else
            $difference    = $yearArr[$j]['total'] - $yearArr[$j-1]['total'];
        
        $yearArr[$j]['diff']    = $difference;
    }
    
    // Sort array in Descending Order
    usort($yearArr, function ($a, $b) { return $b['year'] - $a['year']; });
    $smarty->assign('yearArr', $yearArr);
    $smarty->display('manage-total-reports.tpl');
?>