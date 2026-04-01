<?php

require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['brand_id']) && $_REQUEST['brand_id'] != "")
{
	$Fields 	= "brand_id,brand_name,cid,status,export";
	$Where 		= "brand_id = ".$_REQUEST['brand_id'];
	$Cat	= $usr->GetSelWhere("tbl_brands",$Fields,$Where);
	//echo '<pre>';print_r($Cat);exit;
	$smarty->assign('Cat',$Cat[0]);
}
if(isset($_REQUEST['brand_id']) && $_REQUEST['brand_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_brands",$PrFields,"brand_id = ".$_REQUEST['brand_id']);
	header("Location:".SITEURL.'/admin/manage-brands.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->InsertQry('tbl_brands',$PrFields);
	header("Location:".SITEURL.'/admin/manage-brands.php');
}
//Code to get brans cat
$BCats = $usr->GetSelWhere("tbl_brand_categories","id,name","1=1");
$smarty->assign('BCats',$BCats);

$smarty->display('add-brand.tpl');
?>