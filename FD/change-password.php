<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Post')
{
	/************* To Get the Old Password of the User ********/
	$PassQry 	= "SELECT password  FROM tbl_shop WHERE Shop_ID = ".$_SESSION['User']['UID'];		
	$Pdetails 	= $Gen->SelectQuery($PassQry);
	$OrgPass	= base64_decode($Pdetails[0]['password']);
	$OldPass	= $_REQUEST['Old_Password'];
	//echo "<pre>";print_r($_SESSION);exit;
	//echo "UPDATE wp_users SET user_pass = '".md5($_REQUEST['Password'])."' WHERE user_login = '".$_SESSION['User']['user_name']."'";exit;
	if($OrgPass == $OldPass)
	{
		$UpVcnt	= mysql_query("UPDATE tbl_shop SET password = '".base64_encode($_REQUEST['Password'])."' WHERE Shop_ID = '".$_SESSION['User']['UID']."'");
		header('Location:'.SITEURL."/logout.php?cp=Change");
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

