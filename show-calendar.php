<?php
require_once("includes/application_start.php");
$smarty->assign("Page","marketing");
$usr 		= new General;
$_REQUEST['id'] = base64_decode($_REQUEST['id']);
$chk = $usr->TotalRows("tbl_shared_calendars","cal_id = '".base64_decode($_REQUEST['id'])."' AND status = 'A'");
if($chk == 0)
{
	header("Location:".SITEURL."/error404.php");
	exit(0);
}
$chk1 = $usr->TotalRows("tbl_calendars","id = '".base64_decode($_REQUEST['id'])."' AND status = 'A'");
if($chk1 == 0)
{
	header("Location:".SITEURL."/error404.php");
	exit(0);
}
$smarty->display('show-calendar.tpl');
?>