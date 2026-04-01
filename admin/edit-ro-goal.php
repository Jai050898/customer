<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['LogMain'];
	$UpOverview 				= $Gen->UpdateQry("tbl_ro_goal",$PrFields,"id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/admin/ro-goal.php?user_id='.$_REQUEST['user_id']);
}
$Fields 	= "*";
$Where 		= "id = ".$_REQUEST['id'];
$Projects	= $usr->GetSelWhere("tbl_ro_goal",$Fields,$Where);
$smarty->assign('Projects',$Projects[0]);
$smarty->display('edit-ro-goal.tpl');
?>