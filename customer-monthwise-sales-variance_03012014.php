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
        $grossSaleTotal     = 0;
        $highGrossSale      = 0;
        $lowGrossSale       = 0;
        $avgGrossSale       = 0;
        $varianceHigh       = 0;
        $varianceLow       = 0;
        $varianceAvg       = 0;
        $grossSaleTotalYr   = 0;
        for($i=1,$k=1;$i<=12;$i++){
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
            //echo "<pre>";print_r($grossSaleArray);exit;
            if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '')
                $dataArray[$y]['Month'][$i]['grossSale']   = $grossSaleArray[0]['gross'];
            else
                $dataArray[$y]['Month'][$i]['grossSale']   = 0;
            
            // TO Calculate Variance for the Consecutive Years for the Respective months
            if($y == $year){
                $dataArray[$y]['Month'][$i]['variance']  = 0;
                if($i==1){
                    $highGrossSale  = $dataArray[$y]['Month'][$i]['grossSale'];
                    $lowGrossSale   = $dataArray[$y]['Month'][$i]['grossSale'];
                    $avgGrossSale   = $dataArray[$y]['Month'][$i]['grossSale'];
                    $varianceHigh   = $dataArray[$y]['Month'][$i]['variance'];
                    $varianceLow    = $dataArray[$y]['Month'][$i]['variance'];
                    $grossSaleTotalYr   = $dataArray[$y]['Month'][$i]['grossSale'];
                    
                } else {
                    if($dataArray[$y]['Month'][$i]['grossSale'] > $highGrossSale){
                        $highGrossSale  = $dataArray[$y]['Month'][$i]['grossSale'];
                        $varianceHigh   = $dataArray[$y]['Month'][$i]['variance'];
                    }

                    if($dataArray[$y]['Month'][$i]['grossSale'] <= $lowGrossSale){
                        $lowGrossSale  = $dataArray[$y]['Month'][$i]['grossSale'];
                        $varianceLow   = $dataArray[$y]['Month'][$i]['variance'];
                    }

                    $grossSaleTotal = $grossSaleTotal + $dataArray[$y]['Month'][$i]['grossSale'];   
                    if($grossSaleTotal != 0){
                        $grossSaleTotalYr   = $grossSaleTotalYr + $grossSaleTotal;
                        $k++;
                    }
                    
                    if($i==12){
                        $averageGrossSale   = $grossSaleTotal / 12;
                        $dataArray[$y]['highGrossSale'] = $highGrossSale;
                        $dataArray[$y]['lowGrossSale'] = $lowGrossSale;
                        $dataArray[$y]['averageGrossSale'] = $averageGrossSale;
                        
                    }
                    
                    $dataArray[$y]['varianceHigh'] = $varianceHigh;
                    $dataArray[$y]['varianceLow'] = $varianceLow;
                    $dataArray[$y]['varianceAvg'] = $grossSaleTotalYr / $k;
                    
                }
            } else {
                if($dataArray[$y]['Month'][$i]['grossSale'] != 0){
                    $variance  = $dataArray[$y+1]['Month'][$i]['grossSale']/$dataArray[$y]['Month'][$i]['grossSale'];
                } else {
                    $variance = 0;
                }
                
                $dataArray[$y+1]['Month'][$i]['variance']  = $variance * 100;
                
                if($i==1){
                    $highGrossSale  = $dataArray[$y]['Month'][$i]['grossSale'];
                    $lowGrossSale   = $dataArray[$y]['Month'][$i]['grossSale'];
                    $avgGrossSale   = $dataArray[$y]['Month'][$i]['grossSale'];
                    $varianceHigh     = $dataArray[$y+1]['Month'][$i]['variance'];
                    $varianceLow    = $dataArray[$y+1]['Month'][$i]['variance'];
                    $grossSaleTotalYr   = $dataArray[$y]['Month'][$i]['grossSale'];
                    
                } else {
                    if($dataArray[$y]['Month'][$i]['grossSale'] > $highGrossSale){
                        $highGrossSale  = $dataArray[$y]['Month'][$i]['grossSale'];
                        $varianceHigh     = $dataArray[$y+1]['Month'][$i]['variance'];
                    }

                    if($dataArray[$y]['Month'][$i]['grossSale'] <= $lowGrossSale){
                        $lowGrossSale  = $dataArray[$y]['Month'][$i]['grossSale'];
                        $varianceLow    = $dataArray[$y+1]['Month'][$i]['variance'];
                    }

                    $grossSaleTotal = $grossSaleTotal + $dataArray[$y]['Month'][$i]['grossSale'];
                    if($grossSaleTotal != 0){
                        //echo $grossSaleTotal."--".$k."<br>";
                        $grossSaleTotalYr   = $grossSaleTotalYr + $grossSaleTotal;
                        $k++;
                    }
                }  
            
                if($i==12){
                    $averageGrossSale   = $grossSaleTotal / 12;
                    $dataArray[$y]['highGrossSale'] = $highGrossSale;
                    $dataArray[$y]['lowGrossSale'] = $lowGrossSale;
                    $dataArray[$y]['averageGrossSale'] = $averageGrossSale;
                    
                    $dataArray[$y]['varianceHigh'] = $varianceHigh;
                    $dataArray[$y]['varianceLow'] = $varianceLow;
                    $avgVariance = $grossSaleTotalYr/$k;
                     $dataArray[$y]['varianceAvg']  = $avgVariance * 100;
                }
            }
            
            if($y == $limit+1){
                $dataArray[$y]['Month'][$i]['variance']  = 0;
                $dataArray[$y]['highGrossSale'] = $highGrossSale;
                $dataArray[$y]['lowGrossSale'] = $lowGrossSale;
                $dataArray[$y]['averageGrossSale'] = $averageGrossSale;
            }
            
        }
        
    }
    //echo "<prE>";print_r($dataArray);exit;
    $smarty->assign("dataArray",$dataArray);
    $smarty->display('customer-monthwise-sales-variance.tpl');
    
?>