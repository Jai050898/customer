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

//echo "<pre>";print_r($_SESSION);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_projects',$upar,"project_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND client_id = '".$_SESSION['Client']['CID']."'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND name like '%".$_REQUEST['keyword']."%' OR description like '%".$_REQUEST['keyword']."%'";	
}
$Table		= "tbl_projects A LEFT JOIN tbl_member_projects B ON A.project_id = B.project_id LEFT JOIN tbl_tasks C ON A.project_id = C.project_id";
$Fields		= "A.project_id,A.name,A.description,A.project_status,A.status,A.created_date,COUNT(B.id) as totmembers,COUNT(C.task_id) as totaltasks";

$total		= $usr->TotalRows("tbl_projects",$Where);
$Where .= " GROUP BY A.project_id";
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
$SortBy		= " A.project_id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Projects 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Projects);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Projects',$Projects);
//echo "<pre>";print_r($Cat);exit;
$smarty->display('manage-projects.tpl');
?>