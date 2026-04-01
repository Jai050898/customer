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
    $smarty->assign("ctot",$ctotal);


    // Total Vehicles
    $Where1		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table1		= "XML_vehicle ";
    $vtotal		= $usr->TotalRows($Table1,$Where1);
    $smarty->assign("vtot",$vtotal);

    // Total RO's
    $Where2		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table2		= "XML_ro ";
    $rototal		= $usr->TotalRows($Table2,$Where2);
    $smarty->assign("rotot",$rototal);

    // Total RO Details(Transactions
    $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table3		= "XML_ro_details ";
    $ro_detail_total    = $usr->TotalRows($Table3,$Where3);
    $smarty->assign("ro_transactio_tot",$ro_detail_total);

    // Total Schedules
    $Where4		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    $Table4		= "XML_schedule ";
    $sctotal    = $usr->TotalRows($Table4,$Where4);
    $smarty->assign("sctot",$sctotal);
        
    /****** For Calculating Average Customer Lifetime Value ******/
    // RO Get All RO Details
    $tbl = "XML_ro_details";
    $flds = "extendedsale";
    $Whr1 = " company_id = '".$_SESSION['User']['xml_id']."'";
    $RODetails = $usr->GetSelWhere($tbl,$flds,$Whr1);

    $total_extendedsale = '';
    foreach($RODetails as $ro) {
        $total_extendedsale += $ro['extendedsale'];
    }
    //echo $total_extendedsale;exit;
    if($ctotal != '' && $ctotal != 0) {
        $avgCustLifeVal = $total_extendedsale/$ctotal;
        //echo $avgCustLifeVal;exit;
    } else
        $avgCustLifeVal = 0;


    $smarty->assign("res",$res);
    $smarty->assign("avgCustLifeVal",$avgCustLifeVal);
    $smarty->assign("Page",$page);
    $smarty->assign("Page1",$page1);
    $smarty->display('customer-dc.tpl');
?>