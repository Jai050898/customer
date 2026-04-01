<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_client.php");
$Page = 'MyAccount';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Post')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	/************* To Get the Old Password of the User ********/
	$PassQry 	= "SELECT password  FROM tbl_clients WHERE client_id = ".$_SESSION['Client']['CID'];		
	$Pdetails 	= $Gen->SelectQuery($PassQry);
	$OrgPass	= base64_decode($Pdetails[0]['password']);
	$OldPass	= $_REQUEST['Old_Password'];
	if($OrgPass == $OldPass)
	{
		$UpVcnt		= mysql_query("UPDATE tbl_clients SET password = '".base64_encode($_REQUEST['Password'])."' WHERE client_id = ".$_SESSION['Client']['CID']);
		$response 	= 'Successfully changed';
	}
	else
	{
		$response	= 'Incorrect Old Password. Please try again';
	}
}
$smarty->assign('response',$response);
$smarty->assign('Page',$Page);
$smarty->display('change-password.tpl');
?>

