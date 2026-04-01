<?php
require_once("includes/application_start.php");
if(!isset($_REQUEST['input_1']) || $_REQUEST['input_1'] == "")
{
	header("Location: http://www.autorepairmarketing.com/forgot-password.php");
	exit(0);
}
//echo "<pre>";print_r($_REQUEST);exit;
	/**************** TO Get Login Credentials Of User *********/
	$Details	= $Gen->GetSelWhere('tbl_users','first_name,email,password'," email = '".$_REQUEST['input_1']."'");
	//echo "<prE>";print_r($Details);
	$c			= count($Details);//exit;
	$status = "F";
	if($c == 0)
	{
		$Details	= $Gen->GetSelWhere('tbl_users','first_name,email,password'," user_name = '".$_REQUEST['input_1']."'");
		$c			= count($Details);//exit;
		//echo "<prE>";print_r($Details);exit;
		if($c == 0)
		{
			$response	= 'Email does not exist in our Database';
			$status = "F";
		}	
	}
	
	if($c > 0)
	{
		//echo "hai";
		$subject	= "Password Remainder";
		$result		= '<br>&nbsp;&nbsp;We are sending the Complete Login details as you have requested to send the forgotten password.<br>&nbsp;&nbsp;&nbsp;&nbsp;User Email = "'.$Details[0]['email'].'"<br>&nbsp;&nbsp;&nbsp;&nbsp;Password = "'.base64_decode($Details[0]['password'])."'";
		$getdet 	= $Gen->mymail($Details[0]['email'],FROM,$subject,$Details[0]['first_name'],$result);
		//$getdet 	= $Gen->mymail("srinivas.rize@gmail.com",FROM,$subject,$Details[0]['first_name'],$result);
		//header("Location:".SITEURL."/index.php");
		$response	= 'Password send to Your mail';
		$status = "S";
	}
header("Location: http://www.autorepairmarketing.com/forgot-password.php?status=".$status);
exit();
?>