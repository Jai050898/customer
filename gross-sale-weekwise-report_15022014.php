<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign("Page","MyAccount");
    $usr    = new General;
    
    $currentYear    = date('Y');
    $endingYear     = $currentYear-16;
    $dataArray      = array();
    for($i=$endingYear; $i <= $currentYear; $i++) {
        for($j=1;$j<=12;$j++) {
            //$dataArray[$i][$j]  = $j;
            $days_in_month  = cal_days_in_month(CAL_GREGORIAN,$j,$i);
            for($k=1;$k<=$days_in_month;$k++) {
                $dataArray[$i][$j][$k]  = $i."-".$j."-".$k;
            }
        }
    }
    
    
    // To Get Week Array
    $weekAry    = array();
    for($i=1; $i<=53; $i++ ) {
        $weekAry[$i]    = $i;
    }
    //echo "<pre>";print_r($weekAry);exit;
    //echo "<pre>";print_r($dataArray);exit;
    $smarty->assign("dataArray",$dataArray);
    $smarty->assign("weekAry",$weekAry);
    $smarty->display('gross-sale-weekwise-report.tpl');

?>