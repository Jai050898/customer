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
$smarty->assign('Page','surveys');
$smarty->assign('breadcrumb','Integrated Survey- Step5');
$usr 		= new General;

$brandingInfoarr = $usr->GetAllWhere("tbl_survey_branding","UserId = '".$_SESSION['User']['UID']."'");
if(isset($brandingInfoarr) && !empty($brandingInfoarr))
{
	$brandingInfo = $brandingInfoarr[0];
	$smarty->assign('brandingInfo',$brandingInfo);
	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;

	$branding = array();
	$branding['UserId'] = $_SESSION['User']['UID'];
	$branding['MissionStatement'] = $_POST['MissionStatement'];
	$branding['Slogan'] = $_POST['Slogan'];
	$branding['BannerAffiliated'] = $_POST['BannerAffiliated'];
	$branding['OilCompanyAffiliation'] = $_POST['OilCompanyAffiliation'];
	$branding['TyreCompanyAffiliation'] = $_POST['TyreCompanyAffiliation'];
	
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_branding',$branding);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_branding',$branding,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:integrated-step6.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step5.tpl');
?>