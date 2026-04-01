<?php
/*********************************************************************
* Description: Page for Managing Clients @ Admin Side.
* Author: Varaprasad	
* Date: 21/01/2011 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('tbl_clients',$upar,"client_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 ";
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND A.first_name like '%".$_REQUEST['keyword']."%' OR A.last_name like '%".$_REQUEST['keyword']."%' OR A.email like '%".$_REQUEST['keyword']."%'";	
}
$Table		= "tbl_clients A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= "A.client_id,A.company_name,A.first_name,A.last_name,A.email,A.phone,A.country,A.state,A.city,A.status,B.Country_Name,C.State_Name";

$total		= $usr->TotalRows($Table,$Where);
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Clients in the Site ********/
if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc')
{
	$sortioption	= 'asc';
	$getSort		= 'desc';	
	$sortimoption	= 'up';
	$smarty->assign("sortoption",$_POST['sortoption']);
}
else
{
	$sortioption	= 'desc';
	$getSort		= 'asc';	
	$sortimoption	= 'down';
}
$SortBy			= " A.client_id ".$getSort;
if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy			= $_REQUEST['sortby']." ".$getSort;	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
$Clients 	= $usr->GetSelWhere($Table,$Fields,$Where);
$srcpath 	= " keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Clients',$Clients);
//echo "<pre>";print_r($Users);exit;
$smarty->display('manage-clients.tpl');
?>