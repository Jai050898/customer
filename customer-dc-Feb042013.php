<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
//Total Cutomers
$Where		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."'";
$Table		= "MIS_customers ";
$total		= $usr->TotalRows($Table,$Where);
$year = date('Y') - 1;
$last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
$LWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last."'";
$Ltotal		= $usr->TotalRows($Table,$LWhere);
$smarty->assign("ctot",$total);
$smarty->assign("ltot",$Ltotal);
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
$totalVisots = $Res[0]['totvisits'];
$LtotalVisots = $LRes[0]['totvisits'];

$smarty->assign("avgcust",number_format($avgcust,2));
$smarty->assign("lavgcust",number_format($lavgcust,2));

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
if($totalVisots != 0)
	$avgcost = $CostRes[0]['totamt']/$totalVisots;
else
	$avgcost = "0";
if($LtotalVisots != 0)	
	$lavgcost = $LCostRes[0]['totamt']/$LtotalVisots;
else
	$lavgcost = "0";
$smarty->assign("avgcost",number_format($avgcost,2));
$smarty->assign("lavgcost",number_format($lavgcost,2));

//Lastvisot Avg for customers
$Where		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."'";
$Table		= "MIS_customers ";
$Fields		= "SUM(DATEDIFF(NOW(),MIS_LastVisited)) as totdays";
$DaysRes 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<prE>";print_r($DaysRes);exit;
$year = date('Y') - 1;
$last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
$LWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$last."'";
$LFields		= "SUM(DATEDIFF(NOW(),MIS_LastVisited)) as totdays";
$LDaysRes		= $usr->GetSelWhere($Table,$LFields,$LWhere);
if($total != 0)
	$avgdays = $DaysRes[0]['totdays']/$total;
else
	$avgdays = "0";
if($Ltotal != 0)	
	$lavgdays = $LDaysRes[0]['totdays']/$Ltotal;
else
	$lavgdays = "0";
$smarty->assign("avgdays",number_format($avgdays,2));
$smarty->assign("lavgdays",number_format($lavgdays,2));
$smarty->display('customer-dc.tpl');
?>