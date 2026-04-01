<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$usr 		= new General;

/*****section to get the details from data base*********************/
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
{
	$Fields 	= "*";
	$Where 		= "id = ".$_REQUEST['id'];
	$user	= $usr->GetSelWhere("tbl_competitors",$Fields,$Where);
	$smarty->assign('User',$user[0]);
}
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "" && $_REQUEST['hid_key']=='Post')
{
	$PrFields = $_REQUEST['Log'];
	
	$UpOverview 				= $Gen->UpdateQry("tbl_competitors",$PrFields,"id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/seo/manage-competitors.php?user_id='.$_REQUEST['user_id']);
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	$PrFields = $_REQUEST['Log'];
	$PrFields['user_id'] = $_REQUEST['user_id'];
	$ins 						= $Gen->InsertQry('tbl_competitors',$PrFields);
	if($ins)
	 header("Location:".SITEURL.'/seo/manage-competitors.php?user_id='.$_REQUEST['user_id']);
}

$smarty->display('add-competitor.tpl');
?>