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
$Page = 'projects';
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['task_id']) && $_REQUEST['task_id'] != "")
{
	$Table		= "tbl_tasks A LEFT JOIN tbl_projects B ON A.project_id = B.project_id LEFT JOIN tbl_users C ON A.user_id = C.user_id LEFT JOIN tbl_task_comments D ON A.task_id = D.task_id ";
	$Fields		= "A.task_id,A.project_id,A.user_id,A.priority,A.context,A.dead_line,A.title,A.description,A.task_status,A.status,A.created_Date,B.name,C.first_name,COUNT(D.comment_id) as commentcount";
	$Where 		= "A.task_id = ".$_REQUEST['task_id'];
	$Where		.= " GROUP BY A.task_id";
	$Tasks	= $usr->GetSelWhere($Table,$Fields,$Where);
	//Code to get status
	$Status = $usr->GetSelWhere("tbl_task_status","*","task_id = '".$_REQUEST['task_id']."'");
	$smarty->assign('Status',$Status);
	$smarty->assign('Tasks',$Tasks[0]);
}
$smarty->assign('Page',$Page);
$smarty->display('view-task.tpl');
?>