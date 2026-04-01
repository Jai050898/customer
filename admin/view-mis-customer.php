<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Table		= "MIS_customers";
	$Fields		= "*";
	$Where 		= "MIS_cust_ID = ".$_REQUEST['user_id'];
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	//echo '<pre>';print_r($User);exit;
	$smarty->assign('User',$User[0]);
}
$smarty->display('view-mis-customer.tpl');
?>