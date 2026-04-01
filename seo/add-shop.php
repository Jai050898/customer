<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "shop_name,shop_email,shop_phone,shop_state,shop_city,shop_zip,shop_address,shop_website";
	$Where 		= "shop_id = ".$_REQUEST['user_id'];
	$user	= $usr->GetSelWhere("shops",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('User',$user[0]);
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	
	$UpOverview 				= $Gen->UpdateQry("shops",$PrFields,"shop_id = ".$_REQUEST['user_id']);
	header("Location:".SITEURL.'/seo/manage-shops.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->InsertQry('shops',$PrFields);
	header("Location:".SITEURL.'/seo/manage-shops.php');
}
$smarty->display('add-shop.tpl');
?>