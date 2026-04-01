<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
function dateDiff($start, $end) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = $end_ts - $start_ts;
	return round(($diff+86400) / 86400);
}
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('MIS_customers',$upar,"MIS_cust_ID IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 ";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND MIS_lastname like '%".$_REQUEST['keyword']."%' OR MIS_EmailAddress like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['zip']) && $_REQUEST['zip'] != '')
{
	$Where .= " AND MIS_Zip = '".$_REQUEST['zip']."'";
}
if(isset($_REQUEST['city']) && $_REQUEST['city'] != '')
{
	$Where .= " AND MIS_city = '".$_REQUEST['city']."'";
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != '')
{
	$Where .= " AND market_cust_id = '".$_REQUEST['user_id']."'";
}
if(isset($_REQUEST['yearfrom']) && $_REQUEST['yearfrom']!='' && isset($_REQUEST['yearto']) && $_REQUEST['yearto']!='')
{
	if (is_numeric($_REQUEST['yearfrom']) && is_numeric($_REQUEST['yearto'])) {
		$fyear = $_REQUEST['yearfrom'];
		$fromyear = date("Y-m-d", mktime(0, 0, 0, 1, 1, $fyear));
		
		$tyear = $_REQUEST['yearto'];
		$toyear = date("Y-m-d", mktime(0, 0, 0, 1, 1, $tyear));
		
		$Where .= " AND MIS_FirstVisited >= '".$fromyear."' AND MIS_FirstVisited <= '".$toyear."'";	
	}
}
$Table		= "MIS_customers ";
$Fields		= "MIS_cust_ID,MIS_firstname,MIS_lastname,MIS_FirstVisited,MIS_LastVisited,MIS_LifetimeVisits";

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
$SortBy		= " MIS_firstname ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Users);$i++)
{
	$duration = dateDiff($Users[$i]['MIS_FirstVisited'],$Users[$i]['MIS_LastVisited']);
	$Users[$i]['duration'] = $duration;
}
//echo "<pre>";print_r($Users);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&zip=".$_REQUEST['zip']."&city=".$_REQUEST['city']."&yearfrom=".$_REQUEST['yearfrom']."&yearto=".$_REQUEST['yearto']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//Code to get Clients
$Clients = $usr->GetSelWhere("tbl_users","user_id,first_name"," status = 'A'");
$smarty->assign('Clients',$Clients);
$smarty->display('manage-mis-customers-report.tpl');
?>