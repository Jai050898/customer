<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
$Where		= "1=1 AND MIS_city != ''";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND MIS_lastname like '%".$_REQUEST['keyword']."%' OR MIS_EmailAddress like '%".$_REQUEST['keyword']."%'";	
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
$Fields		= "MIS_city";

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
	
$Where		.= " GROUP BY MIS_city ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Users);$i++)
{
	$totalCust = $usr->TotalRows("MIS_customers","MIS_city = '".$Users[$i]['MIS_city']."'");
	$Users[$i]['Ccount'] = $totalCust;
}
//echo "<pre>";print_r($Users);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&yearfrom=".$_REQUEST['yearfrom']."&yearto=".$_REQUEST['yearto']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//Code to get Clients
$Clients = $usr->GetSelWhere("tbl_users","user_id,first_name"," status = 'A'");
$smarty->assign('Clients',$Clients);
$smarty->display('manage-mis-city-customers.tpl');
?>