<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['Shop_ID']) && $_REQUEST['Shop_ID'] != "")
{
	$Fields 	= "Shop_ID,name,email,user_name,password";
	$Where 		= "Shop_ID = ".$_REQUEST['Shop_ID'];
	$user	= $usr->GetSelWhere("tbl_shop",$Fields,$Where);
	
	$subject	= "Member Registration Info";
	$result		= "<br>";
	$result		.= " Username : ".$user[0]['user_name'];
	$result		.= "<br>";
	$result		.= " Password : ".base64_decode($user[0]['password']);
	$result		.= "<br>";
	 $getdet 	= $Gen->mymail($user[0]['email'],FROM,$subject,$user[0]['name'],$result);
	 header('Location:'.SITEURL.'/manager/manage-shops.php?task=s');
}
else
	header('Location:'.SITEURL.'/manager/manage-shops.php?task=f');
?>