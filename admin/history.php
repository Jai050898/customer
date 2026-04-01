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

$historyInfoarr = $usr->GetAllWhere("web_tbl_company_history","UserId = '".$_REQUEST['id']."'");
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
	unset($insarr['btnSubmit']);
	unset($insarr['hidInHousePlan']);
	unset($insarr['isNew']);	
	
	$companyHistory = array();
	$companyHistory['UserId'] = $_REQUEST['id'];
	$companyHistory['YearEstablised'] = $_POST['YearEstablised'];
	$companyHistory['HowToIndustry'] = $_POST['HowToIndustry'];
	$companyHistory['CompanyHistory'] = $_POST['CompanyHistory'];
	$companyHistory['PhysicalLocationChange'] = $_POST['PhysicalLocationChange'];
	$companyHistory['OwnershipChange'] = $_POST['OwnershipChange'];
	$companyHistory['CertificationHistory'] = $_POST['CertificationHistory'];
	$companyHistory['SpecialMilestone'] = $_POST['SpecialMilestone'];
	$companyHistory['OtherDetail'] = $_POST['OtherDetail'];
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_company_history',$companyHistory);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_company_history',$companyHistory,"UserId = '".$_REQUEST['id']."'");

		header('location:stuff.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('history.tpl');
?>