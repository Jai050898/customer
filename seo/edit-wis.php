<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$smarty->assign("Page","marketing");
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo ",prE>";print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->UpdateQry('what_if_scenarios',$PrFields,"id = '".$_REQUEST['id']."'");
	header("Location:".SITEURL.'/seo/wis.php?user_id='.$_REQUEST['user_id']);
}
$Cal = $usr->GetSelWhere("what_if_scenarios","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
$smarty->assign('Tasks',$Cal[0]);
$smarty->display('edit-wis.tpl');
?>