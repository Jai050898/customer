<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$smarty->assign('Page','Home');
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] == 'Post')
{
		$InsArr				= $_REQUEST['Log'];
		$ins 						= $Gen->UpdateQry('tbl_daily',$InsArr,"id = '".$_REQUEST['id']."'");
		header('Location:'.SITEURL.'/manager/daily-sales.php?Shop_ID='.$_REQUEST['Shop_ID']);
}
$res = $Gen->GetAllWhere("tbl_daily","id='".$_REQUEST['id']."'");
//echo "<pre>";print_r($res);exit;
$smarty->assign("AccDet",$res[0]);
$smarty->display('edit-daily-sales.tpl');
?>