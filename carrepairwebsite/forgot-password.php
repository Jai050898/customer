<?php
require_once("includes/application_start.php");
$Page = 'Login';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Post')
{
	/**************** TO Get Login Credentials Of User *********/
	$Details	= $Gen->GetSelWhere('shops','shop_name,shop_email,shop_password'," shop_email = '".$_REQUEST['Log']['Email']."'");
	$c			= count($Details);//exit;
	if($c == 0)
		$response	= 'Email does not exist in our Database';
	elseif($c > 0)
	{
		$subject	= "Password Remainder";
		$result		= '<br>&nbsp;&nbsp;We are sending the Complete Login details as you have requested to send the forgotten password.<br>&nbsp;&nbsp;&nbsp;&nbsp;User Email = "'.$Details[0]['shop_email'].'"<br>&nbsp;&nbsp;&nbsp;&nbsp;Password = "'.base64_decode($Details[0]['shop_password'])."'";
		$getdet 	= $Gen->mymail($Details[0]['shop_email'],FROM,$subject,$Details[0]['shop_name'],$result);
		header("Location:".SITEURL."/index.php");
	}
}
$smarty->assign('response',$response);
$smarty->assign('Page',$Page);
$smarty->display('forgot-password.tpl');
?>