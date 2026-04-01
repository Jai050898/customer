<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
if(isset($_REQUEST['Up_Key']) && $_REQUEST['Up_Key'] == "Upload")
{
	//echo "<pre>";print_r($_REQUEST);exit;
	//$FileArr = explode(',',$_REQUEST['Inq_Docs']);
	//for($d=0;$d<count($FileArr);$d++)
	//{
		$DocArr['photo_name'] 	= $_REQUEST['Image_Logo'];;
		$DocArr['album_id'] 	= $_REQUEST['album_id'];
		$DocArr['user_id'] 		= $_SESSION['User']['UID'];
		//echo "<pre>";print_r($DocArr);exit;
		$DocId	= $Gen->InsertQry('tbl_photos',$DocArr);
	//}
	header("Location:".SITEURL."/my-image-gallery.php?album=".$_REQUEST['album_id']);
	exit;
}
$smarty->assign('Page',$Page);
$smarty->display('upload-document.tpl');
?>