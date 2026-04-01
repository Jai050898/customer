<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $smarty->assign('breadcrumb','Manage Total Reports');
    
    $usr    = new General;
   $page = 'customers';
    $smarty->assign('Page',$page);
    
    $roCalculationsArray    = array();
    $roCalculationsCurrnetArray    = array();
    $currentYear = date('Y');
    $lastYear   = $currentYear - 4;
    
    $yearsAry   = array();
    
    for($i=$currentYear; $i>=$lastYear; $i--) {
        
        // FOR COMPLETE YEAR CALCULATIONS
        $roArray    = array();
        $yearsAry[$i] = $i;
        $Where  = "1=1 AND company_id = '".$_REQUEST['user_id']."' AND YEAR(transaction_date) = '".$i."'";
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
        
        //FOR START OF YEAR TO CURRENT CALCULATIONS
        $roArray1    = array();
        $Where  = "1=1 AND company_id = '".$_REQUEST['user_id']."' AND (transaction_date between  DATE_FORMAT(NOW() ,'".$i."-01-01') AND DATE_FORMAT(NOW() ,'".$i."-%m-%d') )";
        $Fields = "SUM(laboramount) as laborSum, SUM(partsamount) as partsSum, SUM(hazardwasteamount) AS hazardSum, SUM(shopsuppliesamount) as shopSupplySum, SUM(taxamount) as taxSum, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSum, SUM(discountamount) as discountSum";
        $roArray1	= $usr->GetSelWhere("XML_ro", $Fields,$Where);
        //echo "<pre>";print_r($roCalculationsArray);exit;
        if(!empty($roArray1)) {
            $roCalculationsCurrnetArray[$i]['year'] = $i;
            $roCalculationsCurrnetArray[$i] = $roArray1[0];
            $roCalculationsCurrnetArray[$i]['NetSales'] = $roArray1[0]['grossSum'] - $roArray1[0]['discountSum'];
        } else {
            $roCalculationsCurrnetArray[$i]['NetSales'] = 0;
        }
    }
    
    //echo "<prE>";print_r($roCalculationsCurrnetArray);exit;
    $smarty->assign("roCalculationsArray",$roCalculationsArray);
    $smarty->assign("roCalculationsCurrnetArray",$roCalculationsCurrnetArray);
    $smarty->assign("years",$yearsAry);
    $smarty->display('ro-calculations.tpl');
    
    
?>
