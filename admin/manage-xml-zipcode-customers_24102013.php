<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
$Where		= "1=1 AND zip != ''";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND zip like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != '')
{
	$Where .= " AND company_id = '".$_REQUEST['user_id']."'";
}

$Table		= "XML_customers";
$Fields		= "zip";
$Where .= " GROUP BY zip";
$total_temp		= $usr->TotalRows($Table,$Where);
$total = count($total_temp);
$limit		= 25;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;

if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
    $pageNum = 1;
}
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
$SortBy		= " fname ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Users);$i++)
{
	$totalCust = $usr->TotalRows("XML_customers","zip = '".$Users[$i]['zip']."'");
	$Users[$i]['Ccount'] = $totalCust;
}
//echo "<pre>";print_r($Users);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&user_id=".$_REQUEST['user_id']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Users',$Users);
//Code to get Clients
$Clients = $usr->GetSelWhere("tbl_users","user_id,xml_id,company_name"," status = 'A'");
$smarty->assign('Clients',$Clients);
$smarty->display('manage-xml-zipcode-customers.tpl');
?>