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

$marketingLeadersDetailarr = $usr->GetAllWhere("tbl_survey_marketing_leaders","UserId = '".$_REQUEST['id']."'");
if(isset($marketingLeadersDetailarr) && !empty($marketingLeadersDetailarr))
{
	$marketingLeadersDetail = $marketingLeadersDetailarr[0];
	if($marketingLeadersDetail['PurchaseList'])
		$smarty->assign('hidPurChaseMailing',1);
	else
		$smarty->assign('hidPurChaseMailing',0);	
	
	$marketingLeadersDetail['OfferList']=explode(',',$marketingLeadersDetail['OfferList']);
	$marketingLeadersDetail['Advertisements']=explode(',',$marketingLeadersDetail['Advertisements']);
	$marketingLeadersDetail['Mailers']=explode(',',$marketingLeadersDetail['Mailers']);
	$marketingLeadersDetail['PurchaseList']=explode(',',$marketingLeadersDetail['PurchaseList']);
	$marketingLeadersDetail['InHand']=explode(',',$marketingLeadersDetail['InHand']);
	$marketingLeadersDetail['PerceivedCustomers']=explode(',',$marketingLeadersDetail['PerceivedCustomers']);
	
	
	$smarty->assign('marketingLeadersDetail',$marketingLeadersDetail);

	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;
	
	if($_POST['PurchaseMailingList']==0)
	{
		$_POST['PurchaseMailingOutsource']='';
		$_POST['PurchaseMailingOutsourceWhom']='';
	}
	else
	{
		if($_POST['PurchaseMailingOutsource']==0)
		{
			$_POST['PurchaseMailingOutsourceWhom']='';
		}
	}
	if($_POST['HaveOutSideSalesOther']==0)
	{
		$_POST['HaveOutSideSalesOtherDetail']='';
	}
	if($_POST['hidPurChaseMailing']=='1')
	{
		if(is_array($_POST['PurchaseList']))
		{
			$PurchaseList=implode(',',$_POST['PurchaseList']);
		}	
	}	
	if(is_array($_POST['OfferList']))
	{
		$OfferList=implode(',',$_POST['OfferList']);
	}	
	if(is_array($_POST['Advertisements']))
	{
		$Advertisements=implode(',',$_POST['Advertisements']);
	}	
	if(is_array($_POST['Mailers']))
	{
		$Mailers=implode(',',$_POST['Mailers']);
	}	
	if(is_array($_POST['InHand']))
	{
		$InHand=implode(',',$_POST['InHand']);
	}	
	if(is_array($_POST['PerceivedCustomers']))
	{
		$PerceivedCustomers=implode(',',$_POST['PerceivedCustomers']);
	}
		
	#set the values
	$customerMarketingLeaders = array();
	$customerMarketingLeaders['UserId'] = $_REQUEST['id'];
	$customerMarketingLeaders['PurchaseMailingList'] = $_POST['PurchaseMailingList'];
	$customerMarketingLeaders['PurchaseMailingOutsource'] = $_POST['PurchaseMailingOutsource'];
	$customerMarketingLeaders['PurchaseMailingOutsourceWhom'] = $_POST['PurchaseMailingOutsourceWhom'];
	$customerMarketingLeaders['PurchaseList'] = $PurchaseList;
	$customerMarketingLeaders['PurchaseListOther'] = $_POST['PurchaseListOther'];
	$customerMarketingLeaders['OfferList'] = $OfferList;
	$customerMarketingLeaders['Advertisements'] = $Advertisements;
	$customerMarketingLeaders['Mailers'] = $Mailers;
	$customerMarketingLeaders['InHand'] = $InHand;
	$customerMarketingLeaders['HaveOutSideSalesFleet'] = $_POST['HaveOutSideSalesFleet'];
	$customerMarketingLeaders['HaveOutSideSalesOther'] = $_POST['HaveOutSideSalesOther'];
	$customerMarketingLeaders['HaveOutSideSalesOtherDetail'] = $_POST['HaveOutSideSalesOtherDetail'];
	$customerMarketingLeaders['OtherSpecialIncentive'] = $_POST['OtherSpecialIncentive'];
	$customerMarketingLeaders['PerceivedCustomers'] = $PerceivedCustomers;
	$customerMarketingLeaders['PerceivedCustomersOther'] = $_POST['PerceivedCustomersOther'];
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_marketing_leaders',$customerMarketingLeaders);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_marketing_leaders',$customerMarketingLeaders,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step14.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step13.tpl');
?>