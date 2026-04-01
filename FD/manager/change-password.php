<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$usr 		= new General;
/*********** To Check the Password of the User in DB ******/
if(isset($_REQUEST['Old_Password']) && $_REQUEST['Old_Password']!='')
{
	$Where		= "Company_ID = '".$_SESSION['Manager']['ID']."' AND password = '".base64_encode($_REQUEST['Old_Password'])."'";
	$UsrDet		= $usr->TotalRows('tbl_company',$Where);
	if($UsrDet > 0)
	{
		$Fields['password'] = base64_encode($_REQUEST['Password']);
		$UpOverview = $usr->UpdateQry('tbl_company',$Fields,"Company_ID = ".$_SESSION['Manager']['ID']);
		
		header('Location:'.SITEURL."/manager/logout.php?cp=Change");
	}
	else
	{
		$ErrorMsg = 'Incorrect Old Password. Try again.';
		$smarty->assign('ErrorMsg',$ErrorMsg);
	}
}
$smarty->display('change-password.tpl');
?>