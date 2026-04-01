<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','Marketing Calendars');
function dateDiff($start, $end) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = $end_ts - $start_ts;
	return round(($diff+86400) / 86400);
}
$Page = 'marketing';
$usr 		= new General;

if(isset($_REQUEST['act']) && $_REQUEST['act'] =='del')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_calendars",$PrFields,"id = ".$_REQUEST['id']);
	$UpOverview 				= $Gen->UpdateQry("tbl_calendars_items",$PrFields,"cal_id = ".$_REQUEST['id']);
	$UpOverview 				= $Gen->UpdateQry("tbl_shared_calendars",$PrFields,"cal_id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/calendars.php');
	exit;
}
$Where		= "1=1 AND status = 'A' ";

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND name like '%".$_REQUEST['keyword']."%'";	
}
$Table		= "tbl_calendars";
$Fields		= "*";
$total		= $usr->TotalRows("tbl_calendars",$Where);
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
$SortBy		= " name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Tasks 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Tasks);$i++)
{
	$sdate 	= $usr->GetSelWhere("tbl_calendars_items","MIN(sdate) as sdate","cal_id = '".$Tasks[$i]['id']."' AND status = 'A'");
	$edate 	= $usr->GetSelWhere("tbl_calendars_items","MAX(edate) as edate","cal_id = '".$Tasks[$i]['id']."'  AND status = 'A'");
	$Tasks[$i]['sdate'] = $sdate[0]['sdate'];
	$Tasks[$i]['edate'] = $edate[0]['edate'];
	$Tasks[$i]['duration'] =  dateDiff($sdate[0]['sdate'], $edate[0]['edate']);
}
//echo "<pre>";print_r($Tasks);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->assign('Page',$Page);
//echo "<pre>";print_r($Tasks);exit;
$smarty->display('calendars.tpl');
?>