<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
$page = "customers";
$page1 = "map";
//Shop Details
$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code
							LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= 'A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.phone,A.fax,A.address,A.city,A.country,A.state,A.zip_code,A.website,A.coordinates,B.Country_Name,C.State_Name';
$AccDetarr	= $Gen->GetSelWhere($Table,$Fields," user_id = ".$_SESSION['User']['UID']);
for($i=0;$i<count($AccDetarr);$i++)
{
	if($AccDetarr[$i]['coordinates'] != "")
		list($lat,$lang) = explode(" ",$AccDetarr[$i]['coordinates']);

	$AccDetarr[$i]['coordinates'] = $lat.",".$lang;
}
$AccDet	 = $AccDetarr;
$smarty->assign("AccDet",$AccDet);
$smarty->assign("AccDetcnt",count($AccDet));
//echo "<pre>";print_r($AccDet);exit;
//Total Cutomers
$Where		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."'";
$Table		= "MIS_customers ";
$total		= $usr->TotalRows($Table,$Where);
//Last year
$year = date('Y') - 1;
$last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
$LWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last."'";
$Ltotal		= $usr->TotalRows($Table,$LWhere);
$smarty->assign("ctot",$total);
$smarty->assign("ltot",$Ltotal);
//LAst Month
$tyear = date('Y');
$Lmonth = date("m")-1;
$lastmonth = date("Y-m-d", mktime(0, 0, 0, 1, $Lmonth, $tyear));
$LMWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$lastmonth."'";
$LMtotal		= $usr->TotalRows($Table,$LMWhere);
$smarty->assign("lmtot",$LMtotal);
//Last 3 Months
$tyear = date('Y');
$L3month = date("m")-3;
$last3month = date("Y-m-d", mktime(0, 0, 0, 1, $L3month, $tyear));
$L3MWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last3month."'";
$L3Mtotal		= $usr->TotalRows($Table,$L3MWhere);
$smarty->assign("l3mtot",$L3Mtotal);
//Avg Customer Visits
$Where		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."'";
$Table		= "MIS_customers ";
$Fields		= "SUM(MIS_LifetimeVisits) as totvisits";
$Res 	= $usr->GetSelWhere($Table,$Fields,$Where);
$year = date('Y') - 1;
$last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
$LWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last."'";
$LFields		= "SUM(MIS_LifetimeVisits) as totvisits";
$LRes		= $usr->GetSelWhere($Table,$LFields,$LWhere);
if($total != 0)
	$avgcust = $Res[0]['totvisits']/$total;
else
	$avgcust = "0";
if($Ltotal != 0)	
	$lavgcust = $LRes[0]['totvisits']/$Ltotal;
else
	$lavgcust = "0";
//Lastmonth
$tyear = date('Y');
$Lmonth = date("m")-1;
$lastmonth = date("Y-m-d", mktime(0, 0, 0, 1, $Lmonth, $tyear));
$LMWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$lastmonth."'";
$LMFields		= "SUM(MIS_LifetimeVisits) as totvisits";
$LMRes		= $usr->GetSelWhere($Table,$LMFields,$LMWhere);
if($LMtotal != 0)	
	$lmavgcust = $LMRes[0]['totvisits']/$LMtotal;
else
	$lmavgcust = "0";
	
//Last 3 months
$tyear = date('Y');
$L3month = date("m")-3;
$last3month = date("Y-m-d", mktime(0, 0, 0, 1, $L3month, $tyear));
$L3MWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last3month."'";
$L3MFields		= "SUM(MIS_LifetimeVisits) as totvisits";
$L3MRes		= $usr->GetSelWhere($Table,$L3MFields,$L3MWhere);
if($L3Mtotal != 0)	
	$l3mavgcust = $L3MRes[0]['totvisits']/$L3Mtotal;
else
	$l3mavgcust = "0";
	
$totalVisots = $Res[0]['totvisits'];
$LtotalVisots = $LRes[0]['totvisits'];
$LMtotalVisots = $LMRes[0]['totvisits'];
$L3MtotalVisots = $L3MRes[0]['totvisits'];

$smarty->assign("avgcust",number_format($avgcust,2));
$smarty->assign("lavgcust",number_format($lavgcust,2));
$smarty->assign("lmavgcust",number_format($lmavgcust,2));
$smarty->assign("l3mavgcust",number_format($l3mavgcust,2));

//Avg $ cost per Visits
$Where		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."'";
$Table		= "MIS_customers ";
$Fields		= "SUM(MIS_LifeTotal) as totamt";
$CostRes 	= $usr->GetSelWhere($Table,$Fields,$Where);

$year = date('Y') - 1;
$last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
$LWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last."'";
$LFields		= "SUM(MIS_LifeTotal) as totamt";
$LCostRes		= $usr->GetSelWhere($Table,$LFields,$LWhere);
//LAst Month
$tyear = date('Y');
$Lmonth = date("m")-1;
$lastmonth = date("Y-m-d", mktime(0, 0, 0, 1, $Lmonth, $tyear));
$LMWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$lastmonth."'";
$LMFields		= "SUM(MIS_LifeTotal) as totamt";
$LMCostRes		= $usr->GetSelWhere($Table,$LMFields,$LMWhere);
//Last 3 Months
$tyear = date('Y');
$L3month = date("m")-3;
$last3month = date("Y-m-d", mktime(0, 0, 0, 1, $L3month, $tyear));
$L3MWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last3month."'";
$L3MFields		= "SUM(MIS_LifeTotal) as totamt";
$L3MCostRes		= $usr->GetSelWhere($Table,$L3MFields,$L3MWhere);

if($totalVisots != 0)
	$avgcost = $CostRes[0]['totamt']/$totalVisots;
else
	$avgcost = "0";
if($LtotalVisots != 0)	
	$lavgcost = $LCostRes[0]['totamt']/$LtotalVisots;
else
	$lavgcost = "0";
if($LMtotalVisots != 0)	
	$lmavgcost = $LMCostRes[0]['totamt']/$LMtotalVisots;
else
	$lmavgcost = "0";
if($L3MtotalVisots != 0)	
	$l3mavgcost = $L3MCostRes[0]['totamt']/$L3MtotalVisots;
else
	$l3mavgcost = "0";
$smarty->assign("avgcost",number_format($avgcost,2));
$smarty->assign("lavgcost",number_format($lavgcost,2));
$smarty->assign("lmavgcost",number_format($lmavgcost,2));
$smarty->assign("l3mavgcost",number_format($l3mavgcost,2));

//Lastvisot Avg for customers
$Where		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."'";
$Table		= "MIS_customers ";
$Fields		= "SUM(DATEDIFF(NOW(),MIS_LastVisited)) as totdays";
$DaysRes 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<prE>";print_r($DaysRes);exit;
$tyear = date('Y');
$last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $tyear));
$LWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last."'";
$LFields		= "SUM(DATEDIFF(NOW(),MIS_LastVisited)) as totdays";
$LDaysRes		= $usr->GetSelWhere($Table,$LFields,$LWhere);
//Lastmonth
$year = date('Y');
$Lmonth = date("m")-1;
$lastmonth = date("Y-m-d", mktime(0, 0, 0, 1, $Lmonth, $year));
$LMWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$lastmonth."'";
$LMFields		= "SUM(DATEDIFF(NOW(),MIS_LastVisited)) as totdays";
$LMDaysRes		= $usr->GetSelWhere($Table,$LMFields,$LMWhere);
//Last 3 months
$year = date('Y');
$L3month = date("m")-3;
$last3month = date("Y-m-d", mktime(0, 0, 0, 1, $L3month, $year));
$L3MWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last3month."'";
$L3MFields		= "SUM(DATEDIFF(NOW(),MIS_LastVisited)) as totdays";
$L3MDaysRes		= $usr->GetSelWhere($Table,$L3MFields,$L3MWhere);

if($total != 0)
	$avgdays = $DaysRes[0]['totdays']/$total;
else
	$avgdays = "0";
if($Ltotal != 0)	
	$lavgdays = $LDaysRes[0]['totdays']/$Ltotal;
else
	$lavgdays = "0";
if($LMtotal != 0)	
	$lmavgdays = $LMDaysRes[0]['totdays']/$LMtotal;
else
	$lmavgdays = "0";
if($L3Mtotal != 0)	
	$l3mavgdays = $L3MDaysRes[0]['totdays']/$L3Mtotal;
else
	$l3mavgdays = "0";
$smarty->assign("avgdays",number_format($avgdays,2));
$smarty->assign("lavgdays",number_format($lavgdays,2));
$smarty->assign("lmavgdays",number_format($lmavgdays,2));
$smarty->assign("l3mavgdays",number_format($l3mavgdays,2));
//Year Wise Statistics
$cyear = date("Y");
$res = array();
for($i=1;$i<=10;$i++)
{
	$FWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND DATE_FORMAT(MIS_FirstVisited,'%Y')  = '".$cyear."'";
	$Ftotal		= $usr->TotalRows($Table,$LWhere);
	$LWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND DATE_FORMAT(MIS_LastVisited,'%Y')  = '".$cyear."'";
	$Ltotal		= $usr->TotalRows($Table,$LWhere);
	$res[$i]['fvisits'] = $Ftotal;
	$res[$i]['lvisits'] = $Ltotal;
	$res[$i]['year'] = $cyear;
	$cyear = $cyear-1;
}
$smarty->assign("res",$res);
$smarty->assign("Page",$page);
$smarty->assign("Page1",$page1);
$smarty->display('customer-dc_23082013.tpl');
?>