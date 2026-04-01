<?php
require_once("includes/application_start.php");
$Page = 'Login';
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['UID']) && $_REQUEST['UID'] != '')
{
	$UpdArr['status']	= 'A';
	$UpdStatus			= $Gen->UpdateQry('tbl_users',$UpdArr," user_id = ".base64_decode($_REQUEST['UID'])); 
	$UsrDet				= $Gen->GetSelWhere('tbl_users','first_name,user_id,email,password,Last_Login_Date'," user_id = ".base64_decode($_REQUEST['UID']));
	//echo "<pre>";print_r($UsrDet);//exit;
	/*$subject	= "Member Registration Info";
	$result		= '     Thank you for registering with us. Below is your account information.<br /><br />	<strong>	Email:</strong>		<strong>'.$UsrDet[0]['email'].'</strong><br /><strong> Password:</strong>	<strong>'.base64_decode($UsrDet[0]['password']).'</strong><br /><br />
You can Log On to our site by clicking on the below link<br> <a href="'.SITEURL.'/login.php">Log ON</a>' ;
	 $getdet 	= $Gen->mymail($UsrDet[0]['email'],FROM,$subject,$UsrDet[0]['first_name'],$result); */
}
$smarty->assign('UsrDet',$UsrDet[0]);
$smarty->assign('Page',$Page);
$smarty->display('activate.tpl');
?>