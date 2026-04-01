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
$smarty->assign('breadcrumb','Website Survey- Branding');
$usr 		= new General;

$brandingInfoarr = $usr->GetAllWhere("web_tbl_branding","UserId = '".$_SESSION['User']['UID']."'");
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
	unset($insarr['btnSubmit']);
	unset($insarr['hidInHousePlan']);
	unset($insarr['isNew']);	
	
	$branding = array();
	$branding['UserId'] = $_SESSION['User']['UID'];
	$branding['MissionStatement'] = $_POST['MissionStatement'];
	$branding['Slogan'] = $_POST['Slogan'];
	$branding['BannerAffiliated'] = $_POST['BannerAffiliated'];
	$branding['OilCompanyAffiliation'] = $_POST['OilCompanyAffiliation'];
	$branding['TyreCompanyAffiliation'] = $_POST['TyreCompanyAffiliation'];
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_branding',$branding);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_branding',$branding,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:policy.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('branding.tpl');
?>