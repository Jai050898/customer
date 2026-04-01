<?php
/*********************************************************************
* Description: Uploading Files.
* Author: Varaprasad	
* Date: 02/15/2011 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','Upload Project File');
$smarty->assign("Page","projects");
$usr 		= new General;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] == 'Post')
{
	if(move_uploaded_file($_FILES['Upload']['tmp_name'],SITEPATH."/Secured/".$_SESSION['User']['user_name']."/uploads/".str_replace(' ','_',$_FILES['Upload']['name'])))
	{
		$InsArr['comments']		= $_REQUEST['Log']['comments'];
		$InsArr['filename']		= str_replace(' ','_',$_FILES['Upload']['name']);
		$InsArr['uploader_id']	= $_SESSION['User']['UID'];
		$InsId					= $usr->InsertQry('tbl_uploads',$InsArr);
		header("Location:".SITEURL."/manage-uploaded-files.php");
	}
}

$smarty->display('upload-file.tpl');
?>