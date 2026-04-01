<?php
/*********************************************************************
* Description: Managing Customer Uploaded Files.
* Author: Varaprasad	
* Date: 02/15/2011 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $Gen->UpdateQry('tbl_link_statistics',$upar,"stat_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= " 1=1 AND A.link_id = '".$_REQUEST['link_id']."'";
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND B.first_name like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['clicked_date']) && $_REQUEST['clicked_date']!='')
{
	$cdate = $Gen->Date_Format($_REQUEST['clicked_date']);
	$Where .= " AND date_format(A.clicked_date,'%Y-%m-%d') = '".$cdate."'";	
}
$Table		= "tbl_link_statistics A LEFT JOIN tbl_users B ON A.clicked_by = B.user_id";
$Fields		= "A.stat_id,A.clicked_by,A.clicked_date,A.clicked_ip,A.clicked_browser,A.status,B.first_name,B.last_name,B.user_id,B.user_name";
if(isset($_REQUEST['url']))
{
	$smarty->assign("url",base64_decode($_REQUEST['url']));
}
$total		= $usr->TotalRows($Table,$Where);
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
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
$SortBy		= " A.stat_id ".$getSort;
if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
$Statistics	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Uploads);exit;
$srcpath 	= " link_id=".$_REQUEST['link_id']."&url=".$_REQUEST['url']."&clicked_date=".$_REQUEST['clicked_date']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign('Statistics',$Statistics);
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->display('view-stats.tpl');
?>