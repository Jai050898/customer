<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['Up_Key']) && $_REQUEST['Up_Key'] == "Upload")
{
	$FileArr = explode(',',$_REQUEST['Inq_Docs']);
	//echo "<pre>";print_r($FileArr);exit;
	for($d=0;$d<count($FileArr);$d++)
	{
		$DocArr['photo_name'] 	= $FileArr[$d];
		$DocArr['album_id'] 	= $_REQUEST['album_id'];
		$DocArr['user_id'] 		= $_SESSION['User']['UID'];
		$DocId	= $Gen->InsertQry('tbl_photos',$DocArr);
	}
	header("Location:".SITEURL."/my-image-gallery.php?album=".$_REQUEST['album_id']);
	exit;
}
$smarty->assign('Page',$Page);
$smarty->display('add-photos.tpl');
?>