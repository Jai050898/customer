<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Customer Monthwise Data');
    $usr    = new General;
    $page   = "customers";
    $page1  = "Monthwise Data";
    
    /************* CALCULATE CUSTOMER DATA ****************/
    $dataArray          = array();
    $year               = date('Y');
    $limit              = $year-5;
    for($y=$year;$y>$limit;$y--) {
        for($i=1;$i<=12;$i++){
            $variance   = 0;
            $month   = date('M',strtotime(date('Y-m-d',strtotime($y."-".$i."-01"))));
            $dataArray[$y]['Year'] = $y;
            $dataArray[$y]['Month'][$i]['MonthName'] = $month;
            
            // To calculate Gross Sales
            $grossSaleArray = array();
            $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$y."' AND MONTH(transaction_date) = '".$i."'";
            $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
            $Table3		= "XML_ro ";
            $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
            
            if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '') {
                $dataArray[$y]['Month'][$i]['grossSale']   = $grossSaleArray[0]['gross'];
            } else {
                $dataArray[$y]['Month'][$i]['grossSale']   = 0;
            }
            
            // TO Calculate Variance for the Consecutive Years for the Respective months
            if($y == $year){
                $dataArray[$y]['Month'][$i]['variance']  = 0;
            } else {
                if($dataArray[$y]['Month'][$i]['grossSale'] != 0){
                    $variance  = $dataArray[$y+1]['Month'][$i]['grossSale']/$dataArray[$y]['Month'][$i]['grossSale'];
                } else {
                    $variance = 0;
                }
                $dataArray[$y+1]['Month'][$i]['variance']  = $variance * 100;
            }
            
            if($y == $limit+1){
                $dataArray[$y]['Month'][$i]['variance']  = 0;
            }
            
        }
        
    }
    
    
    $grossSaleTotal     = 0;
    $highGrossSale      = 0;
    $lowGrossSale       = 0;
    $varianceHigh       = 0;
    $varianceLow       = 0;
    $varianceAvg       = 0;
    $grossSaleTotalYr   = 0;
    
    foreach($dataArray as $key1=>$yearArr){
        //echo "<prE>".$key1;print_r($yearArr);exit;
        $highGrossSale   = $yearArr['Month'][1]['grossSale'];
        $lowGrossSale   = $yearArr['Month'][1]['grossSale'];
        $grossSaleTotal   = 0;
        $averageGrossSale = 0;
        $totalVariance    = 0;
        $varianceAvg      = 0;
        $k  = 0;    
        foreach($yearArr['Month'] as $key2=>$monthArr){
            //echo "<prE>";print_r($yearArr);exit;
            //echo $monthArr['grossSale']."---->".$k."<br />";
            if($monthArr['grossSale'] != 0){
                
                //echo $grossSaleTotal."--".$k."<br>";
                if($monthArr['grossSale'] > $highGrossSale){
                    $highGrossSale  = $monthArr['grossSale'];
                    $varianceHigh     = $monthArr['variance'];
                }
                
                if($monthArr['grossSale'] <= $lowGrossSale){
                    $lowGrossSale  = $monthArr['grossSale'];
                    $varianceLow     = $monthArr['variance'];
                }
                $k++;
                
            } else {
                
                $highGrossSale  = 0;
                $lowGrossSale  = 0;
                $varianceHigh   = 0;
                $varianceLow   = 0;
                
            }
            
            $grossSaleTotal = $grossSaleTotal + $monthArr['grossSale'];
            $totalVariance  = $totalVariance + $monthArr['variance'];
            if($_SERVER['REMOTE_ADDR'] == '182.72.66.214') {
                //echo "month-->".$key2."  K-->".$k." Gross-->".$monthArr['grossSale']." Total--->".$grossSaleTotal." MonthlyVariance -->".$monthArr['variance']." Total Variance -->".$totalVariance."<br>";
            }
            if($key2 == 12){
                
                if( $k != 0) {
                    $averageGrossSale   = $grossSaleTotal /$k;
                    $varianceAvg    = $totalVariance / $k;
                }
                $dataArray[$key1]['highGrossSale'] = $highGrossSale;
                $dataArray[$key1]['lowGrossSale'] = $lowGrossSale;
                $dataArray[$key1]['averageGrossSale'] = $averageGrossSale;
                $dataArray[$key1]['varianceHigh'] = $varianceHigh;
                $dataArray[$key1]['varianceLow'] = $varianceLow;
                $dataArray[$key1]['varianceAvg'] = $varianceAvg;
            }
            
        }
        //echo "<br />";
    }
    //echo "<prE>";print_r($dataArray);exit;
    $smarty->assign("dataArray",$dataArray);
    $smarty->display('customer-monthwise-sales-variance.tpl');
    
?>