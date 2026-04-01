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
$smarty->assign('breadcrumb','Project Tasks');
$Page = 'projects';
$usr 		= new General;

$Where		= "1=1 ";

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND title like '%".$_REQUEST['keyword']."%' OR description like '%".$_REQUEST['keyword']."%'";	
}
$Table		= "tbl_tasks A LEFT JOIN tbl_projects B ON A.project_id = B.project_id LEFT JOIN tbl_task_comments D ON A.task_id = D.task_id ";
$Fields		= "A.task_id,A.priority,A.context,A.project_id,A.user_id,A.dead_line,A.task_status,A.title,B.name,B.client_id,COUNT(D.comment_id) as commentcount";
$total		= $usr->TotalRows("tbl_tasks A",$Where);
$Where .= " AND B.client_id = '".$_SESSION['User']['UID']	."'";
$Where .= " GROUP BY A.task_id";
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Cat in the Site ********/


if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc')
{
	$sortioption='asc';
	$getSort='desc';	
	$sortimoption='up';
	$smarty->assign("sortoption",$_POST['sortoption']);
}
else
{
	$sortioption='desc';
	$getSort='asc';	
	$sortimoption='down';
}
$SortBy		= " A.task_id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Tasks 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Tasks);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->assign('Page',$Page);
//echo "<pre>";print_r($Cat);exit;
$smarty->display('project-tracker.tpl');
?>