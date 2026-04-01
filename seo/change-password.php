<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$usr 		= new General;
/*********** To Check the Password of the User in DB ******/
if(isset($_REQUEST['Old_Password']) && $_REQUEST['Old_Password']!='')
{
	$Where		= "user_id = '".$_SESSION['SEO']['ID']."' AND Password = '".base64_encode($_REQUEST['Old_Password'])."'";
	$UsrDet		= $usr->TotalRows('tbl_seo_users',$Where);
	if($UsrDet > 0)
	{
		/********** TO Update the New Password of the User ********/
		$Fields['Password'] = base64_encode($_REQUEST['Password']);
		$UpOverview = $usr->UpdateQry('tbl_seo_users',$Fields,"user_id = ".$_SESSION['SEO']['ID']);
		header('Location:'.SITEURL."/seo/logout.php?cp=Change");
	}
	else
	{
		$ErrorMsg = 'Incorrect Old Password. Try again.';
		$smarty->assign('ErrorMsg',$ErrorMsg);
	}
}
$smarty->display('change-password.tpl');
?>