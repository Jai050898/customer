<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Customer Weekwise Data');
    $usr    = new General;
    $page   = "customers";
    $page1  = "Weekwise Data";
    
    /************* CALCULATE CUSTOMER DATA ****************/
    $dataArray          = array();
    $year               = $_REQUEST['y'];
    $bestWeek          = '';
    $averageWeek       = '';
    $highestWeek       = '';
    $lowestWeek        = '';
    $highestWeekTotal  = 0;
    $lowestWeekTotal   = 0;
    $averageWeekTotal  = 0;
	$TotalAmt = 0;
    
    $no_of_weeks_in_Year = date("W", mktime(0,0,0,12,28,$year));
    
    for($i=1;$i<=$no_of_weeks_in_Year;$i++){
         $dataArray[$i]['Week']   = $i;
         
         // Total RO's
        $Where2		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$year."' AND WEEK(transaction_date,0) = '".$i."'";
        $Table2		= "XML_ro";
        $rototal	= $usr->TotalRows($Table2,$Where2);
        $dataArray[$i]['roTotal']   = $rototal;
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$year."' AND WEEK(transaction_date,0) = '".$i."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '')
            $dataArray[$i]['grossSale']   = $grossSaleArray[0]['gross'];
        else
            $dataArray[$i]['grossSale']   = 0;
        
        if($i==1){
            $bestWeek      = $dataArray[$i]['Week'];
            $highestWeek   = $dataArray[$i]['Week'];
            $lowestWeek    = $dataArray[$i]['Week'];
            $highestWeekTotal   = $dataArray[$i]['grossSale'];
            $bestWeekTotal   = $dataArray[$i]['grossSale'];
            $lowestWeekTotal   = $dataArray[$i]['grossSale'];
        }
        
        if($dataArray[$i]['grossSale'] > $highestWeekTotal && $i!=1){
            $bestWeek      = $dataArray[$i]['Week'];
            $highestWeek   = $dataArray[$i]['Week'];
            $bestWeekTotal   = $dataArray[$i]['grossSale'];
            $highestWeekTotal   = $dataArray[$i]['grossSale'];
        }
        
        if($dataArray[$i]['grossSale'] <= $lowsetWeekTotal && $i!=1){
            $lowestWeek        = $dataArray[$i]['Week'];
            $lowestWeekTotal   = $dataArray[$i]['grossSale'];
        }    
		$TotalAmt = $TotalAmt+$dataArray[$i]['grossSale'];
    }
    $averageWeekTotal = $TotalAmt/$no_of_weeks_in_Year;
	//echo "<prE>";print_r($dataArray);exit;
    
    $smarty->assign("dataArray",$dataArray);
    $smarty->assign("bestWeek",$bestWeek);
    $smarty->assign("highestWeek",$highestWeek);
    $smarty->assign("lowestWeek",$lowestWeek);
    $smarty->assign("averageWeek",$averageWeek);
    $smarty->assign("bestWeekTotal",$bestWeekTotal);
    $smarty->assign("highestWeekTotal",$highestWeekTotal);
    $smarty->assign("lowestWeekTotal",$lowestWeekTotal);
    $smarty->assign("averageWeekTotal",$averageWeekTotal);
    $smarty->assign("Page",$page);
    $smarty->assign("Page1",$page1);
    $smarty->display('customer-weekwise-data.tpl');
    
?>