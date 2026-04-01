<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','My Albums');
$Page = 'projects';
//$Table		= "tbl_albums A LEFT JOIN tbl_photos B ON A.album_id = B.album_id AND B.user_id = '".$_SESSION['User']['UID']	."'";
$Table		= "tbl_photos B LEFT JOIN tbl_albums A ON A.album_id = B.album_id AND B.user_id = '".$_SESSION['User']['UID']	."'";
$Cat		= $Gen->GetSelWhere($Table,'A.album_id,A.album_name,A.created_date,COUNT(B.photo_id) as totphotos',"  A.status = 'A' GROUP BY A.album_id");
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Cat);exit;
$smarty->assign('Page',$Page);
$smarty->display('myalbums.tpl');
?>