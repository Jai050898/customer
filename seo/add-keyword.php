<?php

require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['key_id']) && $_REQUEST['key_id'] != "")
{
	$Fields 	= "key_id,key_name,status";
	$Where 		= "key_id = ".$_REQUEST['key_id'];
	$Cat	= $usr->GetSelWhere("tbl_keywords",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('Cat',$Cat[0]);
}
if(isset($_REQUEST['key_id']) && $_REQUEST['key_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_keywords",$PrFields,"key_id = ".$_REQUEST['key_id']);
	header("Location:".SITEURL.'/seo/manage-keywords.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->InsertQry('tbl_keywords',$PrFields);
	header("Location:".SITEURL.'/seo/manage-keywords.php');
}

$smarty->display('add-keyword.tpl');
?>