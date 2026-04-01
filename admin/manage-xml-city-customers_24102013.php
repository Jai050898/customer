<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
$Where		= "1=1 AND city != ''";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND city like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != '')
{
	$Where .= " AND company_id = '".$_REQUEST['user_id']."'";
}
$Table		= "XML_customers";
$Fields		= "city";
$Where .=  " GROUP BY city ";
$total_temp = $usr->GetAllWhere($Table,$Where);
$total = count($total_temp);
$limit		= 25;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Users in the Site ********/
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
    $pageNum = 1;
}

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
$SortBy		= " fname ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Users);$i++)
{
	$totalCust = $usr->TotalRows("XML_customers","city = '".$Users[$i]['city']."'");
	$Users[$i]['Ccount'] = $totalCust;
}
//echo "<pre>";print_r($Users);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//Code to get Clients
$Clients = $usr->GetSelWhere("tbl_users","user_id,company_name,xml_id", "status = 'A'");
$smarty->assign('Clients',$Clients);
$smarty->display('manage-xml-city-customers.tpl');
?>