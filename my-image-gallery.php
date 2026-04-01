<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','My Image Gallery');
$Page = 'projects';
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] == 'Delete')
{
	$UpdArr['status']		= 'D';
	$UpdId					= $Gen->UpdateQry('tbl_photos',$UpdArr," photo_id = ".$_REQUEST['hid_id']);
}	
if(isset($_REQUEST['hid_val']) && $_REQUEST['hid_val'] == 'Post')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$InsArr['photo_id']			= $_REQUEST['photo_id'];
	$InsArr['commented_by']		= $_REQUEST['commented_by'];
	$InsArr['comments']			= $_REQUEST['comments'];
	$InsArr['status']			= 'A';
	$InsArr['created_date']		= date('Y-m-d H:i:s');
	//echo "<pre>";print_r($InsArr);exit;
	$UpdCmt		= $Gen->InsertQry('tbl_comments',$InsArr);
}
$Table		= "tbl_photos";
$Where = "1=1 AND status = 'A' AND user_id = '".$_SESSION['User']['UID']."'";
$Where .= " AND album_id = '".$_REQUEST['album']."'";
$Fields = "photo_id,photo_name,views,created_date";
$total		= $Gen->TotalRows($Table,$Where);
$limit		= 8;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;

$SortBy		= " photo_id ASC";

$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
$Photos		= $Gen->GetSelWhere($Table,$Fields,$Where);
$smarty->assign('Photos',$Photos);
$srcpath 	= "album=".$_REQUEST['album']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Page',$Page);
$smarty->display('my-image-gallery.tpl');
?>