<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$smarty->assign('Page','Home');
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] == 'Post')
{
	$error = "";
	$chkrec	= $Gen->TotalRows("tbl_annual","Shop_ID = '".$_REQUEST['Shop_ID']."' AND year = '".$_REQUEST['Log']['year']."'");
	if($chkrec == 0)
	{
		$InsArr				= $_REQUEST['Log'];
		$InsArr['shop_id'] = $_REQUEST['Shop_ID'];
		$ins 						= $Gen->InsertQry('tbl_annual',$InsArr);
		header('Location:'.SITEURL.'/manager/yearly-sales.php?Shop_ID='.$_REQUEST['Shop_ID']);
	}
	else
	{
			$smarty->assign("error","Data Exist with this year");
			$smarty->assign("AccDet",$_REQUEST['Log']);
	}
}
$smarty->display('add-yearly-sales.tpl');
?>