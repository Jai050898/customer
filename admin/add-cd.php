<?php

require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
{
	$Fields 	= "*";
	$Where 		= "id = ".$_REQUEST['id'];
	$Cat	= $usr->GetSelWhere("tbl_confirmed_directories",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('Cat',$Cat[0]);
}
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	if(!isset($PrFields['payment']))
	{
		$PrFields['payment'] = "N";
		$PrFields['amount'] = "";
		$PrFields['description'] = "";
	}
	if(!isset($PrFields['checkin']))
	{
		$PrFields['checkin'] = "N";
	}
	$UpOverview 				= $Gen->UpdateQry("tbl_confirmed_directories",$PrFields,"id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/admin/manage-cd.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->InsertQry('tbl_confirmed_directories',$PrFields);
	header("Location:".SITEURL.'/admin/manage-cd.php');
}
//Code to get brans cat
$BCats = $usr->GetSelWhere("tbl_cd_categories","id,name","1=1");
$smarty->assign('BCats',$BCats);


$smarty->display('add-cd.tpl');
?>