<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Add Calendar Category');
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != "")
{
	$Fields 	= "*";
	$Where 		= "cat_id = ".$_REQUEST['cat_id'];
	$Tasks	= $usr->GetSelWhere("tbl_calendars_cat",$Fields,$Where);
	$smarty->assign('Tasks',$Tasks[0]);
}
if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['customer_id'] = $_SESSION['User']['UID'];
	$UpOverview 				= $Gen->UpdateQry("tbl_calendars_cat",$PrFields,"cat_id = ".$_REQUEST['cat_id']);
	header("Location:".SITEURL.'/calendars-cat.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['customer_id'] = $_SESSION['User']['UID'];
	$ins 						= $Gen->InsertQry('tbl_calendars_cat',$PrFields);
	header("Location:".SITEURL.'/calendars-cat.php');
}
$smarty->display('add-cat.tpl');
?>