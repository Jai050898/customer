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
$servicePracticesDetailarr = $usr->GetAllWhere("tbl_service_practices","UserId = '".$_REQUEST['id']."'");
if(isset($servicePracticesDetailarr) && !empty($servicePracticesDetailarr))
{
	$servicePracticesDetail = $servicePracticesDetailarr[0];
	$servicePracticesDetail['OnlineInhouseType']=explode(',',$servicePracticesDetail['OnlineInhouseType']);
	$smarty->assign('servicePracticesDetail',$servicePracticesDetail);
	
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
	
	if($_POST['SendReminders']==0)
	{
		$_POST['radElectronic']='';
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
	
	$customerServicePractices = array();
	#set the values
	$customerServicePractices['UserId'] = $_REQUEST['id'];
	$customerServicePractices['SurveyDocOutsourced'] = $_POST['SurveyDocOutsourced'];
	$customerServicePractices['SurveyDocOutsourceWhom'] = $_POST['SurveyDocOutsourceWhom'];
	$customerServicePractices['PhoneFollowUpOutsourced'] = $_POST['PhoneFollowUpOutsourced'];
	$customerServicePractices['PhoneFollowUpOutsourceWhom'] = $_POST['PhoneFollowUpOutsourceWhom'];
	$customerServicePractices['OnlineOutSoure'] = $_POST['OnlineOutSoure'];
	$customerServicePractices['OnlineInhouseType'] = $OnlineInhouseType2;
	$customerServicePractices['OnlineOutsourceWhom'] = $_POST['OnlineOutsourceWhom'];
	$customerServicePractices['SendReminders'] = $_POST['SendReminders'];
	$customerServicePractices['radElectronic'] = $_POST['radElectronic'];
	$customerServicePractices['radOutsourced'] = $_POST['radOutsourced'];
	$customerServicePractices['SendRemindersOutsourceWhom'] = $_POST['SendRemindersOutsourceWhom'];
	$customerServicePractices['SendService'] = $_POST['SendService'];
	$customerServicePractices['radElectronicService'] = $_POST['radElectronicService'];
	$customerServicePractices['radOutsourcedService'] = $_POST['radOutsourcedService'];
	$customerServicePractices['SendServiceOutsourceWhom'] = $_POST['SendServiceOutsourceWhom'];
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_service_practices',$customerServicePractices);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_service_practices',$customerServicePractices,"UserId = '".$_REQUEST['id']."'");

		header('location:step6.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('step5.tpl');
?>