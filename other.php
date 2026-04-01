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
$smarty->assign('breadcrumb','Website Survey- Other');
$usr 		= new General;

$otherInfoarr = $usr->GetAllWhere("web_tbl_other_info","UserId = '".$_SESSION['User']['UID']."'");
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
	unset($insarr['btnSubmit']);
	unset($insarr['hidInHousePlan']);
	unset($insarr['isNew']);	
	
	if(is_array($_POST['CompanyStyles']))
			$CompanyStyles=implode(',',$_POST['CompanyStyles']);


	#set the values
	$othersInfo = array();
	$othersInfo['UserId'] = $_SESSION['User']['UID'];
	$othersInfo['GarageManagement'] = $_POST['GarageManagement'];
	$othersInfo['SpecialTips'] = $_POST['SpecialTips'];
	$othersInfo['CollectEmailAddress'] = $_POST['CollectEmailAddress'];
	$othersInfo['AnythingElse'] = $_POST['AnythingElse'];
	$othersInfo['CompanyStyles'] = $CompanyStyles;	
	$othersInfo['SpecificColor'] = $_POST['SpecificColor'];
	$othersInfo['PreferIllustration'] = $_POST['PreferIllustration'];
	$othersInfo['WebSiteYouLike'] = $_POST['WebSiteYouLike'];
	$othersInfo['WordsDescribe'] = $_POST['WordsDescribe'];
	$othersInfo['FontChoice'] = $_POST['FontChoice'];
		
	//echo "<pre>";print_r($marketing);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_other_info',$othersInfo);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_other_info',$othersInfo,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:finish-websurvey.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('other.tpl');
?>