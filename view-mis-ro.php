<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
$smarty->assign("Page","customers");
/*****section to get the details from data base*********************/
if(isset($_REQUEST['hid']) && $_REQUEST['hid'] != "")
{
	$Table		= "MIS_history";
	$Fields		= "*";
	$Where 		= "MIS_id = ".$_REQUEST['hid'];
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	//echo '<pre>';print_r($User);exit;
	$smarty->assign('User',$User[0]);
}
$smarty->display('view-mis-ro.tpl');
?>