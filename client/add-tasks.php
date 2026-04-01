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
require_once("../includes/login_check_client.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['task_id']) && $_REQUEST['task_id'] != "")
{
	$Fields 	= "task_id,project_id,user_id,priority,context,dead_line,title,description,task_status";
	$Where 		= "task_id = ".$_REQUEST['task_id'];
	$Tasks	= $usr->GetSelWhere("tbl_tasks",$Fields,$Where);
	$smarty->assign('Tasks',$Tasks[0]);
}
if(isset($_REQUEST['task_id']) && $_REQUEST['task_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['dead_line']	= $Gen->Date_Format($_REQUEST['deadline']);
	$PrFields['task_status']	= $_REQUEST['task_status'];
	$UpOverview 				= $Gen->UpdateQry("tbl_tasks",$PrFields,"task_id = ".$_REQUEST['task_id']);
	if($UpOverview)
	{
		$insarray = array();
		$insarray['task_id'] = $_REQUEST['task_id'];
		$insarray['task_percentage'] = $_REQUEST['task_status'];
		$chk = $Gen->GetSelWhere("tbl_task_status","task_percentage","task_id = '".$_REQUEST['task_id']."'");
		//echo "<pre>";print_r($chk);exit;
		if($chk[0]['task_percentage'] != $_REQUEST['task_status'])
			$ins1 						= $Gen->InsertQry('tbl_task_status',$insarray);	
	}
	header("Location:".SITEURL.'/client/manage-tasks.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['dead_line']	= $Gen->Date_Format($_REQUEST['deadline']);
	$PrFields['task_status']	= $_REQUEST['task_status'];
	//echo "<pre>";print_r($PrFields);exit;
	$ins 						= $Gen->InsertQry('tbl_tasks',$PrFields);
	if($ins)
	{
		$insarray = array();
		$insarray['task_id'] = $ins;
		$insarray['task_percentage'] = $_REQUEST['task_status'];
		$ins1 						= $Gen->InsertQry('tbl_task_status',$insarray);	
	}
	header("Location:".SITEURL.'/client/manage-tasks.php');
}
//Code to get Users
$Users = $usr->GetSelWhere("tbl_users","user_id,first_name","1=1");
$smarty->assign('Users',$Users);
//echo "<pre>";print_r($Users);exit;
//Code to get Projects
$Projects = $usr->GetSelWhere("tbl_projects","project_id,name","1=1 AND client_id = '".$_SESSION['Client']['CID']."'");
$smarty->assign('Projects',$Projects);

$smarty->display('add-tasks.tpl');
?>