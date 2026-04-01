<?php
require_once("includes/application_start.php");
$Page = 'Login';
if(isset($_SESSION['User']['UID']))
{
	header("Location:".SITEURL."/dashboard.php");
	exit(0);
}
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Reg')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$UsrDet				= $Gen->GetSelWhere('tbl_shop','Shop_ID,email,user_name,password,Last_Login_Date,status,created_date'," user_name = '".$_REQUEST['Log']['user_name']."' AND password = '".base64_encode($_REQUEST['Log']['password'])."'");
	$cnt			= count($UsrDet);
	if($cnt != 0)
	{
		if($UsrDet[0]['status'] == 'A')
		{
			$_SESSION['User']['UID']				= $UsrDet[0]['Shop_ID'];
			$_SESSION['User']['Email']				= $UsrDet[0]['email'];
			$_SESSION['User']['user_name']			= $UsrDet[0]['user_name'];
			$_SESSION['User']['Last_Login_Date']	= $UsrDet[0]['Last_Login_Date'];
			header('Location:'.SITEURL.'/dashboard.php');
			exit;
		}
		else
			$Responce	= 'Inactive Account';
	}
	else
		$Responce	= 'Invalid login Details';
}
$smarty->assign('Responce',$Responce);
$smarty->assign('Page',$Page);
$smarty->display('login.tpl');
?>