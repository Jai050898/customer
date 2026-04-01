<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$Page = 'MyAccount';
$usr 		= new General;

if(isset($_REQUEST['act']) && $_REQUEST['act'] =='del')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = array();
	$PrFields['status'] = "D";
	$UpOverview 				= $Gen->UpdateQry("tbl_daily_hours",$PrFields,"id = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/admin/users-daily-data.php?user_id='.$_REQUEST['user_id']);
	exit;
}
$Where		= "1=1 AND status = 'A' ";

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND actual_hours = '".$_REQUEST['keyword']."'";	
}
$Table		= "tbl_daily_hours";
$Fields		= "*";
$total		= $usr->TotalRows("tbl_daily_hours",$Where);
$Where .= " AND customer_id = '".$_REQUEST['user_id']	."'";
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
$SortBy		= " ddate ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Tasks 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Tasks);$i++)
{
	$Tasks[$i]['productivity'] = number_format($Tasks[$i]['actual_hours']/$Tasks[$i]['available_hours'],2,"."," ");
	$Tasks[$i]['efficiency'] = number_format($Tasks[$i]['actual_hours']/$Tasks[$i]['sold_hours'],2,"."," ");
}
$srcpath 	= " keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Tasks',$Tasks);
$smarty->assign('Page',$Page);
//echo "<pre>";print_r($Tasks);exit;
$smarty->display('users-daily-data.tpl');
?>