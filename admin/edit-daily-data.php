<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign("Page","daily");
$usr 		= new General;
function dateDiff($start, $end) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = $end_ts - $start_ts;
	return round(($diff+86400) / 86400);
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PoFields = array();
	$PoFields['available_hours'] = $_REQUEST['Log']['available_hours'];
	$PoFields['actual_hours'] = $_REQUEST['Log']['actual_hours'];
	$PoFields['sold_hours'] = $_REQUEST['Log']['sold_hours'];
	$insItems	= $Gen->UpdateQry('tbl_daily_hours',$PoFields,"id = '".$_REQUEST['id']."'");

	header("Location:".SITEURL.'/admin/users-daily-data.php?user_id='.$_REQUEST['user_id']);
}
//Code To Get Caleder
$Items = $usr->GetSelWhere("tbl_daily_hours","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
$smarty->assign('Items',$Items[0]);
//echo "<pre>";print_r($Items[0]);exit;
$smarty->display('edit-daily-data.tpl');
?>