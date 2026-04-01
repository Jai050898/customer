<?php
//echo "hai";exit;
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','Manage Marketing Budget');
$Page = 'marketing';
$usr 		= new General;

if(isset($_REQUEST['act']) && $_REQUEST['act'] =='del')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_budget",$PrFields,"id = ".$_REQUEST['id']);
	$UpOverview 				= $Gen->UpdateQry("tbl_budget_items",$PrFields,"bid = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/marketing-budget.php');
	exit;
}
$Where		= "1=1 AND status = 'A' ";

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND year = '".$_REQUEST['keyword']."'";	
}
$Table		= "tbl_budget";
$Fields		= "*";
$total		= $usr->TotalRows("tbl_budget",$Where);
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
	$amountarr	= $usr->GetSelWhere("tbl_budget_items","SUM(amount) as amount","bid = '".$Tasks[$i]['id']."' AND status = 'A'");
	$Tasks[$i]['amount'] = $amountarr[0]['amount'];
	$actual_amount	= $usr->GetSelWhere("tbl_budget_items","SUM(actual_amount) as actual_amount","bid = '".$Tasks[$i]['id']."' AND status = 'A'");
	$Tasks[$i]['actualamount'] = $actual_amount[0]['actual_amount'];
}
//echo "<pre>";print_r($Tasks);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->assign('Page',$Page);
//echo "<pre>";print_r($Tasks);exit;
$smarty->display('marketing-budget.tpl');
?>