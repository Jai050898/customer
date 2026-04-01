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

$policyInfoarr = $usr->GetAllWhere("tbl_survey_policy","UserId = '".$_REQUEST['id']."'");
if(isset($policyInfoarr) && !empty($policyInfoarr))
{
	$policyInfo = $policyInfoarr[0];
	$smarty->assign('policyInfo',$policyInfo);
	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;

	$policy = array();
	$policy['UserId'] = $_REQUEST['id'];
	$policy['EnvironmentalStatement'] = $_POST['EnvironmentalStatement'];
	$policy['WarrantyInfo'] = $_POST['WarrantyInfo'];
	$policy['TowingPolicy'] = $_POST['TowingPolicy'];
	$policy['GuaranteePolicy'] = $_POST['GuaranteePolicy'];
	$policy['FinancialOption'] = $_POST['FinancialOption'];
	$policy['OtherPolicy'] = $_POST['OtherPolicy'];
	$policy['BusinessPhilosophy'] = $_POST['BusinessPhilosophy'];
	
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_policy',$policy);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_policy',$policy,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step7.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step6.tpl');
?>