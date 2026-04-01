<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'resources';
$smarty->assign('breadcrumb','Resources - Albums');
$Table		= "tbl_albums A LEFT JOIN tbl_photos B ON A.album_id = B.album_id";
$Cat		= $Gen->GetSelWhere($Table,'A.album_id,A.album_name,A.created_date,COUNT(B.photo_id) as totphotos'," 1 = 1 AND A.status = 'A' GROUP BY A.album_id");
$smarty->assign('Cat',$Cat);
//echo "<pre>";print_r($Cat);exit;
$smarty->assign('Page',$Page);
$smarty->display('albums.tpl');
?>