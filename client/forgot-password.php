<?php
require_once("../includes/application_start.php");
$Page = 'Login';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Post')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	/**************** TO Get Login Credentials Of User *********/
	$Details	= $Gen->GetSelWhere('tbl_clients','first_name,last_name,email,password'," email = '".$_REQUEST['Log']['Email']."'");
	$c			= count($Details);
	if($c == 0)
		$response	= 'Email does not exist in our Database';
	elseif($c > 0)
	{
		$subject	= "Password Remainder";
		$result		= '<br>&nbsp;&nbsp;We are sending the Complete Login details as you have requested to send the forgotten password.<br>&nbsp;&nbsp;&nbsp;&nbsp;User Email = "'.$Details[0]['email'].'"<br>&nbsp;&nbsp;&nbsp;&nbsp;Password = "'.base64_decode($Details[0]['password'])."'";
		$getdet 	= $Gen->mymail($Details[0]['email'],FROM,$subject,$Details[0]['first_name'],$result);
		header("Location:".SITEURL."/client/index.php");
	}
}
$smarty->assign('response',$response);
$smarty->assign('Page',$Page);
$smarty->display('forgot-password.tpl');
?>