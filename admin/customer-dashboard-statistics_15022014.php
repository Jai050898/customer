<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
$page = "customers";
    $page1 = "map";
    
//Total Customers
    $Where		= "1=1 AND company_id = '".$_REQUEST['user_id']."'";
    $Table		= "XML_customers ";
    $ctotal		= $usr->TotalRows($Table,$Where);
    //echo $ctotal;
    $smarty->assign("ctot",$ctotal);


    // Total Vehicles
    $Where1		= "1=1 AND company_id = '".$_REQUEST['user_id']."'";
    $Table1		= "XML_vehicle ";
    $vtotal		= $usr->TotalRows($Table1,$Where1);
    //echo $vtotal;
    $smarty->assign("vtot",$vtotal);

    // Total RO's
    $Where2		= "1=1 AND company_id = '".$_REQUEST['user_id']."'";
    $Table2		= "XML_ro ";
    $rototal		= $usr->TotalRows($Table2,$Where2);
    //echo $rototal;
    $smarty->assign("rotot",$rototal);

    // Total RO Details(Transactions
    $Where3		= "1=1 AND company_id = '".$_REQUEST['user_id']."'";
    $Table3		= "XML_ro_details ";
    $ro_detail_total    = $usr->TotalRows($Table3,$Where3);
    //echo $ro_detail_total;exit;
    $smarty->assign("ro_transactio_tot",$ro_detail_total);

    // Total Schedules
    $Where4		= "1=1 AND company_id = '".$_REQUEST['user_id']."'";
    $Table4		= "XML_schedule ";
    $sctotal    = $usr->TotalRows($Table4,$Where4);
    //echo $sctotal;
    $smarty->assign("sctot",$sctotal);
        
    /****** For Calculating Average Customer Lifetime Value ******/
    // RO Get All RO Details
    $tbl = "XML_ro_details";
    $flds = "sum(extendedsale) as total_extendedsale";
    $Whr1 = " company_id = '".$_REQUEST['user_id']."'";
    $RODetails = $usr->GetSelWhere($tbl,$flds,$Whr1);
    $total_extendedsale = '';
    $total_extendedsale = $RODetails['0']['total_extendedsale'];
    //echo $total_extendedsale;
    if($ctotal != '' && $ctotal != 0) {
        $avgCustLifeVal = $total_extendedsale/$ctotal;
        //echo $avgCustLifeVal;exit;
    } else
        $avgCustLifeVal = 0;  
    
    
    
    /************* CALCULATE CUSTOMER DATA ****************/
    $dataArray          = array();
    $currentYear        = date('Y');
    $lastYear           = 1980;
    $avgVariance        = 0;
    $bestYear          = $currentYear;
    $averageYear       = $currentYear;
    $highestYear       = $currentYear;
    $lowestYear        = $currentYear;
    $highestYearTotal  = 0;
    $lowsetYearTotal   = 0;
    $averageYearTotal  = 0;
    $TotalAmt = 0;
    $avgVarPercentage   = 0;
    //$noYears = $currentYear - $lastYear;
    $noYears = 0;
    for($i=$currentYear,$j=1;$i>=$lastYear;$i--){
        $dataArray[$i]['Year']   = $i;
           /*
        // No. of customers by YEAR
        $custTotalClass = '';
        $ctotalArray    = array();
        $Where		= "1=1 AND company_id = '".$_REQUEST['user_id']."' AND YEAR(reg_date) = '".$i."'";
        $fields         = "cust_id";
        $Table		= "XML_customers";
        $ctotalArray	= $usr->GetSelWhere($Table, $fields, $Where);
        $dataArray[$i]['custTotal']   = count($ctotalArray);
        if($dataArray[$i]['custTotal'] != 0){
            $noYears++;$j++;
        }        
        */
     
        // No. of customers by YEAR
        $custTotalClass = '';
        $ctotalArray    = array();
        $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."' GROUP BY cust_id";
        $fields         = "id";
        $Table		= "XML_ro";
        $ctotalArray	= $usr->GetSelWhere($Table, $fields, $Where);
        $dataArray[$i]['custTotal']   = count($ctotalArray);
         if($dataArray[$i]['custTotal'] != 0){
            $noYears++;$j++;
        }  
        
        // To Calculate Customer Variance
        $custVariance   = 0;
        if($i < $currentYear && $dataArray[$i]['custTotal'] != 0){
            $custVariance    = abs($dataArray[$i+1]['custTotal'] / $dataArray[$i]['custTotal']);
           // echo "<prE>";print_r($custVarianceAry);
        }
        $custVariance   = abs($custVariance)*100;
        $dataArray[$i+1]['custVariance']   = $custVariance;
        
        
        
        // To Get Customer Class (Red, Blue or Black)
        $dataArray[$i+1]['custTotalClass']    = '#000000';
        $dataArray[$i+1]['custVarianceClass']    = '#000000';
        if($i != $currentYear){
            if($dataArray[$i]['custTotal'] < $dataArray[$i+1]['custTotal']){
                $dataArray[$i+1]['custTotalClass']    = "#2090FF";
                // To find Percentage Difference (should be blue only if the difference is Greater  thean 10%)
                $custPercDiff   = 0;
                if($dataArray[$i]['custTotal'] != 0){
                    $custPercDiff   = abs($dataArray[$i+1]['custTotal']/$dataArray[$i]['custTotal']);
                }
                if($custPercDiff > 10){
                    $dataArray[$i+1]['custVarianceClass']    = "#2090FF";
                }
            } elseif($dataArray[$i]['custTotal'] > $dataArray[$i+1]['custTotal']){
                $dataArray[$i+1]['custTotalClass']    = "#FF0000";
                $dataArray[$i+1]['custVarianceClass']    = "#FF0000";
            } else {
                $dataArray[$i+1]['custTotalClass']    = "#000000";
                $dataArray[$i+1]['custVarianceClass']    = "#000000";
            }
        } else {
                $dataArray[$i+1]['custTotalClass']    = "#000000";
                $dataArray[$i+1]['custVarianceClass']    = "#000000";
        }
        
        // Total RO's
        $Where2		= "1=1 AND company_id = '".$_REQUEST['user_id']."' AND YEAR(transaction_date) = '".$i."'";
        $Table2		= "XML_ro";
        $rototal	= $usr->TotalRows($Table2,$Where2);
        $dataArray[$i]['roTotal']   = $rototal;
        
        
        
        
        // To Calculate RO's Variance
        $roVariance   = 0;
        if($i < $currentYear && $dataArray[$i]['roTotal'] != 0){
            $roVariance    = abs($dataArray[$i+1]['roTotal'] / $dataArray[$i]['roTotal']);
        }
        $roVariance   = abs($roVariance)*100;
        $dataArray[$i+1]['roVariance']   = $roVariance;
        
        
        // To Get Ro's Class (Red, Blue or Black)
        $dataArray[$i+1]['roTotalClass']    = '#000000';
        $dataArray[$i+1]['roVarianceClass']    = '#000000';
        if($i != $currentYear){
            if($dataArray[$i]['roTotal'] < $dataArray[$i+1]['roTotal']){
                $dataArray[$i+1]['roTotalClass']    = "#2090FF";
                // To find Percentage Difference (should be blue only if the difference is Greater  thean 10%)
                $roPercDiff   = 0;
                if($dataArray[$i]['roTotal'] != 0){
                    $roPercDiff   = abs($dataArray[$i+1]['roTotal']/$dataArray[$i]['roTotal']);
                }
                if($roPercDiff > 10){
                    $dataArray[$i+1]['roVarianceClass']    = "#2090FF";
                }
                
            } elseif($dataArray[$i]['roTotal'] > $dataArray[$i+1]['roTotal']){
                $dataArray[$i+1]['roTotalClass']    = "#FF0000";
                $dataArray[$i+1]['roVarianceClass']    = "#FF0000";
            } else {
                $dataArray[$i+1]['roTotalClass']    = "#000000";
                $dataArray[$i+1]['roVarianceClass']    = "#000000";
            }
        } else {
                $dataArray[$i+1]['roTotalClass']    = "#000000";
                $dataArray[$i+1]['roVarianceClass']    = "#000000";
        }
               
        
        // No. of Vehicles by YEAR
        $ctotalArray    = array();
        $Where		= "1=1 AND company_id = '".$_REQUEST['user_id']."' AND YEAR(vreg_date) = '".$i."' GROUP BY vehicle_id";
        $fields         = "vehicle_id";
        $Table		= "XML_vehicle";
        $vtotalArray	= $usr->GetSelWhere($Table, $fields, $Where);
        $dataArray[$i]['vehicleTotal']   = count($vtotalArray);
        
        
        // To Calculate Vehicle's Variance
        $vehicleVariance   = 0;
        if($i < $currentYear && $dataArray[$i]['vehicleTotal'] != 0){
            $vehicleVariance    = abs($dataArray[$i+1]['vehicleTotal'] / $dataArray[$i]['vehicleTotal']);
        }
        $vehicleVariance   = abs($vehicleVariance)*100;
        $dataArray[$i+1]['vehicleVariance']   = $vehicleVariance;
        
        
        
        // To Get Vehicle Class (Red, Blue or Black)
        $dataArray[$i+1]['vehicleTotalClass']    = '#000000';
        $dataArray[$i+1]['vehicleVarianceClass']    = '#000000';
        if($i != $currentYear){
            if($dataArray[$i]['vehicleTotal'] < $dataArray[$i+1]['vehicleTotal']){
                $dataArray[$i+1]['vehicleTotalClass']    = "#2090FF";
                // To find Percentage Difference (should be blue only if the difference is Greater  thean 10%)
                $vehiPercDiff   = 0;
                if($dataArray[$i]['vehicleTotal'] != 0){
                    $vehiPercDiff   = abs($dataArray[$i+1]['vehicleTotal']/$dataArray[$i]['vehicleTotal']);
                }
                if($vehiPercDiff > 10){
                    $dataArray[$i+1]['vehicleVarianceClass']    = "#2090FF";
                }
            } elseif($dataArray[$i]['vehicleTotal'] > $dataArray[$i+1]['vehicleTotal']){
                $dataArray[$i+1]['vehicleTotalClass']    = "#FF0000";
                $dataArray[$i+1]['vehicleVarianceClass']    = "#FF0000";
            } else {
                $dataArray[$i+1]['vehicleTotalClass']    = "#000000";
                $dataArray[$i+1]['vehicleVarianceClass']    = "#FF0000";
            }
        } else {
                $dataArray[$i+1]['vehicleTotalClass']    = "#000000";
                $dataArray[$i+1]['vehicleVarianceClass']    = "#FF0000";
        }
        
        // To Calculate Current Vs Prior Year To Date in $'s
        $grossSaleArrayCy2Py    = array();
        $WhereCy2Py		= "1=1 AND company_id = '".$_REQUEST['user_id']."' AND transaction_date BETWEEN '".$i."-01-01'  AND '".date($i.'-m-d')."'";
        $fieldsCy2Py            = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $TableCy2Py		= "XML_ro ";
        $grossSaleArrayCy2Py	= $usr->GetSelWhere($TableCy2Py, $fieldsCy2Py, $WhereCy2Py);
        
        if(!empty($grossSaleArrayCy2Py) && $grossSaleArrayCy2Py[0]['gross'] != '') {
            $dataArray[$i]['grossSaleCy2Py']   = $grossSaleArrayCy2Py[0]['gross'];
        } else {
            $dataArray[$i]['grossSaleCy2Py']   = 0;
        }
        
        
        
        
        // To CAlculate Current Vs Prior Year To Date in %'s
        if($dataArray[$i]['grossSaleCy2Py'] != 0) {
            $grossSaleCy2PyPercentage   = $dataArray[$i+1]['grossSaleCy2Py']/$dataArray[$i]['grossSaleCy2Py'];
            $dataArray[$i+1]['grossSaleCy2PyPercentage'] = abs($grossSaleCy2PyPercentage)*100;
        } else {
            $dataArray[$i+1]['grossSaleCy2PyPercentage']   = 0;
        }
        
        
        // To Current Vs Prior Year To Date in $'s Class (Red, Blue or Black)
        $dataArray[$i+1]['grossSaleCy2PyClass']    = '#000000';
        $dataArray[$i+1]['grossSaleCy2PyPercentageClass']    = '#000000';
        if($i != $currentYear){
            if($dataArray[$i]['grossSaleCy2Py'] < $dataArray[$i+1]['grossSaleCy2Py']){
                // To find Percentage Difference (should be blue only if the difference is Greater  thean 10%)
                $grossSaleCy2PyPercDiff   = 0;
                if($dataArray[$i]['grossSaleCy2Py'] != 0){
                    $grossSaleCy2PyPercDiff   = abs($dataArray[$i+1]['grossSaleCy2Py']/$dataArray[$i]['grossSaleCy2Py']);
                }
                
                if($grossSaleCy2PyPercDiff > 10){
                    $dataArray[$i+1]['grossSaleCy2PyPercentageClass']    = "#2090FF";
                }
            } elseif($dataArray[$i]['grossSaleCy2Py'] > $dataArray[$i+1]['grossSaleCy2Py']){
                $dataArray[$i+1]['grossSaleCy2PyClass']    = "#FF0000";
                $dataArray[$i+1]['grossSaleCy2PyPercentageClass']    = '#FF0000';
            } else {
                $dataArray[$i+1]['grossSaleCy2PyClass']    = "#000000";
                $dataArray[$i+1]['grossSaleCy2PyPercentageClass']    = '#000000';
            }
        } else {
                $dataArray[$i+1]['grossSaleCy2PyClass']    = "#000000";
                $dataArray[$i+1]['grossSaleCy2PyPercentageClass']    = '#000000';
        }
        
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$_REQUEST['user_id']."' AND YEAR(transaction_date) = '".$i."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '') {
            $dataArray[$i]['grossSale']   = $grossSaleArray[0]['gross'];
        } else {
            $dataArray[$i]['grossSale']   = 0;
        }
        
        
        // To Get Gross Sale Class (Red, Blue or Black)
        $dataArray[$i+1]['grossSaleClass']    = '#000000';
        if($i != $currentYear){
            if($dataArray[$i]['grossSale'] < $dataArray[$i+1]['grossSale']){
                 // To find Percentage Difference (should be blue only if the difference is Greater  thean 10%)
                $grossSalePercDiff   = 0;
                if($dataArray[$i]['grossSale'] != 0){
                    $grossSalePercDiff   = abs($dataArray[$i+1]['grossSale']/$dataArray[$i]['grossSale']);
                }
                
                if($grossSalePercDiff > 10){
                    $dataArray[$i+1]['grossSaleClass']    = "#2090FF";
                }
            } elseif($dataArray[$i]['grossSale'] > $dataArray[$i+1]['grossSale']){
                $dataArray[$i+1]['grossSaleClass']    = "#FF0000";
            } else {
                $dataArray[$i+1]['grossSaleClass']    = "#000000";
            }
        } else {
                $dataArray[$i+1]['grossSaleClass']    = "#000000";
        }
        
        
        // To Calculate Comparative Gross Sale
        if($i == $lastYear || $dataArray[$i]['custTotal'] == 0 || $i == $currentYear) {
            $dataArray[$i]['comparativeGrossSale'] = 0;
        } else {
            $dataArray[$i+1]['comparativeGrossSale'] = $dataArray[$i+1]['grossSale'] - $dataArray[$i]['grossSale'];
        }
        
        if($dataArray[$i+1]['comparativeGrossSale'] < 0) {
            $dataArray[$i+1]['comparativeGrossSale'] = abs($dataArray[$i+1]['comparativeGrossSale']);
            $dataArray[$i+1]['absComparativeGrossSaleExp'] = "-";
        }
        
        
        // To Get Ro's Variance Class (Red, Blue or Black)
        // TO  Calculate Variance
        if($i == $currentYear){
            $dataArray[$i+1]['variance']   = 0;
        } else {
            if($dataArray[$i+1]['comparativeGrossSale'] != 0){
                $variance = ($dataArray[$i+2]['comparativeGrossSale']/$dataArray[$i+1]['comparativeGrossSale']);
                $variance1 = (abs($variance))*100;
                $dataArray[$i+2]['variance']   = $variance1;
                
                $avgVariance+= abs($variance);
                
            } else {
                $variance   = 0;
                $dataArray[$i+2]['variance']   = 0;
            }
        }
        
        // To Get Variance Class (Red, Blue or Black)
        $dataArray[$i+1]['comparativeGrossSaleClass']    = '#000000';
        $dataArray[$i+1]['varianceClass']   = '#000000';
        if($i != $currentYear){
            if($dataArray[$i]['comparativeGrossSale'] < $dataArray[$i+1]['comparativeGrossSale']){
                 $comparativeGrossSalePercDiff   = 0;
                if($dataArray[$i+1]['comparativeGrossSale'] != 0){
                    $comparativeGrossSalePercDiff   = abs($dataArray[$i]['comparativeGrossSale']/$dataArray[$i+1]['comparativeGrossSale']);
                }
                if($comparativeGrossSalePercDiff > 10){
                    $dataArray[$i+1]['comparativeGrossSaleClass']    = '#2090FF';
                    $dataArray[$i+1]['varianceClass']    = "#2090FF";
                }
            } elseif($dataArray[$i]['comparativeGrossSale'] > $dataArray[$i+1]['comparativeGrossSale']){
                $dataArray[$i+1]['comparativeGrossSaleClass']    = '#FF0000';
                $dataArray[$i+1]['varianceClass']    = "#FF0000";
            }
        }
        if($i==$currentYear){
            $bestYear      = $dataArray[$i]['Year'];
            $highestYear   = $dataArray[$i]['Year'];
            $lowestYear    = $dataArray[$i]['Year'];
            $highestYearTotal   = $dataArray[$i]['grossSale'];
            $bestYearTotal   = $dataArray[$i]['grossSale'];
            $lowsetYearTotal   = $dataArray[$i]['grossSale'];
        }
        
        if($dataArray[$i]['grossSale'] > $highestYearTotal && $i!=1){
            $bestYear      = $dataArray[$i]['Year'];
            $highestYear   = $dataArray[$i]['Year'];
            $bestYearTotal   = $dataArray[$i]['grossSale'];
            $highestYearTotal   = $dataArray[$i]['grossSale'];
        }
        if(($dataArray[$i]['grossSale'] <= $lowsetYearTotal) && $dataArray[$i]['grossSale'] != 0){
            $lowestYear        = $dataArray[$i]['Year'];
            $lowsetYearTotal   = $dataArray[$i]['grossSale'];
		}
        $TotalAmt = $TotalAmt+$dataArray[$i]['grossSale'];
        $avgVarPercentage += $dataArray[$i+1]['grossSaleCy2PyPercentage'];
        //echo $avgVarPercentage."---".$dataArray[$i+1]['grossSaleCy2PyPercentage']."--->".($j-1)."<br />";
    }
    $avgVariance    = $avgVarPercentage / ($j-1);
    $averageYearTotal   = $TotalAmt/$noYears;
    //echo "<pre>";print_r($dataArray);exit;
    
    
    /***** To Calculate Loyalty Rate *****/
    
    // total average years of all visitors for All Time
    $totalVisitorsAllYrsAry = array();
    $totalVisitorsAllYrsAry	= $usr->GetSelWhere("XML_ro", "id, cust_id, company_id, MIN( transaction_date ) , MAX( transaction_date ) , DATEDIFF( MAX( transaction_date ) , MIN( transaction_date ) ) AS days", "company_id = '".$_REQUEST['user_id']."' GROUP BY cust_id");
    //echo "<pre>";print_r($totalVisitorsAllYrsAry);exit;
    $totalVisitsCnt = count($totalVisitorsAllYrsAry);
    $allVisitsCnt=0;
    foreach ($totalVisitorsAllYrsAry as $allVisitsAry){
        $allVisitsCnt   += $allVisitsAry['days'];
    }
    
    $avgVisits  = $allVisitsCnt / $totalVisitsCnt;
    
    
    // total average year of all visitors for Last 12 Months    
    $last12monthsVisitorsAllYrsAry = array();
    $last12monthsVisitorsAllYrsAry	= $usr->GetSelWhere("XML_ro", "id, cust_id, company_id, MIN( transaction_date ) , MAX( transaction_date ) , DATEDIFF( MAX( transaction_date ) , MIN( transaction_date ) ) AS days", "company_id = '".$_REQUEST['user_id']."' AND transaction_date >= DATE_SUB( NOW( ) , INTERVAL 12 MONTH )  GROUP BY cust_id");
    //echo "<pre>";print_r($last12monthsVisitorsAllYrsAry);exit;
    $last12monthsVisitsCnt = count($last12monthsVisitorsAllYrsAry);
    $last12monthsallVisitsCnt=0;
    foreach ($last12monthsVisitorsAllYrsAry as $last12monthsVisitsAry){
        $last12monthsallVisitsCnt   += $last12monthsVisitsAry['days'];
    }
    
    //echo $last12monthsallVisitsCnt."--->".$last12monthsVisitsCnt;exit;
    
    $last12monthsavgVisits1  = $last12monthsallVisitsCnt / $last12monthsVisitsCnt;
    
    $years = ($last12monthsavgVisits1 / 365) ; // days / 365 days
    $years = floor($years); // Remove all decimals

    $month = ($last12monthsavgVisits1 % 365) / 30.5; // I choose 30.5 for Month (30,31) ;)
    $month = floor($month); // Remove all decimals

    $days = ($last12monthsavgVisits1 % 365) % 30.5; // the rest of days
    
    $last12monthsavgVisits  = $years." Year(s), ".$month." Month(s) and ".$days." Day(s)";
    
    
    
     /// Average Visits for all Time
    
    $years2 = ($avgVisits / 365) ; // days / 365 days
    $years2 = floor($years2); // Remove all decimals

    $month2 = ($avgVisits % 365) / 30.5; // I choose 30.5 for Month (30,31) ;)
    $month2 = floor($month2); // Remove all decimals

    $days2 = ($avgVisits % 365) % 30.5; // the rest of days
    
    $avgVisits  = $years2." Year(s), ".$month2." Month(s) and ".$days2." Day(s)";
    
    $smarty->assign("todayDate",date('m-d-Y'));
    $smarty->assign("res",$res);
    $smarty->assign("avgCustLifeVal",$avgCustLifeVal);
    $smarty->assign("avgVariance",$avgVariance);
    $smarty->assign("dataArray",$dataArray);
    $smarty->assign("bestYear",$bestYear);
    $smarty->assign("highestYear",$highestYear);
    $smarty->assign("lowestYear",$lowestYear);
    $smarty->assign("averageYear",$averageYear);
    $smarty->assign("bestYearTotal",$bestYearTotal);
    $smarty->assign("highestYearTotal",$highestYearTotal);
    $smarty->assign("lowestYearTotal",$lowsetYearTotal);
    $smarty->assign("averageYearTotal",$averageYearTotal);
    $smarty->assign("avgCustVisits",$avgVisits);
    $smarty->assign("last12monthsavgCustVisits",$last12monthsavgVisits);
    $smarty->assign("Page",$page);
    $smarty->assign("Page1",$page1);
    $smarty->display('customer-dashboard-statistics.tpl');
?>
