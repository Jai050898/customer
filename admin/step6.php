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
$marketingElementsDetailarr = $usr->GetAllWhere("tbl_marketing_elements","UserId = '".$_REQUEST['id']."'");
if(isset($marketingElementsDetailarr) && !empty($marketingElementsDetailarr))
{
	$marketingElementsDetail = $marketingElementsDetailarr[0];
	$marketingElementsDetail['BusinessDocuments']=explode(',',$marketingElementsDetail['BusinessDocuments']);
	$marketingElementsDetail['Staff']=explode(',',$marketingElementsDetail['Staff']);
	$marketingElementsDetail['Signage']=explode(',',$marketingElementsDetail['Signage']);
	$marketingElementsDetail['Multimedia']=explode(',',$marketingElementsDetail['Multimedia']);
	$marketingElementsDetail['Interactive']=explode(',',$marketingElementsDetail['Interactive']);
	$marketingElementsDetail['Online']=explode(',',$marketingElementsDetail['Online']);
	$marketingElementsDetail['SearchEngine']=explode(',',$marketingElementsDetail['SearchEngine']);
	$marketingElementsDetail['Worksheets']=explode(',',$marketingElementsDetail['Worksheets']);
	$marketingElementsDetail['Brochures']=explode(',',$marketingElementsDetail['Brochures']);
	$marketingElementsDetail['Questionaire']=explode(',',$marketingElementsDetail['Questionaire']);
	$marketingElementsDetail['OffSiteAdvertising']=explode(',',$marketingElementsDetail['OffSiteAdvertising']);
	$marketingElementsDetail['Published']=explode(',',$marketingElementsDetail['Published']);
	$marketingElementsDetail['Mailing']=explode(',',$marketingElementsDetail['Mailing']);
	$marketingElementsDetail['InHand']=explode(',',$marketingElementsDetail['InHand']);
	$marketingElementsDetail['InVehicle']=explode(',',$marketingElementsDetail['InVehicle']);
	$marketingElementsDetail['FleetDevelopment']=explode(',',$marketingElementsDetail['FleetDevelopment']);
	$marketingElementsDetail['FleetPackette']=explode(',',$marketingElementsDetail['FleetPackette']);
	
	
	$smarty->assign('marketingElementsDetail',$marketingElementsDetail);
	
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
	
	if(is_array($_POST['BusinessDocuments']))
	{
		$BusinessDocuments=implode(',',$_POST['BusinessDocuments']);
	}	
	if(is_array($_POST['Staff']))
	{
		$Staff=implode(',',$_POST['Staff']);
	}	
	if(is_array($_POST['Signage']))
	{
		$Signage=implode(',',$_POST['Signage']);
	}	
	if(is_array($_POST['Multimedia']))
	{
		$Multimedia=implode(',',$_POST['Multimedia']);
	}	
	if(is_array($_POST['Interactive']))
	{
		$Interactive=implode(',',$_POST['Interactive']);
	}	
	if(is_array($_POST['Online']))
	{
		$Online=implode(',',$_POST['Online']);
	}	
	if(is_array($_POST['Worksheets']))
	{
		$Worksheets=implode(',',$_POST['Worksheets']);
	}	
	if(is_array($_POST['Brochures']))
	{
		$Brochures=implode(',',$_POST['Brochures']);
	}	
	if(is_array($_POST['Questionaire']))
	{
		$Questionaire=implode(',',$_POST['Questionaire']);
	}	
	if(is_array($_POST['OffSiteAdvertising']))
	{
		$OffSiteAdvertising=implode(',',$_POST['OffSiteAdvertising']);
	}	
	if(is_array($_POST['Published']))
	{
		$Published=implode(',',$_POST['Published']);
	}	
	if(is_array($_POST['Mailing']))
	{
		$Mailing=implode(',',$_POST['Mailing']);
	}	
	if(is_array($_POST['InHand']))
	{
		$InHand=implode(',',$_POST['InHand']);
	}	
	if(is_array($_POST['InVehicle']))
	{
		$InVehicle=implode(',',$_POST['InVehicle']);
	}	
	if(is_array($_POST['FleetDevelopment']))
	{
		$FleetDevelopment=implode(',',$_POST['FleetDevelopment']);
	}	
	if(is_array($_POST['FleetPackette']))
	{
		$FleetPackette=implode(',',$_POST['FleetPackette']);
	}	
	if(is_array($_POST['SearchEngine']))
	{
		$SearchEngine=implode(',',$_POST['SearchEngine']);
	}
	
	$customerMarketingElements = array();
	#set the values
	$customerMarketingElements['UserId'] = $_REQUEST['id'];
	$customerMarketingElements['BusinessDocuments'] = $BusinessDocuments;
	$customerMarketingElements['Staff'] = $Staff;
	$customerMarketingElements['Signage'] = $Signage;
	$customerMarketingElements['Multimedia'] = $Multimedia;
	$customerMarketingElements['Interactive'] = $Interactive;
	$customerMarketingElements['Online'] = $Online;
	$customerMarketingElements['SearchEngine'] = $SearchEngine;
	$customerMarketingElements['SearchEngineOther'] = $_POST['SearchEngineOther'];
	$customerMarketingElements['Worksheets'] = $Worksheets;
	$customerMarketingElements['WorksheetsOther'] = $_POST['WorksheetsOther'];
	$customerMarketingElements['Brochures'] = $Brochures;
	$customerMarketingElements['BrochuresOther'] = $_POST['BrochuresOther'];
	$customerMarketingElements['Questionaire'] = $Questionaire;
	$customerMarketingElements['OffSiteAdvertising'] = $OffSiteAdvertising;
	$customerMarketingElements['Published'] = $Published;
	$customerMarketingElements['Mailing'] = $Mailing;
	$customerMarketingElements['InHand'] = $InHand;
	$customerMarketingElements['InVehicle'] = $InVehicle;
	$customerMarketingElements['FleetDevelopment'] = $FleetDevelopment;
	$customerMarketingElements['FleetPackette'] = $FleetPackette;
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_marketing_elements',$customerMarketingElements);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_marketing_elements',$customerMarketingElements,"UserId = '".$_REQUEST['id']."'");

		header('location:step7.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('step6.tpl');
?>