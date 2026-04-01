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
    $avgRO             = 0;
    $highestROWeek     = '';
    $lowestROWeek      = '';
    $averageROWeek     = '';
    $highestRO         = 0;
    $lowestRO          = 0;
    $averageROTotal    = 0;
    
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
        
        
        if($dataArray[$i]['roTotal'] != 0) {
            $avgRO  =    $dataArray[$i]['grossSale'] / $dataArray[$i]['roTotal'];
            $dataArray[$i]['avgRO'] = $avgRO;
        } else {
            $dataArray[$i]['avgRO'] = 0;
        }
        
        
        
        if($i==1){
            $bestWeek      = $dataArray[$i]['Week'];
            $highestWeek   = $dataArray[$i]['Week'];
            $lowestWeek    = $dataArray[$i]['Week'];
            
            $highestWeekTotal   = $dataArray[$i]['grossSale'];
            $bestWeekTotal   = $dataArray[$i]['grossSale'];
            $lowestWeekTotal   = $dataArray[$i]['grossSale'];
            
            $highestRO          = $dataArray[$i]['avgRO'];
            $lowestRO          = $dataArray[$i]['avgRO'];
            $averageROTotal    = $dataArray[$i]['avgRO'];
            
            $highestROWeek     = $dataArray[$i]['Week'];
            $lowestROWeek      = $dataArray[$i]['Week'];
        }
        
        if($dataArray[$i]['grossSale'] > $highestWeekTotal && $i!=1){
            $bestWeek      = $dataArray[$i]['Week'];
            $highestWeek   = $dataArray[$i]['Week'];
            $bestWeekTotal   = $dataArray[$i]['grossSale'];
            $highestWeekTotal   = $dataArray[$i]['grossSale'];
        }
        if(($dataArray[$i]['grossSale'] <= $lowestWeekTotal) && $i!=1 && $dataArray[$i]['grossSale'] !=0){
            $lowestWeek        = $dataArray[$i]['Week'];
            $lowestWeekTotal   = $dataArray[$i]['grossSale'];
        }  
        
        if($dataArray[$i]['avgRO'] > $highestRO && $i!=1){
            $highestROWeek     = $dataArray[$i]['Week'];
            $highestRO          = $dataArray[$i]['avgRO'];
        }
        
        if(($dataArray[$i]['avgRO'] <= $lowestRO) && $i!=1 && $dataArray[$i]['avgRO'] != 0){
            $lowestROWeek     = $dataArray[$i]['Week'];
            $lowestRO         = $dataArray[$i]['avgRO'];
        }
          
        $TotalAmt = $TotalAmt+$dataArray[$i]['grossSale'];
        $averageROTotal = $averageROTotal + $dataArray[$i]['avgRO'];
    }
    $averageWeekTotal = $TotalAmt/$no_of_weeks_in_Year;
    $averageROTotal1 = $averageROTotal / $no_of_weeks_in_Year;
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
    
    $smarty->assign("highestROWeek",$highestROWeek);
    $smarty->assign("lowestROWeek",$lowestROWeek);
    $smarty->assign("averageROWeek",$averageROWeek);
    
    $smarty->assign("highestRO",$highestRO);
    $smarty->assign("lowestRO",$lowestRO);
    $smarty->assign("averageROTotal",$averageROTotal1);
    
    $smarty->assign("Page",$page);
    $smarty->assign("Page1",$page1);
    $smarty->display('customer-weekwise-data.tpl');
    
?>