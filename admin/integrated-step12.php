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

$marketingInfoarr = $usr->GetAllWhere("tbl_survey_marketing_elements","UserId = '".$_REQUEST['id']."'");
if(isset($marketingInfoarr) && !empty($marketingInfoarr))
{
	$marketingInfo = $marketingInfoarr[0];
	$smarty->assign('marketingInfo',$marketingInfo);

	$multimediaOptionsSelected=explode(',',$marketingInfo['MultimediaMarketing']);
	
	$marketingOptionsSelected=explode(',',$marketingInfo['MarketingOptions']);
	$marketingOptionsSelected['BusinessDocuments']=explode(',',$marketingInfo['BusinessDocuments']);
	$marketingOptionsSelected['Staff']=explode(',',$marketingInfo['Staff']);
	$marketingOptionsSelected['Signage']=explode(',',$marketingInfo['Signage']);
	$marketingOptionsSelected['Multimedia']=explode(',',$marketingInfo['Multimedia']);
	$marketingOptionsSelected['Interactive']=explode(',',$marketingInfo['Interactive']);
	$marketingOptionsSelected['Online']=explode(',',$marketingInfo['Online']);
	$marketingOptionsSelected['SearchEngine']=explode(',',$marketingInfo['SearchEngine']);
	$marketingOptionsSelected['Worksheets']=explode(',',$marketingInfo['Worksheets']);
	$marketingOptionsSelected['Brochures']=explode(',',$marketingInfo['Brochures']);
	$marketingOptionsSelected['Questionaire']=explode(',',$marketingInfo['Questionaire']);
	$marketingOptionsSelected['OffSiteAdvertising']=explode(',',$marketingInfo['OffSiteAdvertising']);
	$marketingOptionsSelected['Published']=explode(',',$marketingInfo['Published']);
	$marketingOptionsSelected['Mailing']=explode(',',$marketingInfo['Mailing']);
	$marketingOptionsSelected['InHand']=explode(',',$marketingInfo['InHand']);
	$marketingOptionsSelected['InVehicle']=explode(',',$marketingInfo['InVehicle']);
	$marketingOptionsSelected['FleetDevelopment']=explode(',',$marketingInfo['FleetDevelopment']);
	$marketingOptionsSelected['FleetPackette']=explode(',',$marketingInfo['FleetPackette']);

	$smarty->assign('marketingOptionsSelected', $marketingOptionsSelected);
	$smarty->assign('multimediaOptionsSelected', $multimediaOptionsSelected);

	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;
	
	if(is_array($_POST['MultimediaMarketing']))
	{
		$MultimediaMarketing=implode(',',$_POST['MultimediaMarketing']);
	}	
	if(is_array($_POST['MarketingOptions']))
	{
		$MarketingOptions=implode(',',$_POST['MarketingOptions']);
	}	
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
		
	#set the values
	$marketing = array();
	$marketing['UserId'] = $_REQUEST['id'];
	$marketing['HaveAdvertisingCalender'] = $_POST['HaveAdvertisingCalender'];
	$marketing['CouponsRunning'] = $_POST['CouponsRunning'];
	$marketing['MultimediaMarketing'] = $MultimediaMarketing;
	$marketing['MultimediaMarketingOptionsOther'] = $_POST['MultimediaMarketingOptionsOther'];
	$marketing['TopCompetitors'] = $_POST['TopCompetitors'];
	$marketing['UseMarketingAgency'] = $_POST['UseMarketingAgency'];
	$marketing['SendEmailNotification'] = $_POST['SendEmailNotification'];
	$marketing['MarketingOptions'] = $MarketingOptions;
	$marketing['MarketingOptionsOther'] = $_POST['MarketingOptionsOther'];
	$marketing['OilChangeReminder'] = $_POST['OilChangeReminder'];
	$marketing['NightOwnBirdDropOff'] = $_POST['NightOwnBirdDropOff'];
	$marketing['RepairReminders'] = $_POST['RepairReminders'];
	$marketing['ScheduleAppointment'] = $_POST['ScheduleAppointment'];
	$marketing['CustomerTestimonials'] = $_POST['CustomerTestimonials'];
	$marketing['BusinessDocuments'] = $BusinessDocuments;
	$marketing['Staff'] = $Staff;
	$marketing['Signage'] = $Signage;
	$marketing['Multimedia'] = $Multimedia;
	$marketing['Interactive'] = $Interactive;
	$marketing['Online'] = $Online;
	$marketing['SearchEngine'] = $SearchEngine;
	$marketing['SearchEngineOther'] = $_POST['SearchEngineOther'];
	$marketing['Worksheets'] = $Worksheets;
	$marketing['WorksheetsOther'] = $_POST['WorksheetsOther'];
	$marketing['Brochures'] = $Brochures;
	$marketing['BrochuresOther'] = $_POST['BrochuresOther'];
	$marketing['Questionaire'] = $Questionaire;
	$marketing['OffSiteAdvertising'] = $OffSiteAdvertising;
	$marketing['Published'] = $Published;
	$marketing['Mailing'] = $Mailing;
	$marketing['InHand'] = $InHand;
	$marketing['InVehicle'] = $InVehicle;
	$marketing['FleetDevelopment'] =$FleetDevelopment;
	$marketing['FleetPackette'] = $FleetPackette;
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_marketing_elements',$marketing);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_marketing_elements',$marketing,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step13.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step12.tpl');
?>