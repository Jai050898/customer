<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','Home');
$usr 		= new General;
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
		$InsArr				= $_REQUEST['Log'];
		$ins 						= $Gen->UpdateQry('tbl_daily',$InsArr,"id = '".$_REQUEST['id']."'");
		header('Location:'.SITEURL.'/list-daily-sales.php');
}
$res = $Gen->GetAllWhere("tbl_daily","id='".$_REQUEST['id']."'");
$smarty->assign("Res",$res[0]);
$smarty->display('edit-daily-sales.tpl');
?>