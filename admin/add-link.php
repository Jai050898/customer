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
if(isset($_REQUEST['link_id']) && $_REQUEST['link_id'] != "")
{
	$Fields 	= "link_url,show_to_customers,code";
	$Where 		= "link_id = ".$_REQUEST['link_id'];
	$Link	= $usr->GetSelWhere("tbl_links",$Fields,$Where);
	//echo '<pre>';print_r($Cat);exit;
	$smarty->assign('Link',$Link[0]);
}
if(isset($_REQUEST['link_id']) && $_REQUEST['link_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	if(!isset($PrFields['show_to_customers']) )
		$PrFields['show_to_customers'] = "N";
	//echo "<pre>";print_r($PrFields);exit;
	$UpOverview 				= $Gen->UpdateQry("tbl_links",$PrFields,"link_id = ".$_REQUEST['link_id']);
	header("Location:".SITEURL.'/admin/manage-links.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->InsertQry('tbl_links',$PrFields);
	header("Location:".SITEURL.'/admin/manage-links.php');
}

$smarty->display('add-link.tpl');
?>