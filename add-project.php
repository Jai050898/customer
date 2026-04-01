<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","projects");
$smarty->assign('breadcrumb','Add/Edit Project');
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['project_id']) && $_REQUEST['project_id'] != "")
{
	$Fields 	= "project_id,name,description,project_status,status,client_id,priority";
	$Where 		= "project_id = ".$_REQUEST['project_id'];
	$Projects	= $usr->GetSelWhere("tbl_projects",$Fields,$Where);
	$smarty->assign('Projects',$Projects[0]);
}
if(isset($_REQUEST['project_id']) && $_REQUEST['project_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_projects",$PrFields,"project_id = ".$_REQUEST['project_id']);
	if($UpOverview)
	{
		$insarray = array();
		$insarray['project_id'] = $_REQUEST['project_id'];
		$insarray['project_status'] = $_REQUEST['Log']['project_status'];
		$chk = $Gen->GetSelWhere("tbl_project_status","project_status","project_id = '".$_REQUEST['project_id']."' ORDER BY status_id DESC");
		//echo "<pre>";print_r($chk);exit;
		if($chk[0]['project_status'] != $_REQUEST['Log']['project_status'])
			$ins1 						= $Gen->InsertQry('tbl_project_status',$insarray);	
	}
	header("Location:".SITEURL.'/manage-projects.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['client_id'] = $_SESSION['User']['UID'];
	
	$ins 						= $Gen->InsertQry('tbl_projects',$PrFields);
	if($ins)
	{
		$insarray = array();
		$insarray['project_id'] = $ins;
		$insarray['project_status'] = $_REQUEST['Log']['project_status'];
		$ins1 						= $Gen->InsertQry('tbl_project_status',$insarray);	
	}
	header("Location:".SITEURL.'/manage-projects.php');
}
//Code to get Clients
$Clients = $usr->GetSelWhere("tbl_clients","client_id,first_name","1=1");
$smarty->assign('Clients',$Clients);
$smarty->display('add-project.tpl');
?>