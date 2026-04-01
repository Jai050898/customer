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
$smarty->assign('Page',"MyAccount");
$usr 		= new General;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_tasks',$upar,"task_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 ";
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND title like '%".$_REQUEST['keyword']."%' OR description like '%".$_REQUEST['keyword']."%'";	
}
$Table		= "tbl_tasks A LEFT JOIN tbl_projects B ON A.project_id = B.project_id  AND B.client_id = '".$_SESSION['Client']['CID']."'
						   LEFT JOIN tbl_users C ON A.user_id = C.user_id
						   LEFT JOIN tbl_task_comments D ON A.task_id = D.task_id ";
$Fields		= "A.task_id,A.project_id,A.user_id,A.dead_line,A.task_status,A.title,A.priority,B.name,C.first_name,COUNT(D.comment_id) as commentcount";

$total		= $usr->TotalRows("tbl_tasks",$Where);
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
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->display('manage-tasks.tpl');
?>