<?php

require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('tbl_links',$upar,"link_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= " 1=1 AND status != 'D'";
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND link_url like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND status = '".$_REQUEST['status']."'";	
}
$Table		= "tbl_links";
$Fields		= "link_id,link_url,no_of_clicks,code,created_date,status";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
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
$SortBy		= " link_id ".$getSort;
if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
//echo $SortBy;exit;	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
$Links	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Uploads);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&status=".$_REQUEST['status']."&page=";
include('../includes/generate_pages.php');
$smarty->assign('Links',$Links);
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->display('manage-links.tpl');
?>