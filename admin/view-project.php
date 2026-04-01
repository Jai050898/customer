<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['act']) && $_REQUEST['act'] == "del")
{
	$del	= $Gen->DeleteQry('tbl_member_projects'," id = '".$_REQUEST['id']."'");	
	header("Location : ".SITEURL,"/admin/view-project.php?project_id=".$_REQUEST['project_id']);
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
	$Fields 	= "A.project_id,A.name,A.description,A.project_status,A.status,A.priority,B.first_name,B.last_name";
	$Where 		= "project_id = ".$_REQUEST['project_id'];
	$Project	= $usr->GetSelWhere("tbl_projects A LEFT JOIN tbl_users B ON A.client_id = B.user_id",$Fields,$Where);
	//Code to get status
	$Status = $usr->GetSelWhere("tbl_project_status","*","project_id = '".$_REQUEST['project_id']."'");
	$smarty->assign('Status',$Status);
	$smarty->assign('Project',$Project[0]);
}
$smarty->display('view-project.tpl');
?>