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

$otherInfoarr = $usr->GetAllWhere("tbl_survey_other_info","UserId = '".$_REQUEST['id']."'");
if(isset($otherInfoarr) && !empty($otherInfoarr))
{
	$otherInfo = $otherInfoarr[0];
	$smarty->assign('otherInfo',$otherInfo);

	$stylesSelected=explode(',',$otherInfo['CompanyStyles']);
	
	$smarty->assign('stylesSelected', $stylesSelected);
	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;
	
	if(is_array($_POST['CompanyStyles']))
	{

		$CompanyStyles=implode(',',$_POST['CompanyStyles']);
	}	
		
	#set the values
	$othersInfo = array();
	$othersInfo['UserId'] = $_REQUEST['id'];
	$othersInfo['SpecialTips'] = $_POST['SpecialTips'];
	$othersInfo['ReportForGoogle'] = $_POST['ReportForGoogle'];
	$othersInfo['CollectEmailAddress'] = $_POST['CollectEmailAddress'];
	$othersInfo['AnythingElse'] = $_POST['AnythingElse'];
	$othersInfo['CompanyStyles'] = $CompanyStyles;
	$othersInfo['SpecificColor'] = $_POST['SpecificColor'];
	$othersInfo['PreferIllustration'] = $_POST['PreferIllustration'];
	$othersInfo['WebSiteYouLike'] = $_POST['WebSiteYouLike'];
	$othersInfo['WordsDescribe'] = $_POST['WordsDescribe'];
	$othersInfo['FontChoice'] = $_POST['FontChoice'];
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_other_info',$othersInfo);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_other_info',$othersInfo,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-survey.php?user_id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step14.tpl');
?>