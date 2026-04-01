<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != "")
{
	$Fields 	= "cat_id,cat_name,cat_description,status";
	$Where 		= "cat_id = ".$_REQUEST['cat_id'];
	$Cat	= $usr->GetSelWhere("tbl_portfolio_categories",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('Cat',$Cat[0]);
}
if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_portfolio_categories",$PrFields,"cat_id = ".$_REQUEST['cat_id']);
	header("Location:".SITEURL.'/admin/manage-portfolio-categories.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$res = $usr->SelectQuery("SELECT max(showorder) as maxid FROM tbl_portfolio_categories");
	$PrFields['showorder'] = $res[0]['maxid']+1;
	//echo "<pre>";print_r($PrFields);exit;
	$ins 						= $Gen->InsertQry('tbl_portfolio_categories',$PrFields);
	header("Location:".SITEURL.'/admin/manage-portfolio-categories.php');
}

$smarty->display('add-portfolio-category.tpl');
?>