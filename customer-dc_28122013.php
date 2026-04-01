<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Customer Data Center');
    $usr 		= new General;
    $page = "customers";
    $page1 = "map";
    
    

    ////Shop Details
    //$Table		= "tbl_users A 
    //                        LEFT JOIN tbl_country B ON A.country = B.Country_Code
    //                        LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
    //$Fields		= 'A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.phone,A.fax,A.address,A.city,A.country,A.state,A.zip_code,A.website,A.coordinates,B.Country_Name,C.State_Name';
    //$AccDetarr	= $Gen->GetSelWhere($Table,$Fields," user_id = ".$_SESSION['User']['UID']);
    //for($i=0;$i<count($AccDetarr);$i++)
    //{
    //	if($AccDetarr[$i]['coordinates'] != "")
    //		list($lat,$lang) = explode(" ",$AccDetarr[$i]['coordinates']);
    //
    //	$AccDetarr[$i]['coordinates'] = $lat.",".$lang;
    //}
    //$AccDet	 = $AccDetarr;
    //$smarty->assign("AccDet",$AccDet);
    //$smarty->assign("AccDetcnt",count($AccDet));
    ////echo "<pre>";print_r($AccDet);exit;

    
    
    //Total Cutomers
    $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table		= "XML_customers ";
    $ctotal		= $usr->TotalRows($Table,$Where);
    //echo $ctotal;exit;
    $smarty->assign("ctot",$ctotal);


    // Total Vehicles
    $Where1		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table1		= "XML_vehicle ";
    $vtotal		= $usr->TotalRows($Table1,$Where1);
    //echo $vtotal;exit;
    $smarty->assign("vtot",$vtotal);

    // Total RO's
    $Where2		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table2		= "XML_ro ";
    $rototal		= $usr->TotalRows($Table2,$Where2);
    //echo $rototal;exit;
    $smarty->assign("rotot",$rototal);

    // Total RO Details(Transactions
    $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table3		= "XML_ro_details ";
    $ro_detail_total    = $usr->TotalRows($Table3,$Where3);
    //echo $ro_detail_total;exit;
    $smarty->assign("ro_transactio_tot",$ro_detail_total);

    // Total Schedules
    $Where4		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table4		= "XML_schedule ";
    $sctotal    = $usr->TotalRows($Table4,$Where4);
    //echo $sctotal;exit;
    $smarty->assign("sctot",$sctotal);
        
    /****** For Calculating Average Customer Lifetime Value ******/
    // RO Get All RO Details
    $tbl = "XML_ro_details";
    $flds = "sum(extendedsale) as total_extendedsale";
    $Whr1 = " company_id = '".$_SESSION['User']['xml_id']."'";
    $RODetails = $usr->GetSelWhere($tbl,$flds,$Whr1);
    $total_extendedsale = '';
    $total_extendedsale = $RODetails['0']['total_extendedsale'];
    //echo $total_extendedsale;exit;
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
	$noYears = $currentYear - $lastYear;
    
    for($i=$currentYear,$j=1;$i>=$lastYear;$i--){
        
        $dataArray[$i]['Year']   = $i;
        
        // No. of customers by YEAR
        $ctotalArray    = array();
        $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(reg_date) = '".$i."' GROUP BY cust_id";
        $fields         = "cust_id";
        $Table		= "XML_customers";
        $ctotalArray	= $usr->GetSelWhere($Table, $fields, $Where);
        $dataArray[$i]['custTotal']   = count($ctotalArray);
        
        
        // To Calculate Customer Variance
        $custVariance   = 0;
        if($i < $currentYear && $dataArray[$i]['custTotal'] != 0){
            $custVariance    = abs($dataArray[$i+1]['custTotal'] / $dataArray[$i]['custTotal']);
            //echo "<prE>";print_r($custVarianceAry);exit;
        }
        $custVariance   = abs($custVariance)*100;
        $dataArray[$i+1]['custVariance']   = $custVariance;
        
        
        // Total RO's
        $Where2		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
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
        
        
        
        // No. of Vehicles by YEAR
        $ctotalArray    = array();
        $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(vreg_date) = '".$i."' GROUP BY vehicle_id";
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
        
        
        
        // To Calculate Current Vs Prior Year To Date in $'s
        $grossSaleArrayCy2Py = array();
        $WhereCy2Py		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND transaction_date BETWEEN '".$i."-01-01'  AND '".date($i.'-m-d')."'";
        $fieldsCy2Py         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
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
        
        
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '') {
            $dataArray[$i]['grossSale']   = $grossSaleArray[0]['gross'];
        } else {
            $dataArray[$i]['grossSale']   = 0;
        }
        
        // To Calculate Comparative Gross Sale
        if($i == $lastYear || $dataArray[$i]['custTotal'] == 0) {
            $dataArray[$i]['comparativeGrossSale'] = 0;
        } else {
            $dataArray[$i+1]['comparativeGrossSale'] = $dataArray[$i+1]['grossSale'] - $dataArray[$i]['grossSale'];
        }
        
        if($dataArray[$i]['comparativeGrossSale'] < 0) {
            $dataArray[$i]['comparativeGrossSale'] = abs($dataArray[$i]['comparativeGrossSale']);
            $dataArray[$i]['absComparativeGrossSaleExp'] = "-";
        }
//        if($dataArray[$i]['custTotal'] != 0){
//            $compVariance = ($dataArray[$i+1]['custTotal']/$dataArray[$i]['custTotal']);
//             $compVariance1 = (abs($compVariance))*100;
//            $avgVariance+= abs($compVariance);
//        } else {
//            $compVariance   = 0;
//        }
//        $dataArray[$i]['comparativevariance']   = $compVariance1;
        
        
        // TO  Calculate Variance
        if($i == $currentYear || $i == $lastYear){
            $dataArray[$i]['variance']   = "-N/A-";
        } else {
            if($dataArray[$i]['custTotal'] != 0){
                 $j++;
                $variance = ($dataArray[$i+1]['custTotal']/$dataArray[$i]['custTotal']);
                 $variance1 = (abs($variance))*100;
                $avgVariance+= abs($variance);
                $dataArray[$i]['variance']   = $variance1;
            } else {
                $variance   = 0;
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
    }
    $avgVariance    = ($avgVariance / $j)*100;
    $averageYearTotal   = $TotalAmt/$noYears;
    //echo "<pre>";print_r($dataArray);exit;
    
    
    /***** To Calculate Loyalty Rate *****/
    
    // total average years of all visitors for All Time
    $totalVisitorsAllYrsAry = array();
    $totalVisitorsAllYrsAry	= $usr->GetSelWhere("XML_ro", "id, cust_id, company_id, MIN( transaction_date ) , MAX( transaction_date ) , DATEDIFF( MAX( transaction_date ) , MIN( transaction_date ) ) AS days", "company_id = '".$_SESSION['User']['xml_id']."' GROUP BY cust_id");
    //echo "<pre>";print_r($totalVisitorsAllYrsAry);exit;
    $totalVisitsCnt = count($totalVisitorsAllYrsAry);
    $allVisitsCnt=0;
    foreach ($totalVisitorsAllYrsAry as $allVisitsAry){
        $allVisitsCnt   += $allVisitsAry['days'];
    }
    
    $avgVisits  = $allVisitsCnt / $totalVisitsCnt;
    
    
    // total average year of all visitors for Last 12 Months
    
    $last12monthsVisitorsAllYrsAry = array();
    $last12monthsVisitorsAllYrsAry	= $usr->GetSelWhere("XML_ro", "id, cust_id, company_id, MIN( transaction_date ) , MAX( transaction_date ) , DATEDIFF( MAX( transaction_date ) , MIN( transaction_date ) ) AS days", "company_id = '".$_SESSION['User']['xml_id']."' AND transaction_date >= DATE_SUB( NOW( ) , INTERVAL 6 MONTH )  GROUP BY cust_id");
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
    $smarty->display('customer-dc.tpl');
?>