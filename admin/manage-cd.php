<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//echo "<pre>";print_r($_SESSION);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_confirmed_directories',$upar,"id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND name like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND status = '".$_REQUEST['status']."'";	
}
if(isset($_REQUEST['cid']) && $_REQUEST['cid']!='')
{
	$Where .= " AND cid = '".$_REQUEST['cid']."'";	
}
$Table		= "tbl_confirmed_directories";
$Fields		= "*";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Cat in the Site ********/


if($_POST['sortoption']=='desc')
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
$SortBy		= " name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Cat 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Cat);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&cid=".$_REQUEST['cid']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Cat);exit;
$BCats = $usr->GetSelWhere("tbl_cd_categories","id,name","1=1");
$smarty->assign('BCats',$BCats);
$smarty->display('manage-cd.tpl');
?>