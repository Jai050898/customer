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
$smarty->assign("Page","MyAccount");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['act']) && $_REQUEST['act'] == "del")
{
	$del	= $Gen->DeleteQry('tbl_member_projects'," id = '".$_REQUEST['id']."'");	
	header("Location : ".SITEURL,"/client/view-project.php?project_id=".$_REQUEST['project_id']);
}
if(isset($_REQUEST['project_id']) && $_REQUEST['project_id'] != "")
{
	if(isset($_REQUEST['adduser']) && $_REQUEST['adduser'] == "Save")
	{
		$Pins = array();
		$Pins['user_id']= $_REQUEST['Log']['user_id'];
		$Pins['project_id']=$_REQUEST['project_id'];
		$Pins	= $Gen->InsertQry('tbl_member_projects',$Pins);	
	}
	$Fields 	= "project_id,name,description,project_status,status";
	$Where 		= "project_id = ".$_REQUEST['project_id'];
	$Project	= $usr->GetSelWhere("tbl_projects",$Fields,$Where);
	//Code to get status
	$Status = $usr->GetSelWhere("tbl_project_status","*","project_id = '".$_REQUEST['project_id']."'");
	$smarty->assign('Status',$Status);
	//Code to get Users
	$Users = $usr->GetSelWhere("tbl_member_projects A LEFT JOIN tbl_users B ON A.user_id = B.user_id","A.*,B.first_name,B.country,B.state,B.city","project_id = '".$_REQUEST['project_id']."'");
	$smarty->assign('Users',$Users);
	//code to get already existed users
	$AlreadyUsers = $usr->GetSelWhere("tbl_member_projects","user_id","project_id = '".$_REQUEST['project_id']."'");
	$alreadyarr = array();
	for($i=0;$i<count($AlreadyUsers);$i++)
	{
		$alreadyarr[] = $AlreadyUsers[$i]['user_id'];
	}
	//echo "<pre>";print_r($alreadyarr);exit;
	$ids = implode(",",$alreadyarr);
	//Code to get All Users
	if($ids)
		$AllUsers = $usr->GetSelWhere("tbl_users","user_id,first_name","user_id NOT IN (".$ids.")");
	else
		$AllUsers = $usr->GetSelWhere("tbl_users","user_id,first_name","1=1");
	if($AllUsers)
		$smarty->assign('AllUsers',$AllUsers);
	//echo "<pre>";print_r($AllUsers);exit;
	$smarty->assign('Project',$Project[0]);
}
$smarty->display('view-project.tpl');
?>