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
$smarty->assign('breadcrumb','Integrated Survey- Step2');
$usr 		= new General;

$historyInfoarr = $usr->GetAllWhere("tbl_survey_company_history","UserId = '".$_SESSION['User']['UID']."'");
if(isset($historyInfoarr) && !empty($historyInfoarr))
{
	$historyInfo = $historyInfoarr[0];
	$smarty->assign('historyInfo',$historyInfo);
	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;
	
	$companyHistory = array();	
	$companyHistory['UserId'] = $_SESSION['User']['UID'];
	$companyHistory['YearEstablised'] = $_POST['YearEstablised'];
	$companyHistory['HowToIndustry'] = $_POST['HowToIndustry'];
	$companyHistory['CompanyHistory'] = $_POST['CompanyHistory'];
	$companyHistory['PhysicalLocationChange'] = $_POST['PhysicalLocationChange'];
	$companyHistory['OwnershipChange'] = $_POST['OwnershipChange'];
	$companyHistory['CertificationHistory'] = $_POST['CertificationHistory'];
	$companyHistory['SpecialMilestone'] = $_POST['SpecialMilestone'];
	$companyHistory['OtherDetail'] = $_POST['OtherDetail'];
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_company_history',$companyHistory);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_company_history',$companyHistory,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:integrated-step3.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step2.tpl');
?>