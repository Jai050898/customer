<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$usr 		= new General;

//echo "<pre>";print_r($_SESSION);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_keywords',$upar,"key_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND key_name like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND status = '".$_REQUEST['status']."'";	
}

$Table		= "tbl_keywords";
$Fields		= "key_id,key_name,status,created_date";

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
$SortBy		= " key_name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Cat 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Cat);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Cat);exit;
$smarty->display('manage-keywords.tpl');
?>