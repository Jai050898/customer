<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "Company_ID,name,email,username,password";
	$Where 		= "Company_ID = ".$_REQUEST['user_id'];
	$user	= $usr->GetSelWhere("tbl_company",$Fields,$Where);
	$subject	= "Member Registration Info";
	$result		= "<br>";
	$result		.= " Username : ".$user[0]['username'];
	$result		.= "<br>";
	$result		.= " Password : ".base64_decode($user[0]['password']);
	$result		.= "<br>";
	 $getdet 	= $Gen->mymail($user[0]['email'],FROM,$subject,$user[0]['name'],$result);
	 header('Location:'.SITEURL.'/admin/manage-company.php?task=s');
}
else
	header('Location:'.SITEURL.'/admin/manage-company.php?task=f');
?>