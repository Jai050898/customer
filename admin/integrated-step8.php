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

$basicInfoDetailarr = $usr->GetAllWhere("tbl_survey_marketing_info","UserId = '".$_REQUEST['id']."'");
if(isset($basicInfoDetailarr) && !empty($basicInfoDetailarr))
{
	$basicInfoDetail = $basicInfoDetailarr[0];
	$basicInfoDetail['GarageMgtSystem']=explode(',',$basicInfoDetail['GarageMgtSystem']);
	$basicInfoDetail['MarketSegment']=explode(',',$basicInfoDetail['MarketSegment']);
	$basicInfoDetail['FuelSource']=explode(',',$basicInfoDetail['FuelSource']);
	
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

	if(is_array($_POST['GarageMgtSystem']))
		$GarageMgtSystem=implode(',',$_POST['GarageMgtSystem']);
	
	if(is_array($_POST['MarketSegment']))
		$MarketSegment=implode(',',$_POST['MarketSegment']);
	
	if(is_array($_POST['FuelSource']))
		$FuelSource=implode(',',$_POST['FuelSource']);
	
	#**************************************************#
	#Do some filetring
	if($_POST['HasAnnualMarketingPlan']==0)
	{
		$_POST['InHousePlan']='';
		$_POST['PlanCreatedBy']='';
	}
	else
	{	
		if($_POST['InHousePlan']==1)
			$_POST['PlanCreatedBy']='';
	}
	
	if($_POST['HasAnnualBudget']==0)
		$_POST['BudgetAmount']='';

	if($_POST['HasFleetBusiness']==0)
		$_POST['PercentageInFleet']='';

	$marketingBasicInfo = array();
	$marketingBasicInfo['UserId'] = $_REQUEST['id'];
	$marketingBasicInfo['LastYearGrossSales'] = $_POST['LastYearGrossSales'];
	$marketingBasicInfo['LastYearMarketingExpenditure'] = $_POST['LastYearMarketingExpenditure'];
	$marketingBasicInfo['HasAnnualMarketingPlan'] = $_POST['HasAnnualMarketingPlan'];
	$marketingBasicInfo['InHousePlan'] = $_POST['InHousePlan'];
	$marketingBasicInfo['PlanCreatedBy'] = $_POST['PlanCreatedBy'];
	$marketingBasicInfo['HasAnnualBudget'] = $_POST['HasAnnualBudget'];
	$marketingBasicInfo['BudgetAmount'] = $_POST['BudgetAmount'];
	$marketingBasicInfo['MarketSegment'] = $MarketSegment;
	$marketingBasicInfo['OtherMarkerSegment'] = $_POST['OtherMarkerSegment'];
	$marketingBasicInfo['FuelSource'] = $FuelSource;
	$marketingBasicInfo['OtherFuelSource'] = $_POST['OtherFuelSource'];
	$marketingBasicInfo['HasFleetBusiness'] = $_POST['HasFleetBusiness'];
	$marketingBasicInfo['PercentageInFleet'] = $_POST['PercentageInFleet'];
	$marketingBasicInfo['DetailTracking'] = $_POST['DetailTracking'];
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_marketing_info',$marketingBasicInfo);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_marketing_info',$marketingBasicInfo,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step9.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step8.tpl');
?>