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
/*********** To Check the Password of the User in DB ******/
if(isset($_REQUEST['Old_Password']) && $_REQUEST['Old_Password']!='')
{
	$Where		= "Admin_ID = '".$_SESSION['Admin']['ID']."' AND Password = '".base64_encode($_REQUEST['Old_Password'])."'";
	$UsrDet		= $usr->TotalRows('tbl_admins',$Where);
	if($UsrDet > 0)
	{
		/********** TO Update the New Password of the User ********/
		$Fields['Password'] = base64_encode($_REQUEST['Password']);
		$UpOverview = $usr->UpdateQry('tbl_admins',$Fields,"Admin_ID = ".$_SESSION['Admin']['ID']);
);
		header('Location:'.SITEURL."/admin/logout.php?cp=Change");
	}
	else
	{
		$ErrorMsg = 'Incorrect Old Password. Try again.';
		$smarty->assign('ErrorMsg',$ErrorMsg);
	}
}
$smarty->display('change-password.tpl');
?>