<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
//echo "<pre>";print_r($_REQUEST);exit;
$link_id = base64_decode($_REQUEST['Id']);
$link_url = base64_decode($_REQUEST['url']);

//Code to Update Link count
$UpdView			= $Gen->ExecQuery("UPDATE tbl_links SET no_of_clicks = (no_of_clicks+1) WHERE link_id = '".$link_id."'");

//Code to Insert Record in Statistics Table
$InsStat['link_id']			= $link_id;
$InsStat['clicked_by']		= $_SESSION['User']['UID']	;
$InsStat['clicked_ip']		=  $_SERVER['REMOTE_ADDR'];
$InsStat['clicked_browser']	= $_SERVER['HTTP_USER_AGENT'];
//echo "<pre>";print_r($InsStat);exit;
$InsCmt		= $Gen->InsertQry('tbl_link_statistics',$InsStat);
if($InsCmt != 0 )
{
	echo $link_url;
	header("Location: ".$link_url);
	exit;
}
?>