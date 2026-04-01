<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign("Page","marketing");
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	
		$insarr = $_REQUEST['Log'];
		$insarr['customer_id'] = $_REQUEST['user_id'];
		$insarr['	created_date'] = date("Y-m-d");
		$insid = $Gen->InsertQry('what_if_scenarios',$insarr);
		header("Location:".SITEURL.'/admin/wis.php?user_id='.$_REQUEST['user_id']);
}
$smarty->display('add-wis.tpl');
?>