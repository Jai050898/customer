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
	for($i=0;$i<count($_REQUEST['Log']['ddate']);$i++)
	{
			$PoFields = array();
			$PoFields['customer_id'] = $_REQUEST['user_id'];
			$PoFields['ddate'] = $Gen->Date_Format($_REQUEST['Log']['ddate'][$i]);
			$PoFields['available_hours'] = $_REQUEST['Log']['available_hours'][$i];
			$PoFields['actual_hours'] = $_REQUEST['Log']['actual_hours'][$i];
			$PoFields['sold_hours'] = $_REQUEST['Log']['sold_hours'][$i];
			$insItems	= $Gen->InsertQry('tbl_daily_hours',$PoFields);
	}
	header("Location:".SITEURL.'/admin/users-daily-data.php?user_id='.$_REQUEST['user_id']);
}

$smarty->display('add-daily-data.tpl');
?>