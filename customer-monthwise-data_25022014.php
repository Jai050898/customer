<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Customer Monthwise Data');
    $usr    = new General;
    $page   = "customers";
    $page1  = "Monthwise Data";
    
    /************* CALCULATE CUSTOMER DATA ****************/
    $dataArray          = array();
    $year               = $_REQUEST['y'];
    $bestMonth          = '';
    $averageMonth       = '';
    $highestMonth       = '';
    $lowestMonth        = '';
    $highestMonthTotal  = 0;
    $lowestMonthTotal   = 0;
    $averageMonthTotal  = 0;
    $highAvgRO          = 0;
    $lowAvgRO           = 0;
    $averageAvgRO       = 0;
    $TotalAmt           = 0;
    $TotalAvgRO         = 0;
    
    for($i=1;$i<=12;$i++){
         $dataArray[$i]['Month']   = date('F',strtotime(date('Y-m-d',strtotime($year."-".$i."-01"))));
         
         // Total RO's
        $Where2		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$year."' AND MONTH(transaction_date) = '".$i."'";
        $Table2		= "XML_ro ";
        $rototal	= $usr->TotalRows($Table2,$Where2);
        $dataArray[$i]['roTotal']   = $rototal;
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$year."' AND MONTH(transaction_date) = '".$i."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        //echo "<pre>";print_r($grossSaleArray);exit;
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '')
            $dataArray[$i]['grossSale']   = $grossSaleArray[0]['gross'];
        else
            $dataArray[$i]['grossSale']   = 0;

        
        if($dataArray[$i]['roTotal'] != 0) { 
            $dataArray[$i]['avgRO']   = $dataArray[$i]['grossSale'] / $dataArray[$i]['roTotal'];
        } else {
            $dataArray[$i]['avgRO']   = 0;
        }
        
        
        if($i==1){
            $bestMonth      = $dataArray[$i]['Month'];
            $highestMonth   = $dataArray[$i]['Month'];
            $lowestMonth    = $dataArray[$i]['Month'];
            $highestMonthTotal   = $dataArray[$i]['grossSale'];
            $bestMonthTotal   = $dataArray[$i]['grossSale'];
            $lowestMonthTotal   = $dataArray[$i]['grossSale'];
            $lowAvgRO   = $dataArray[$i]['avgRO'];
            $highAvgRO   = $dataArray[$i]['avgRO'];
            $AverageRO   = $dataArray[$i]['avgRO'];
        }
        
        if($dataArray[$i]['grossSale'] > $highestMonthTotal && $i!=1){
            $bestMonth      = $dataArray[$i]['Month'];
            $highestMonth   = $dataArray[$i]['Month'];
            $bestMonthTotal   = $dataArray[$i]['grossSale'];
            $highestMonthTotal   = $dataArray[$i]['grossSale'];
            $highAvgRO   = $dataArray[$i]['avgRO'];
        }
        
        if($dataArray[$i]['grossSale'] <=  $lowestMonthTotal && $i!=1){
            $lowestMonth        = $dataArray[$i]['Month'];
            $lowestMonthTotal   = $dataArray[$i]['grossSale'];
            $lowAvgRO           = $dataArray[$i]['avgRO'];
        }
        $TotalAmt  = $TotalAmt+$dataArray[$i]['grossSale'];
        
        $TotalAvgRO  = $TotalAvgRO+$dataArray[$i]['avgRO'];
    }
    
    
    //echo "<prE>";print_r($dataArray);exit;
    $averageMonthTotal  = $TotalAmt /12;
    $AverageRO       = $TotalAvgRO /12;
    //$$AverageRO1      = $AverageRO *100;
    
    
    $smarty->assign("dataArray",$dataArray);
    $smarty->assign("bestMonth",$bestMonth);
    $smarty->assign("highestMonth",$highestMonth);
    $smarty->assign("lowestMonth",$lowestMonth);
    $smarty->assign("averageMonth",$averageMonth);
    $smarty->assign("bestMonthTotal",$bestMonthTotal);
    $smarty->assign("highestMonthTotal",$highestMonthTotal);
    $smarty->assign("lowestMonthTotal",$lowestMonthTotal);
    $smarty->assign("averageMonthTotal",$averageMonthTotal);
    
    $smarty->assign("AverageRO",$AverageRO);
    $smarty->assign("highAvgRO",$highAvgRO);
    $smarty->assign("lowAvgRO",$lowAvgRO);
    
    $smarty->assign("Page",$page);
    $smarty->assign("Page1",$page1);
    $smarty->display('customer-monthwise-data.tpl');
    
?>