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
$smarty->assign('breadcrumb','Website Survey- About the Company');
$usr 		= new General;

$companyDetailarr = $usr->GetAllWhere("web_tbl_basic_information","UserId = '".$_SESSION['User']['UID']."'");
if(isset($companyDetailarr) && !empty($companyDetailarr))
{
	$companyDetail = $companyDetailarr[0];
	$smarty->assign('companyDetail',$companyDetail);
	
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
	
	$companyBasicInfo = array();
	$companyBasicInfo['UserId'] = $_SESSION['User']['UID'];
	$companyBasicInfo['MainPhone'] = $_POST['MainPhone'];
	$companyBasicInfo['TollFreePhone'] = $_POST['TollFreePhone'];
	$companyBasicInfo['FaxNumber'] = $_POST['FaxNumber'];
	$companyBasicInfo['GeneralEmailAddress'] = $_POST['GeneralEmailAddress'];
	$companyBasicInfo['CompanyDirection'] = $_POST['CompanyDirection'];
	$companyBasicInfo['DirectionLandMark'] = $_POST['DirectionLandMark'];	
	$companyBasicInfo['CountyOfOpeation'] = $_POST['CountyOfOpeation'];
	$companyBasicInfo['HoursOpen'] = $_POST['HoursOpen'];
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_basic_information',$companyBasicInfo);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_basic_information',$companyBasicInfo,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:history.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('companyDetail.tpl');
?>