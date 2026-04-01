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

$marketingOpportunitiesarr = $usr->GetAllWhere("tbl_survey_marketing_opportunities","UserId = '".$_REQUEST['id']."'");
if(isset($marketingOpportunitiesarr) && !empty($marketingOpportunitiesarr))
{
	$marketingOpportunities = $marketingOpportunitiesarr[0];
	$marketingOpportunities['SpecialWork']=explode(',',$marketingOpportunities['SpecialWork']);
	$marketingOpportunities['Warranty']=explode(',',$marketingOpportunities['Warranty']);
	$marketingOpportunities['CompetiveAdvantages']=explode(',',$marketingOpportunities['CompetiveAdvantages']);
	#$marketingOpportunities['CommunityActivities']=explode(',',$marketingOpportunities['CommunityActivities']);
	
	if(in_array('26',$marketingOpportunities['CompetiveAdvantages']))
		$smarty->assign('waitingRoom',true);
	else
		$smarty->assign('waitingRoom',false);	
	
	if(in_array('35',$marketingOpportunities['CompetiveAdvantages']))
		$smarty->assign('beverages',true);
	else
		$smarty->assign('beverages',false);	
	
	$marketingOpportunities['PaymentPrograms']=explode(',',$marketingOpportunities['PaymentPrograms']);
	$marketingOpportunities['SpecialDiscounts']=explode(',',$marketingOpportunities['SpecialDiscounts']);
	$smarty->assign('marketingOpportunities',$marketingOpportunities);
	
	
	$communityDetailarr=$usr->GetAllWhere("tbl_survey_community"," EntryId = '".$marketingOpportunities['CommunityActivities']."'");
	//echo "<pre>";print_r($communityDetailarr);exit;
	if($communityDetailarr)
	{
		$smarty->assign('communityDetail',$communityDetailarr[0]);
	}
	else
	{
		$smarty->assign('communityDetail',false);
	}

	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;

	#affiliation info
	if(is_array($_POST['SpecialWork']))
		$SpecialWork=implode(',',$_POST['SpecialWork']);
	if(is_array($_POST['CompetiveAdvantages']))	
		$CompetiveAdvantages=implode(',',$_POST['CompetiveAdvantages']);
	if(is_array($_POST['PaymentPrograms']))	
		$PaymentPrograms=implode(',',$_POST['PaymentPrograms']);
	if(is_array($_POST['SpecialDiscounts']))	
		$SpecialDiscounts=implode(',',$_POST['SpecialDiscounts']);
	if(is_array($_POST['Warranty']))
		$Warranty=implode(',',$_POST['Warranty']);
		
	if(in_array('7',$_POST['CompetiveAdvantages']))
		$MaximumShuttleDistance=$_POST['MaximumShuttleDistance'];
	else
		$MaximumShuttleDistance='';	
		
	if(in_array('25',$_POST['CompetiveAdvantages']))
		$SpecialtyTools=$_POST['SpecialtyTools'];
	else
		$SpecialtyTools='';	
		
	
	$OtherBeverages=$_POST['OtherBeverages'];
	if(!in_array('26',$_POST['CompetiveAdvantages']))	
	{
		for($count=27; $count<=43;$count++)
		{
			$CompetiveAdvantages=str_replace($count,'',$CompetiveAdvantagest);
			$OtherBeverages='';
		}
	}
	if(!in_array('35',$_POST['CompetiveAdvantages']))	
	{
		for($count=36; $count<=39;$count++)
		{
			$CompetiveAdvantages=str_replace($count,'',$CompetiveAdvantagest);
			$OtherBeverages='';
		}
	}
	
	
	if(in_array('1',$_POST['PaymentPrograms']))
		$CashThroughWhom=$_POST['CashThroughWhom'];
	else
		$CashThroughWhom='';	
	
	#set the values
	$customerMarketingOpportunities = array();
	$customerMarketingOpportunities['UserId'] = $_REQUEST['id'];
	$customerMarketingOpportunities['MarketingGoals'] = $_POST['MarketingGoals'];
	$customerMarketingOpportunities['SpecialWork'] = $SpecialWork;
	$customerMarketingOpportunities['SpecialWorkOther'] = $_POST['SpecialWorkOther'];
	$customerMarketingOpportunities['CompetiveAdvantages'] = $CompetiveAdvantages;
	$customerMarketingOpportunities['MaximumShuttleDistance'] = $MaximumShuttleDistance;
	$customerMarketingOpportunities['SpecialtyTools'] = $SpecialtyTools;
	$customerMarketingOpportunities['OtherBeverages'] = $OtherBeverages;
	$customerMarketingOpportunities['AdditionalCompetiveAdvantages'] = $_POST['AdditionalCompetiveAdvantages'];
	$customerMarketingOpportunities['PaymentPrograms'] = $PaymentPrograms;
	$customerMarketingOpportunities['CashThroughWhom'] = $CashThroughWhom;
	$customerMarketingOpportunities['PaymentProgramsOthers'] = $_POST['PaymentProgramsOthers'];
	$customerMarketingOpportunities['SpecialDiscounts'] = $SpecialDiscounts;
	$customerMarketingOpportunities['SpecialDiscountOthers'] = $_POST['SpecialDiscountOthers'];
	$customerMarketingOpportunities['Warranty'] = $Warranty;
	$customerMarketingOpportunities['WarrantyOther'] = $_POST['WarrantyOther'];

	#***************************************************#
	#save communityDetail info
	if($_POST['BloodMobile'])
		$BloodMobileDetail=$_POST['BloodMobileDetail'];
	else
		$BloodMobileDetail='';
	
	if($_POST['Charities'])
		$CharitiesDetail=$_POST['CharitiesDetail'];
	else
		$CharitiesDetail='';
	
	if($_POST['Athletics'])
		$AthleticsDetail=$_POST['AthleticsDetail'];
	else
		$AthleticsDetail='';
	
	if($_POST['CustomerAppreciation'])
		$CustomerAppreciationDetail=$_POST['CustomerAppreciationDetail'];
	else
		$CustomerAppreciationDetail='';
	
	if($_POST['FoodBanks'])
		$FoodBanksDetail=$_POST['FoodBanksDetail'];
	else
		$FoodBanksDetail='';
	
	if($_POST['Holiday'])
		$HolidayDetail=$_POST['HolidayDetail'];
	else
		$HolidayDetail='';
	
	if($_POST['LocalChurch'])
		$LocalChurchDetail=$_POST['LocalChurchDetail'];
	else
		$LocalChurchDetail='';
	
	if($_POST['LocalEvents'])
		$LocalEventsDetail=$_POST['LocalEventsDetail'];
	else
		$LocalEventsDetail='';
	
	if($_POST['SchoolProgram'])
		$SchoolProgramDetail=$_POST['SchoolProgramDetail'];
	else
		$SchoolProgramDetail='';
	
	if($_POST['Scouts'])
		$ScoutsDetail=$_POST['ScoutsDetail'];
	else
		$ScoutsDetail='';
		
	$communityDetail=array
	(
		'UserId'=>$_REQUEST['id'],
		'BloodMobileDetail'=>$BloodMobileDetail,
		'CharitiesDetail'=>$CharitiesDetail,
		'AthleticsDetail'=>$AthleticsDetail,
		'CustomerAppreciationDetail'=>$CustomerAppreciationDetail,
		'FoodBanksDetail'=>$FoodBanksDetail,
		'HolidayDetail'=>$HolidayDetail,
		'LocalChurchDetail'=>$LocalChurchDetail,
		'LocalEventsDetail'=>$LocalEventsDetail,
		'SchoolProgramDetail'=>$SchoolProgramDetail,
		'ScoutsDetail'=>$ScoutsDetail,
		'Additional'=>$_POST['Additional'],
	);
		
	$delcomm = $usr->DeleteQry("tbl_survey_community","UserId = '".$_REQUEST['id']."'");
	$inscom 	= $Gen->InsertQry('tbl_survey_community',$communityDetail);	
	$customerMarketingOpportunities['CommunityActivities'] = $inscom;
	
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_marketing_opportunities',$customerMarketingOpportunities);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_marketing_opportunities',$customerMarketingOpportunities,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step10.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step9.tpl');
?>