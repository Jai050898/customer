<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','Home');
$usr 		= new General;
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$error = "";
	$chkrec	= $Gen->TotalRows("tbl_annual","Shop_ID = '".$_SESSION['User']['UID']."' AND year = '".$_REQUEST['Log']['year']."'");
	if($chkrec == 0)
	{
		$InsArr				= $_REQUEST['Log'];
		$InsArr['shop_id'] = $_SESSION['User']['UID'];
		$ins 						= $Gen->InsertQry('tbl_annual',$InsArr);
		header('Location:'.SITEURL.'/annual-sales.php');
	}
	else
	{
			$smarty->assign("error","Data Exist with this year");
			$smarty->assign("AccDet",$_REQUEST['Log']);
	}
}
$smarty->display('yearly-sales.tpl');
?>