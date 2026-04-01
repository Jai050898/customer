<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page',"customers");
$smarty->assign('breadcrumb','Manage Competitors');
$usr 		= new General;

if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_competitors',$upar,"id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND user_id = '".$_SESSION['User']['UID']."'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND name like '%".$_REQUEST['keyword']."%'";	
}
$Table		= "tbl_competitors";
$Fields		= "*";

$total		= $usr->TotalRows("tbl_competitors",$Where);
$Where .= " GROUP BY id";
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
$SortBy		= " id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Projects 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Projects);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Projects',$Projects);
//echo "<pre>";print_r($Cat);exit;
$smarty->display('manage-competitors.tpl');
?>