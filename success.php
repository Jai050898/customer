<?php
require_once("includes/application_start.php");
if(isset($_REQUEST['UID']) && $_REQUEST['UID'] != '')
{
	$UsrDet				= $Gen->GetSelWhere('tbl_users','first_name,last_name'," user_id = ".base64_decode($_REQUEST['UID']));	
}
$smarty->assign('UsrDet',$UsrDet[0]);
$smarty->display('success.tpl');
?>