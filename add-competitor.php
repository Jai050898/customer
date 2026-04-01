<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","resources");
$smarty->assign('breadcrumb','Add/Edit Competitors');
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
{
	$Fields 	= "*";
	$Where 		= "id = ".$_REQUEST['id'];
	$Projects	= $usr->GetSelWhere("tbl_competitors",$Fields,$Where);
	//echo "<prE>";print_r($Projects);exit;
	$smarty->assign('Projects',$Projects[0]);
}
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_competitors",$PrFields,"id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/manage-competitors.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	$PrFields = $_REQUEST['Log'];
	$PrFields['user_id'] = $_SESSION['User']['UID'];
	$ins 						= $Gen->InsertQry('tbl_competitors',$PrFields);
	header("Location:".SITEURL.'/manage-competitors.php');
}

$smarty->display('add-competitor.tpl');
?>