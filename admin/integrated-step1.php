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
require_once("../includes/login_check.php");
$smarty->assign('Page','MyAccount');
$usr 		= new General;

$basicInfoDetailarr = $usr->GetAllWhere("tbl_survey_basic_information","UserId = '".$_REQUEST['id']."'");
if(isset($basicInfoDetailarr) && !empty($basicInfoDetailarr))
{
	$basicInfoDetail = $basicInfoDetailarr[0];
	$basicInfoDetail['GarageMgtSystem']=explode(',',$basicInfoDetail['GarageMgtSystem']);
	$smarty->assign('basicInfoDetail',$basicInfoDetail);
	
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
	
	if(is_array($_POST['GarageMgtSystem']))
		$GarageMgtSystem=implode(',',$_POST['GarageMgtSystem']);
	
	$customerBasicInfo = array();
	$customerBasicInfo['UserId'] = $_REQUEST['id'];
	$customerBasicInfo['MainPhone'] = $_POST['MainPhone'];
	$customerBasicInfo['TollFreePhone'] = $_POST['TollFreePhone'];
	$customerBasicInfo['FaxLineNumber'] = $_POST['FaxLineNumber'];
	$customerBasicInfo['PhoneSystem'] = $_POST['PhoneSystem'];
	$customerBasicInfo['OnHoldMessage'] = $_POST['OnHoldMessage'];
	$customerBasicInfo['OwnerEmailAddress'] = $_POST['OwnerEmailAddress'];
	$customerBasicInfo['GeneralEmailAddress'] = $_POST['GeneralEmailAddress'];
	$customerBasicInfo['WebSiteAddress'] = $_POST['WebSiteAddress'];
	$customerBasicInfo['GarageMgtSystem'] = $GarageMgtSystem;
	$customerBasicInfo['GarageMgtSystemOther'] = $_POST['GarageMgtSystemOther'];
	$customerBasicInfo['CompanyDirection'] = $_POST['CompanyDirection'];
	$customerBasicInfo['DirectionLandMark'] = $_POST['DirectionLandMark'];
	$customerBasicInfo['CountyOfOpeation'] = $_POST['CountyOfOpeation'];
	$customerBasicInfo['HoursOpen'] = $_POST['HoursOpen'];
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_basic_information',$customerBasicInfo);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_basic_information',$customerBasicInfo,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step2.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step1.tpl');
?>