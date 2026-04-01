<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Manage Total Reports');
    
    $usr    = new General;
    $smarty->assign("Page","reports");
    $Page = "customers"; 
    
    $roCalculationsArray    = array();
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '2013'";
    $Fields = "SUM(laboramount) as laborSum, SUM(partsamount) as partsSum, SUM(hazardwasteamount) AS hazardSum, SUM(shopsuppliesamount) as shopSupplySum, SUM(taxamount) as taxSum, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSum, SUM(discountamount) as discountSum";
    $roCalculationsArray	= $usr->GetSelWhere("XML_ro", $Fields,$Where);
    //echo "<pre>";print_r($roCalculationsArray);exit;
    if(!empty($roCalculationsArray)) {
        $roCalculationsArray[0]['NetSales'] = $roCalculationsArray[0]['grossSum'] - $roCalculationsArray[0]['discountSum'];
    }
    
    $smarty->assign("roCalculationsArray",$roCalculationsArray[0]);    
    $smarty->display('ro-calculations.tpl');
    
    
?>