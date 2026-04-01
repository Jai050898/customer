<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Manage Total Reports');
    
    $usr    = new General;
    $smarty->assign("Page","reports");
    $Page = "customers"; 
    $roCalculationsArray    = array();
    $currentYear = date('Y');
    $lastYear   = $currentYear - 4;
    
    $yearsAry   = array();
    
    for($i=$currentYear; $i>=$lastYear; $i--) {
        $roArray    = array();
        $yearsAry[$i] = $i;
        $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
        $Fields = "SUM(laboramount) as laborSum, SUM(partsamount) as partsSum, SUM(hazardwasteamount) AS hazardSum, SUM(shopsuppliesamount) as shopSupplySum, SUM(taxamount) as taxSum, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSum, SUM(discountamount) as discountSum";
        $roArray	= $usr->GetSelWhere("XML_ro", $Fields,$Where);
        //echo "<pre>";print_r($roCalculationsArray);exit;
        if(!empty($roArray)) {
            $roCalculationsArray[$i]['year'] = $i;
            $roCalculationsArray[$i] = $roArray[0];
            $roCalculationsArray[$i]['NetSales'] = $roArray[0]['grossSum'] - $roArray[0]['discountSum'];
        } else {
            $roCalculationsArray[$i]['NetSales'] = 0;
        }
    }
    
    //echo "<prE>";print_r($roCalculationsArray);exit;
    $smarty->assign("roCalculationsArray",$roCalculationsArray);
    $smarty->assign("years",$yearsAry);
    $smarty->display('ro-calculations.tpl');
    
    
?>