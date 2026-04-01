<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Edit What If Scenario');
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo ",prE>";print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->UpdateQry('what_if_scenarios',$PrFields,"id = '".$_REQUEST['id']."'");
	header("Location:".SITEURL.'/wis.php');
}
$Tasks = $usr->GetSelWhere("what_if_scenarios","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
for($i=0;$i<count($Tasks);$i++)
{
	$Tasks[$i]['GLS'] = $Tasks[$i]['technicians']*$Tasks[$i]['effeciency']*$Tasks[$i]['productivity']*$Tasks[$i]['labor_percentage']*$Tasks[$i]['hours_per_tech'];
	$Tasks[$i]['GPS'] = $Tasks[$i]['GLS']*$Tasks[$i]['parts_to_labor_ratio'];
	$Tasks[$i]['GS'] = $Tasks[$i]['GPS']+$Tasks[$i]['GLS'];
	$Tasks[$i]['TLC'] = $Tasks[$i]['GLS']*$Tasks[$i]['labor_percentage'];
	$Tasks[$i]['TPC'] = $Tasks[$i]['GPS']*$Tasks[$i]['parts_percentage'];
	$Tasks[$i]['MB'] = $Tasks[$i]['GS']*$Tasks[$i]['advertising_percentage'];
	$Tasks[$i]['RB'] = $Tasks[$i]['GS']*$Tasks[$i]['rent_percentage'];
	$Tasks[$i]['NOC'] = $Tasks[$i]['GS']/$Tasks[$i]['average_RO'];
}
//echo "<pre>";print_r($Tasks);exit;
$smarty->assign('Tasks',$Tasks[0]);
$smarty->display('edit-wis.tpl');
?>