<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('XML_vehicle',$upar,"cust_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 ";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND make like '%".$_REQUEST['keyword']."%' OR model like '%".$_REQUEST['keyword']."%' OR year like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='')
{
	$Where .= " AND cust_id = '".$_REQUEST['user_id']."'";	
}
if(isset($_REQUEST['vid']) && $_REQUEST['vid']!='')
{
	$Where .= " AND vehicle_id = '".$_REQUEST['vid']."'";	
}
$Table		= "XML_vehicle";
$Fields		= "vehicle_id, year, make, model, vin, engine";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 25;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Users in the Site ********/


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
$SortBy		= " vehicle_id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//echo "<pre>";print_r($Users);exit;
$smarty->display('manage-xml-vehicles.tpl');
?>