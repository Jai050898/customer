<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','What If Scenarios');
$Page = 'marketing';
$usr 		= new General;

if(isset($_REQUEST['act']) && $_REQUEST['act'] =='del')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("what_if_scenarios",$PrFields,"id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/wis.php');
	exit;
}
$Where		= "1=1 AND status = 'A' ";

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND year = '".$_REQUEST['keyword']."'";	
}
$Table		= "what_if_scenarios";
$Fields		= "*";
$total		= $usr->TotalRows("what_if_scenarios",$Where);
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
	$Tasks[$i]['GLS'] = $Tasks[$i]['technicians']*$Tasks[$i]['effeciency']*$Tasks[$i]['productivity']*$Tasks[$i]['labor_percentage']*$Tasks[$i]['hours_per_tech'];
	$Tasks[$i]['GPS'] = $Tasks[$i]['GLS']*$Tasks[$i]['parts_to_labor_ratio'];
	$Tasks[$i]['GS'] = $Tasks[$i]['GPS']+$Tasks[$i]['GLS'];
	$Tasks[$i]['TLC'] = $Tasks[$i]['GLS']*$Tasks[$i]['labor_percentage'];
	$Tasks[$i]['TPC'] = $Tasks[$i]['GPS']*$Tasks[$i]['parts_percentage'];
	$Tasks[$i]['MB'] = $Tasks[$i]['GS']*$Tasks[$i]['advertising_percentage'];
	$Tasks[$i]['RB'] = $Tasks[$i]['GS']*$Tasks[$i]['rent_percentage'];
	$Tasks[$i]['NOC'] = $Tasks[$i]['GS']/$Tasks[$i]['average_RO'];
}
//echo "<pre>";print_r($Tasks);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->assign('Page',$Page);
//echo "<pre>";print_r($Tasks);exit;
$smarty->display('wis.tpl');
?>