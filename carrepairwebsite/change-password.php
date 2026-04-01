<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'Change_Password';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Post')
{
	/************* To Get the Old Password of the User ********/
	$PassQry 	= "SELECT shop_password  FROM shops WHERE shop_id = ".$_SESSION['User']['UID'];		
	$Pdetails 	= $Gen->SelectQuery($PassQry);
	$OrgPass	= base64_decode($Pdetails[0]['shop_password']);
	$OldPass	= $_REQUEST['Old_Password'];
	if($OrgPass == $OldPass)
	{
		$UpVcnt	= mysql_query("UPDATE shops SET shop_password = '".base64_encode($_REQUEST['Password'])."' WHERE shop_id = ".$_SESSION['User']['UID']);
		$response = 'Successfully changed';
	}
	else
	{
		$response = 'Incorrect Old Password. Please try again';
	}
}
$smarty->assign('response',$response);
$smarty->assign('Page',$Page);
$smarty->display('change-password.tpl');
?>

