<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$Page = 'MyAccount';
$usr 		= new General;

$status = "";

if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != '' && is_numeric($_REQUEST['user_id']))
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = array();
	$PrFields['attempts'] = "0";
	$UpOverview = $Gen->UpdateQry("tbl_users",$PrFields,"user_id = ".$_REQUEST['user_id']);
        $status = "unlocked";
}

$smarty->assign('status', $status);
$smarty->display('users-unlock.tpl');
?>