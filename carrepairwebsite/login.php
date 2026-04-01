<?php
require_once("includes/application_start.php");
$Page = 'Login';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Reg')
{
	$UsrDet				= $Gen->GetSelWhere('shops','shop_id,shop_email ,shop_password,Last_Login_Date,status'," shop_email = '".$_REQUEST['Log']['email']."' AND shop_password = '".base64_encode($_REQUEST['Log']['password'])."'");
	$cnt			= count($UsrDet);
	//echo "<pre>";print_r($UsrDet);exit;
	if($cnt != 0)
	{
		if($UsrDet[0]['status'] == 'A')
		{
			$_SESSION['User']['UID']				= $UsrDet[0]['shop_id'];
			$_SESSION['User']['Email']				= $UsrDet[0]['shop_email'];
			$_SESSION['User']['Last_Login_Date']	= $UsrDet[0]['Last_Login_Date'];
			header('Location:'.SITEURL.'/myaccount.php');
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