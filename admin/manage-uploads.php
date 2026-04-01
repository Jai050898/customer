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
	$upid	= $Gen->UpdateQry('tbl_uploads',$upar,"id IN(".$_REQUEST['hid_id'].")");
}
$Where		= " 1=1 AND A.status != 'D'";
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND B.first_name like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND A.status = '".$_REQUEST['status']."'";	
}
$Table		= "tbl_uploads A LEFT JOIN tbl_users B ON A.uploader_id = B.user_id";
$Fields		= "A.id,A.filename,A.dateuploaded,A.comments,A.status,B.first_name,B.last_name,B.user_id,B.user_name";

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
$SortBy		= " A.id ".$getSort;
if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
$Uploads	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Uploads);exit;
$srcpath 	= " keyword=".$_REQUEST['keyword']."&status=".$_REQUEST['status']."&page=";
include('../includes/generate_pages.php');
$smarty->assign('Uploads',$Uploads);
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->display('manage-uploads.tpl');
?>