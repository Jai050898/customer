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
/*****section to get the details from data base*********************/
if(isset($_REQUEST['album_id']) && $_REQUEST['album_id'] != "")
{
	$Fields 	= "album_id,album_name,album_description,status";
	$Where 		= "album_id = ".$_REQUEST['album_id'];
	$Cat	= $usr->GetSelWhere("tbl_albums",$Fields,$Where);
	//echo '<pre>';print_r($product);exit;
	$smarty->assign('Cat',$Cat[0]);
}
$smarty->display('view-album.tpl');
?>