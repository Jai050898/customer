<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;

//echo "<pre>";print_r($_SESSION);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Change')
{	
	//echo "<pre>";print_r($_REQUEST);exit;
	$upar['status']	= $_REQUEST['hid_type'];
	$upid	= $usr->UpdateQry('tbl_albums',$upar,"cat_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND A.status != 'D'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND album_name like '%".$_REQUEST['keyword']."%' OR album_description like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['status']) && $_REQUEST['status']!='')
{
	$Where .= " AND A.status = '".$_REQUEST['status']."'";	
}
$Table		= "tbl_albums A LEFT JOIN tbl_photos B ON A.album_id = B.album_id";
$Fields		= "A.album_id,A.album_name,A.created_date,A.status,COUNT(B.photo_id) as totphotos";

$total		= $usr->TotalRows("tbl_albums A",$Where);
$Where .= " GROUP BY A.album_id";
$limit		= 10;
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
$SortBy		= " album_name ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Cat 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Cat);exit;
$srcpath 	= " sortoption=".$_REQUEST['sortoption']."&status=".$_REQUEST['status']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Cat);exit;
$smarty->display('manage-albums.tpl');
?>