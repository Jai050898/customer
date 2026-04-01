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
    
    for($i=$currentYear;$i>=$lastYear;$i--){
        
        $dataArray[$i]['Year']   = $i;
        
        // No. of customers by YEAR
        $ctotalArray    = array();
        $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."' GROUP BY cust_id";
        $fields         = "cust_id";
        $Table		= "XML_ro";
        $ctotalArray	= $usr->GetSelWhere($Table, $fields, $Where);
        $dataArray[$i]['custTotal']   = count($ctotalArray);
        
        // Total RO's
        $Where2		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
        $Table2		= "XML_ro ";
        $rototal	= $usr->TotalRows($Table2,$Where2);
        $dataArray[$i]['roTotal']   = $rototal;
        
        
        // No. of Vehicles by YEAR
        $ctotalArray    = array();
        $Where		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."' GROUP BY vehicle_id";
        $fields         = "vehicle_id";
        $Table		= "XML_ro";
        $vtotalArray	= $usr->GetSelWhere($Table, $fields, $Where);
        $dataArray[$i]['vehicleTotal']   = count($vtotalArray);
        
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '')
            $dataArray[$i]['grossSale']   = $grossSaleArray[0]['gross'];
        else
            $dataArray[$i]['grossSale']   = 0;
        
        
        // TO  Calculate Variance
        if($i == $currentYear || $i == $lastYear){
            $dataArray[$i]['variance']   = "-N/A-";
        } else {
            if($dataArray[$i]['custTotal'] != 0){
                $variance = ($dataArray[$i+1]['custTotal']/$dataArray[$i]['custTotal']);
                $variance1 = ($variance)*100;
                $avgVariance+= $variance;
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
    $averageYearTotal = $TotalAmt/$noYears;
    //echo "<pre>";print_r($dataArray);
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
    $smarty->assign("Page",$page);
    $smarty->assign("Page1",$page1);
    $smarty->display('customer-dc.tpl');
?>