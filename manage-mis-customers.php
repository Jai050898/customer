<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
$smarty->assign("Page","customers");
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('MIS_customers',$upar,"MIS_cust_ID IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND MIS_lastname like '%".$_REQUEST['keyword']."%' OR MIS_firstname like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['zip']) && $_REQUEST['zip'] != '')
{
	$Where .= " AND MIS_Zip = '".$_REQUEST['zip']."'";
}
if(isset($_REQUEST['city']) && $_REQUEST['city'] != '')
{
	$Where .= " AND MIS_city = '".$_REQUEST['city']."'";
}
$Table		= "MIS_customers ";
$Fields		= "MIS_cust_ID,MIS_firstname,MIS_lastname,MIS_city,MIS_state,MIS_LifetimeVisits";

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
$SortBy		= " MIS_cust_ID ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Users);$i++)
{
	$totalVehicles = $usr->TotalRows("MIS_vehicle","MIS_Cust_ID = '".$Users[$i]['MIS_cust_ID']."'");
	$Users[$i]['Vcount'] = $totalVehicles;
	$totalROs = $usr->TotalRows("MIS_history","MIS_Cust_ID = '".$Users[$i]['MIS_cust_ID']."'");
	$Users[$i]['Rcount'] = $totalROs;
}
//echo "<pre>";print_r($Users);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//echo "<pre>";print_r($Users);exit;
$smarty->display('manage-mis-customers.tpl');
?>