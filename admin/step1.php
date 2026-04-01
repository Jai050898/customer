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
if(isset($_SESSION['User']['ismarketingsurveycompleted']) && $_SESSION['User']['ismarketingsurveycompleted'] == "Y")
{
	$success="You have already submitted your survey!!!";
}
$basicInfoDetailarr = $usr->GetAllWhere("tbl_basic_information","UserId = '".$_REQUEST['id']."'");
if(isset($basicInfoDetailarr) && !empty($basicInfoDetailarr))
{
	$basicInfoDetail = $basicInfoDetailarr[0];
	$basicInfoDetail['GarageMgtSystem']=explode(',',$basicInfoDetail['GarageMgtSystem']);
	$basicInfoDetail['MarketSegment']=explode(',',$basicInfoDetail['MarketSegment']);
	$basicInfoDetail['FuelSource']=explode(',',$basicInfoDetail['FuelSource']);
	$smarty->assign("basicInfoDetail",$basicInfoDetail);
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
	unset($insarr['id']);
	
	if(is_array($insarr['GarageMgtSystem']))
		$insarr['GarageMgtSystem']=implode(',',$insarr['GarageMgtSystem']);
	
	if(is_array($insarr['MarketSegment']))
		$insarr['MarketSegment']=implode(',',$insarr['MarketSegment']);
	
	if(is_array($insarr['FuelSource']))
		$insarr['FuelSource']=implode(',',$insarr['FuelSource']);
	
	#**************************************************#
	#Do some filetring
	if($insarr['HasAnnualMarketingPlan']==0)
	{
		$insarr['InHousePlan']='';
		$insarr['PlanCreatedBy']='';
	}
	else
	{	
		if($insarr['InHousePlan']==1)
			$insarr['PlanCreatedBy']='';
	}
	
	if($insarr['HasAnnualBudget']==0)
		$insarr['BudgetAmount']='';

	if($insarr['HasFleetBusiness']==0)
		$insarr['PercentageInFleet']='';
	$insarr['UserId'] = $_REQUEST['id']	;
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_basic_information',$insarr);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_basic_information',$insarr,"UserId = '".$_REQUEST['id']."'");

		header('location:step2.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('step1.tpl');
?>