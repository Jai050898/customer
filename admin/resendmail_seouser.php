<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "user_id,first_name,last_name,email,user_name,password";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$user	= $usr->GetSelWhere("tbl_seo_users",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$subject	= "Member Registration Info";
	$result		= ' You account is Created by Admin.<br />You can Login to your account using following Details' ;
		$result		.='<br> User Name : '.$user[0]['user_name'];
		$result		.='<br> Password : '.base64_decode($user[0]['password']);
		$result		.='<br> Link : http://mm.autorepairmarketing.com/customer/seo';
	 $getdet 	= $Gen->mymail($user[0]['email'],FROM,$subject,$user[0]['first_name'],$result);
	 header('Location:'.SITEURL.'/admin/manage-seousers.php?task=s');
}
else
	header('Location:'.SITEURL.'/admin/manage-seousers.php?task=f');
?>