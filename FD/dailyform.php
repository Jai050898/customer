<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','Home');
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$error = "";
	$chkrec	= $Gen->TotalRows("tbl_daily","shop_id = '".$_SESSION['User']['UID']."' AND year = '".date("Y")."' AND month = '".date("m")."' AND day = '".$_REQUEST['id']."'");
	if($chkrec == 0)
	{
		$InsArr				= $_REQUEST['Log'];
		$InsArr['shop_id'] = $_SESSION['User']['UID'];
		$InsArr['year'] = date("Y");
		$InsArr['month'] = date("m");
		$InsArr['day'] = $_REQUEST['id'];
		$ins 						= $Gen->InsertQry('tbl_daily',$InsArr);
		header('Location:'.SITEURL.'/list-daily-sales.php');
	}
	else
	{
			$smarty->assign("error","Data Exist with this Date");
			$smarty->assign("AccDet",$_REQUEST['Log']);
	}
}
$smarty->display('dailyform.tpl');
?>