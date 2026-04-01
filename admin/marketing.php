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

$marketingInfoarr = $usr->GetAllWhere("web_tbl_marketing","UserId = '".$_REQUEST['id']."'");
if(isset($marketingInfoarr) && !empty($marketingInfoarr))
{
	$marketingInfo = $marketingInfoarr[0];
	$smarty->assign('marketingInfo',$marketingInfo);

	$marketingOptionsSelected=explode(',',$marketingInfo['MarketingOptions']);
	$smarty->assign('marketingOptionsSelected', $marketingOptionsSelected);
	
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
	
	if(is_array($_POST['MarketingOptions']))
			$MarketingOptions=implode(',',$_POST['MarketingOptions']);

	#set the values
	$marketing = array();
	$marketing['UserId'] = $_REQUEST['id'];
	$marketing['HaveAdvertisingCalender'] = $_POST['HaveAdvertisingCalender'];
	$marketing['CouponsRunning'] = $_POST['CouponsRunning'];
	$marketing['MultimediaMarketing'] = $_POST['MultimediaMarketing'];
	$marketing['TopCompetitors'] = $_POST['TopCompetitors'];
	$marketing['UseMarketingAgency'] = $_POST['UseMarketingAgency'];
	$marketing['SendEmailNotification'] = $_POST['SendEmailNotification'];
	$marketing['MarketingOptions'] = $MarketingOptions;
	$marketing['MarketingOptionsOther'] = $_POST['MarketingOptionsOther'];
	$marketing['OilChangeReminder'] = $_POST['OilChangeReminder'];
	$marketing['NightOwnBirdDropOff'] = $_POST['NightOwnBirdDropOff'];
	$marketing['RepairReminders'] = $_POST['RepairReminders'];
	$marketing['CustomerTestimonials'] = $_POST['CustomerTestimonials'];
		
	//echo "<pre>";print_r($marketing);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_marketing',$marketing);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_marketing',$marketing,"UserId = '".$_REQUEST['id']."'");

		header('location:other.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('marketing.tpl');
?>