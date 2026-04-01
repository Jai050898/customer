<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//echo "<pre>";print_r($_SESSION);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	if($_REQUEST['hid_type'] == "E")
	{
		$upar['export']	= "Y";
		$upid	= $usr->UpdateQry('tbl_brands',$upar,"brand_id IN(".$_REQUEST['hid_id'].")");
		$upar1['export']	= "N";
		$upid1	= $usr->UpdateQry('tbl_brands',$upar1,"brand_id NOT IN(".$_REQUEST['hid_id'].")");
	}
	else
	{
		$upar['status']	= $_REQUEST['hid_type'];
		$upid	= $usr->UpdateQry('tbl_brands',$upar,"brand_id IN(".$_REQUEST['hid_id'].")");
	}
}
$Where		= "1=1 AND status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND brand_name like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND status = '".$_REQUEST['status']."'";	
}
if(isset($_REQUEST['cid']) && $_REQUEST['cid']!='')
{
	$Where .= " AND cid = '".$_REQUEST['cid']."'";	
}
$Table		= "tbl_brands";
$Fields		= "brand_id,brand_name,status,created_date,cid,export";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 25;
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
$SortBy		= " brand_name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Cat 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Cat);$i++)
{
	$Catcat = $usr->GetSelWhere("tbl_brand_categories","name"," status = 'A' AND id = '".$Cat[$i]['cid']."'");
	$Cat[$i]['catname'] = $Catcat[0]['name'];
}
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&cid=".$_REQUEST['cid']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Cat);exit;
//Code to get brans cat
$BCats = $usr->GetSelWhere("tbl_brand_categories","id,name","1=1");
$smarty->assign('BCats',$BCats);
$smarty->display('manage-brands.tpl');
?>