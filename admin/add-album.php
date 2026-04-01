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
if(isset($_REQUEST['album_id']) && $_REQUEST['album_id'] != "")
{
	$Fields 	= "album_id,album_name,album_description,status";
	$Where 		= "album_id = ".$_REQUEST['album_id'];
	$Cat	= $usr->GetSelWhere("tbl_albums",$Fields,$Where);
	//echo '<pre>';print_r($Cat);exit;
	$smarty->assign('Cat',$Cat[0]);
}
if(isset($_REQUEST['album_id']) && $_REQUEST['album_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_albums",$PrFields,"album_id = ".$_REQUEST['album_id']);
	header("Location:".SITEURL.'/admin/manage-albums.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$ins 						= $Gen->InsertQry('tbl_albums',$PrFields);
	header("Location:".SITEURL.'/admin/manage-albums.php');
}

$smarty->display('add-album.tpl');
?>