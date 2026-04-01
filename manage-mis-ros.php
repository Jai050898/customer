<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
$smarty->assign("Page","customers");
$Where		= "1=1 ";

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND MIS_license like '%".$_REQUEST['keyword']."%' OR MIS_recno like '%".$_REQUEST['keyword']."%' OR MIS_odom_in like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='')
{
	$Where .= " AND MIS_cust_ID = '".$_REQUEST['user_id']."'";	
}
$Table		= "MIS_history";
$Fields		= "MIS_id,MIS_type,MIS_license,MIS_sched,MIS_promised,MIS_balancedue";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 25;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Users in the Site ********/


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
$SortBy		= " MIS_id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
$srcpath 	= " keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//echo "<pre>";print_r($Users);exit;
$smarty->display('manage-mis-ros.tpl');
?>