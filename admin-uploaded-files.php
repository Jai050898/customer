<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page',"projects");
$smarty->assign('breadcrumb','Admin Projects Uploaded Files');
$usr 		= new General;
$allUploads=$usr->getAdminUploadedDocs();
//echo "<pre>";print_r($allUploads);exit;
if(is_array($allUploads) & !empty($allUploads))
{
	$smarty->assign('UploadsAll',$allUploads);
	$smarty->assign('TotalUploads',count($allUploads));
}
else
{
	$smarty->assign('TotalUploads',0);
}	
$smarty->display('admin-uploaded-files.tpl');
?>