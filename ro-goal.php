<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$page = 'marketing';
$smarty->assign('Page',$page);
$usr 		= new General;

$Where		= "1=1 AND status = 'A' ";
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND year = '".$_REQUEST['keyword']."'";	
}
$Where .= " AND customer_id = '".$_SESSION['User']['UID']."'";
$Table		= "tbl_ro_goal";
$Fields		= "*";
$total		= $usr->TotalRows("tbl_ro_goal",$Where);

$limit		= 25;
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
//echo "<pre>";print_r($Tasks);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);


//echo "<pre>";print_r($Tasks);exit;
$smarty->display('ro-goal.tpl');
?>
