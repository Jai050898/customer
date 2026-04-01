<?php
require_once("includes/application_start.php");
$Page = 'Login';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Post')
{
	/**************** TO Get Login Credentials Of User *********/
	$Details	= $Gen->GetSelWhere('tbl_shop','name,email,user_name,password'," email = '".$_REQUEST['Log']['Email']."'");
	$c			= count($Details);//exit;
	if($c == 0)
		$response	= 'Email does not exist in our Database';
	elseif($c > 0)
	{
		$subject	= "Password Remainder";
		$result		= '<br>&nbsp;&nbsp;We are sending the Complete Login details as you have requested to send the forgotten password.<br>&nbsp;&nbsp;&nbsp;&nbsp;User Name = "'.$Details[0]['user_name'].'"<br>&nbsp;&nbsp;&nbsp;&nbsp;Password = "'.base64_decode($Details[0]['password'])."'";
		$getdet 	= $Gen->mymail($Details[0]['email'],FROM,$subject,$Details[0]['first_name'],$result);
		header("Location:".SITEURL."/index.php");
	}
}
$smarty->assign('response',$response);
$smarty->assign('Page',$Page);
$smarty->display('forgot-password.tpl');
?>