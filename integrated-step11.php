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
$smarty->assign('breadcrumb','Integrated Survey- Step11');
$usr 		= new General;

$servicesInfoarr = $usr->GetAllWhere("tbl_survey_services","UserId = '".$_SESSION['User']['UID']."'");
if(isset($servicesInfoarr) && !empty($servicesInfoarr))
{
	$servicesInfo = $servicesInfoarr[0];
	$fleetSelected=explode(',',$servicesInfo['FleetServices']);
	$smarty->assign('fleetSelected', $fleetSelected);
	
	$packageSelected=explode(',',$servicesInfo['SpecialServicePackage']);
	$smarty->assign('packageSelected', $packageSelected);
	
	$servicesInfo['OnlineInhouseType']=explode(',',$servicesInfo['OnlineInhouseType']);
	$smarty->assign('servicesInfo',$servicesInfo);
	//echo "<pre>";print_r($servicesInfo);exit;
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;
	
	if($_POST['SurveyDocOutsourced']==0)
	{
		$_POST['SurveyDocOutsourceWhom']='';
	}
	
	if($_POST['PhoneFollowUpOutsourced']==0)
		$_POST['PhoneFollowUpOutsourceWhom']='';

	if($_POST['OnlineOutSoure']==0)
	{	
		$_POST['OnlineOutsourceWhom']='';
	}
	else
	{
		$_POST['OnlineInhouseType']='';
	}
	
	if($_POST['SendReminders']==0 )
	{
		$_POST['radElectronic']='';
		$_POST['radOutsourced']='';
		$_POST['SendRemindersOutsourceWhom']='';
	}
	elseif($_POST['radElectronic']==0)
	{
		$_POST['radOutsourced']='';
		$_POST['SendRemindersOutsourceWhom']='';
	}
	else
	{
		if($_POST['radOutsourced']==0)
		{
			$_POST['SendRemindersOutsourceWhom']='';
		}
	}
	
	if($_POST['SendService']==0)
	{
		$_POST['radElectronicService']='';
		$_POST['radOutsourcedService']='';
		$_POST['SendServiceOutsourceWhom']='';
	}
	elseif($_POST['radElectronicService'] == 0)
	{
		$_POST['radOutsourcedService']='';
		$_POST['SendServiceOutsourceWhom']='';
	}
	else
	{
		if($_POST['radOutsourcedService']==0)
		{
			$_POST['SendServiceOutsourceWhom']='';
		}
	}
	
	#**************************************************#
	if(is_array($_POST['OnlineInhouseType']))
	{
		$OnlineInhouseType2=implode(',',$_POST['OnlineInhouseType']);
	}

	if(is_array($_POST['FleetServices']))
		$FleetServices=implode(',',$_POST['FleetServices']);

	if(is_array($_POST['SpecialServicePackage']))
		$SpecialServicePackage=implode(',',$_POST['SpecialServicePackage']);
		
	#set the values
	$services = array();
	$services['UserId'] = $_SESSION['User']['UID'];
	$services['MenuServices'] = $_POST['MenuServices'];
	$services['SpecializeStyle'] = $_POST['SpecializeStyle'];
	$services['SpecialtyServices'] = $_POST['SpecialtyServices'];
	$services['KnownForSpecial'] = $_POST['KnownForSpecial'];
	$services['FleetServices'] = $FleetServices;
	$services['FleetServicesOther'] = $_POST['FleetServicesOther'];
	$services['ServiceWraps'] = $_POST['ServiceWraps'];
	$services['SpecialServicePackage'] = $SpecialServicePackage;
	$services['SpecialServicePackageOther'] = $_POST['SpecialServicePackageOther'];
	$services['SurveyDocOutsourced'] = $_POST['SurveyDocOutsourced'];
	$services['SurveyDocOutsourceWhom'] = $_POST['SurveyDocOutsourceWhom'];
	$services['PhoneFollowUpOutsourced'] = $_POST['PhoneFollowUpOutsourced'];
	$services['PhoneFollowUpOutsourceWhom'] = $_POST['PhoneFollowUpOutsourceWhom'];
	$services['OnlineOutSoure'] = $_POST['OnlineOutSoure'];
	$services['OnlineInhouseType'] = $OnlineInhouseType2;
	$services['OnlineOutsourceWhom'] = $_POST['OnlineOutsourceWhom'];
	$services['SendReminders'] = $_POST['SendReminders'];
	$services['radElectronic'] = $_POST['radElectronic'];
	$services['radOutsourced'] = $_POST['radOutsourced'];
	$services['SendRemindersOutsourceWhom'] = $_POST['SendRemindersOutsourceWhom'];
	$services['SendService'] = $_POST['SendService'];
	$services['radElectronicService'] = $_POST['radElectronicService'];
	$services['radOutsourcedService'] = $_POST['radOutsourcedService'];
	$services['SendServiceOutsourceWhom'] = $_POST['SendServiceOutsourceWhom'];
	//echo "<pre>";print_r($services);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_services',$services);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_services',$services,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:integrated-step12.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step11.tpl');
?>