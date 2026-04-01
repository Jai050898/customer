<?php

require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
{
	$Fields 	= "id,annual_revenue,status";
	$Where 		= "id = ".$_REQUEST['id'];
	$Cat	= $usr->GetSelWhere("tbl_annual_revenue",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('Cat',$Cat[0]);
}
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_annual_revenue",$PrFields,"id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/admin/manage-revenue.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->InsertQry('tbl_annual_revenue',$PrFields);
	header("Location:".SITEURL.'/admin/manage-revenue.php');
}

$smarty->display('add-revenue.tpl');
?>