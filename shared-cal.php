<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','Shared Calendar Item');
$Page = 'marketing';
$usr 		= new General;

if(isset($_REQUEST['act']) && $_REQUEST['act'] =='del')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_shared_calendars",$PrFields,"id = ".$_REQUEST['id']);
	$UpOverview 				= $Gen->UpdateQry("tbl_shared_calendars_items",$PrFields,"shared_id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/shared-cal.php');
	exit;
}
$Where		= "1=1 AND A.status = 'A' ";

$Table		= "tbl_shared_calendars A LEFT JOIN tbl_calendars B ON A.cal_id = B.id";
$Fields		= "A.*,B.name";
$total		= $usr->TotalRows("tbl_shared_calendars A",$Where);
$Where .= " AND A.customer_id = '".$_SESSION['User']['UID']	."'";
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
$SortBy		= " B.name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Tasks 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Tasks);$i++)
{
	$calitems = array();
	$calitems 	= $usr->GetSelWhere("tbl_shared_calendars_items","email","shared_id = '".$Tasks[$i]['id']."' AND status = 'A'");
	$itemsarr = array();
	for($j=0;$j<count($calitems);$j++)
	{
		$itemsarr[] = $calitems[$j]['email'];
	}
	$Tasks[$i]['emails'] =  implode(",",$itemsarr);
}
//echo "<pre>";print_r($Tasks);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->assign('Page',$Page);
//echo "<pre>";print_r($Tasks);exit;
$smarty->display('shared_calendars.tpl');
?>