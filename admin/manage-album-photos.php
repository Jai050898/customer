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
	$upid	= $usr->UpdateQry('tbl_photos',$upar,"photo_id IN(".$_REQUEST['hid_id'].")");
}
$Where		= "1=1 AND A.album_id = '".$_REQUEST['album']."'";
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['keyword']) && $_REQUEST['keyword']!='')
{
	$Where .= " AND A.photo_name like '%".$_REQUEST['keyword']."%'";	
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id']!='')
{
	$Where .= " AND A.user_id = '".$_REQUEST['user_id']."'";	
}
$Table		= "tbl_photos A LEFT JOIN tbl_users B ON A.user_id = B.user_id";
$Fields		= "A.photo_id,A.photo_name,A.created_date,A.status,A.views,B.first_name,B.user_id";

$total		= $usr->TotalRows($Table,$Where);

$limit		= 20;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;
/*********** To Get the Count of Total Cat in the Site ********/


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
$SortBy		= " A.photo_id ".$getSort;

if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
	$SortBy	= $_REQUEST['sortby']." ".$getSort;		
	
$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Photos 	= $usr->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($Photos);exit;
$srcpath 	= "album=".$_REQUEST['album']."&user_id=".$_REQUEST['user_id']."&keyword=".$_REQUEST['keyword']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Photos',$Photos);
//echo "<pre>";print_r($Cat);exit;
//Code to get Users
$Users	= $Gen->GetSelWhere('tbl_users','user_id,first_name'," status = 'A' ORDER BY first_name");
$smarty->assign('Users',$Users);

$smarty->display('manage-album-photos.tpl');
?>