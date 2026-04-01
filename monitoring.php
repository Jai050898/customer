<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','Monitoring Marketing Goals');
$Page = 'marketing';
$usr 		= new General;

if(isset($_REQUEST['act']) && $_REQUEST['act'] =='del')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_monitoring",$PrFields,"id = ".$_REQUEST['id']);
	$UpOverview 				= $Gen->UpdateQry("tbl_monitoring_items",$PrFields,"mid = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/monitoring.php');
	exit;
}
$Where		= "1=1 AND status = 'A' ";

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND year = '".$_REQUEST['keyword']."'";	
}
$Table		= "tbl_monitoring";
$Fields		= "*";
$total		= $usr->TotalRows("tbl_monitoring",$Where);
$Where .= " AND customer_id = '".$_SESSION['User']['UID']	."'";
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

$Tasks 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Tasks);$i++)
{
	$amountarr	= $usr->GetSelWhere("tbl_monitoring_items","SUM(grosssales) as amount","mid = '".$Tasks[$i]['id']."' AND status = 'A'");
	$Tasks[$i]['amount'] = $amountarr[0]['amount'];
	$max_amount	= $usr->GetSelWhere("tbl_monitoring_items","MAX(grosssales) as max_amount","mid = '".$Tasks[$i]['id']."' AND status = 'A'");
	$Tasks[$i]['maxamt'] = $max_amount[0]['max_amount'];
	$min_amount	= $usr->GetSelWhere("tbl_monitoring_items","MIN(grosssales) as min_amount","mid = '".$Tasks[$i]['id']."' AND status = 'A'");
	$Tasks[$i]['minamt'] = $min_amount[0]['min_amount'];
}
//echo "<pre>";print_r($Tasks);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->assign('Page',$Page);
//echo "<pre>";print_r($Tasks);exit;
$smarty->display('monitoring.tpl');
?>