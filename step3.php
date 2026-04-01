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
$smarty->assign('breadcrumb','Marketing Survey Step-3');
$usr 		= new General;
if(isset($_SESSION['User']['ismarketingsurveycompleted']) && $_SESSION['User']['ismarketingsurveycompleted'] == "Y")
{
	$success="You have already submitted your survey!!!";
}
$marketingOpportunitiesarr = $usr->GetAllWhere("tbl_marketing_opportunities","UserId = '".$_SESSION['User']['UID']."'");
if(isset($marketingOpportunitiesarr) && !empty($marketingOpportunitiesarr))
{
	$marketingOpportunities = $marketingOpportunitiesarr[0];
	$marketingOpportunities['SpecialWork']=explode(',',$marketingOpportunities['SpecialWork']);
	//echo "<pre>";print_r($marketingOpportunities);exit;
	$marketingOpportunities['CompetiveAdvantages']=explode(',',$marketingOpportunities['CompetiveAdvantages']);
	//echo "<pre>";print_r($marketingOpportunities['CompetiveAdvantages']);exit;
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
	$marketingOpportunities['Warranty']=explode(',',$marketingOpportunities['Warranty']);
	
	$smarty->assign('marketingOpportunities',$marketingOpportunities);
	
	$communityDetailarr=$usr->GetAllWhere("tbl_community"," EntryId = '".$marketingOpportunities['CommunityActivities']."'");
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
	unset($insarr['btnSubmit']);
	unset($insarr['hidInHousePlan']);
	unset($insarr['isNew']);	
	
	#affiliation info
	if(is_array($insarr['SpecialWork']))
		$SpecialWork=implode(',',$insarr['SpecialWork']);
	if(is_array($insarr['CompetiveAdvantages']))	
		$CompetiveAdvantages=implode(',',$insarr['CompetiveAdvantages']);
	if(is_array($insarr['PaymentPrograms']))	
		$PaymentPrograms=implode(',',$insarr['PaymentPrograms']);
	if(is_array($insarr['SpecialDiscounts']))	
		$SpecialDiscounts=implode(',',$insarr['SpecialDiscounts']);
	if(is_array($insarr['Warranty']))
		$Warranty=implode(',',$insarr['Warranty']);
		
	if(in_array('7',$insarr['CompetiveAdvantages']))
		$MaximumShuttleDistance=$insarr['MaximumShuttleDistance'];
	else
		$MaximumShuttleDistance='';	
		
	if(in_array('25',$insarr['CompetiveAdvantages']))
		$SpecialtyTools=$insarr['SpecialtyTools'];
	else
		$SpecialtyTools='';	
		
	
	$OtherBeverages=$insarr['OtherBeverages'];
	if(!in_array('26',$insarr['CompetiveAdvantages']))	
	{
		for($count=27; $count<=43;$count++)
		{
			$CompetiveAdvantages=str_replace($count,'',$CompetiveAdvantagest);
			$OtherBeverages='';
		}
	}
	if(!in_array('35',$insarr['CompetiveAdvantages']))	
	{
		for($count=36; $count<=39;$count++)
		{
			$CompetiveAdvantages=str_replace($count,'',$CompetiveAdvantagest);
			$OtherBeverages='';
		}
	}
	
	
	if(in_array('1',$insarr['PaymentPrograms']))
		$CashThroughWhom=$insarr['CashThroughWhom'];
	else
		$CashThroughWhom='';	
				
	$insarr['UserId'] = $_SESSION['User']['UID'];
	#set the values
	$customerMarketingOpportunities = array();
	$customerMarketingOpportunities['UserId'] = $_SESSION['User']['UID'];
	$customerMarketingOpportunities['SpecialWork'] = $SpecialWork;
	$customerMarketingOpportunities['SpecialWorkOther'] = $insarr['SpecialWorkOther'];
	$customerMarketingOpportunities['CompetiveAdvantages'] = $CompetiveAdvantages;
	$customerMarketingOpportunities['MaximumShuttleDistance'] = $MaximumShuttleDistance;
	$customerMarketingOpportunities['SpecialtyTools'] = $SpecialtyTools;
	$customerMarketingOpportunities['OtherBeverages'] = $OtherBeverages;
	$customerMarketingOpportunities['AdditionalCompetiveAdvantages'] = $insarr['AdditionalCompetiveAdvantages'];
	$customerMarketingOpportunities['PaymentPrograms'] = $PaymentPrograms;
	$customerMarketingOpportunities['CashThroughWhom'] = $CashThroughWhom;
	$customerMarketingOpportunities['PaymentProgramsOthers'] = $insarr['PaymentProgramsOthers'];
	$customerMarketingOpportunities['SpecialDiscounts'] = $SpecialDiscounts;
	$customerMarketingOpportunities['SpecialDiscountOthers']  = $insarr['SpecialDiscountOthers'];
	$customerMarketingOpportunities['Warranty'] = $Warranty;
	$customerMarketingOpportunities['WarrantyOther'] = $insarr['WarrantyOther'];

	#***************************************************#
	#save communityDetail info
	if($insarr['BloodMobile'])
		$BloodMobileDetail=$insarr['BloodMobileDetail'];
	else
		$BloodMobileDetail='';
	
	if($insarr['Charities'])
		$CharitiesDetail=$insarr['CharitiesDetail'];
	else
		$CharitiesDetail='';
	
	if($insarr['Athletics'])
		$AthleticsDetail=$insarr['AthleticsDetail'];
	else
		$AthleticsDetail='';
	
	if($insarr['CustomerAppreciation'])
		$CustomerAppreciationDetail=$insarr['CustomerAppreciationDetail'];
	else
		$CustomerAppreciationDetail='';
	
	if($insarr['FoodBanks'])
		$FoodBanksDetail=$insarr['FoodBanksDetail'];
	else
		$FoodBanksDetail='';
	
	if($insarr['Holiday'])
		$HolidayDetail=$insarr['HolidayDetail'];
	else
		$HolidayDetail='';
	
	if($insarr['LocalChurch'])
		$LocalChurchDetail=$insarr['LocalChurchDetail'];
	else
		$LocalChurchDetail='';
	
	if($insarr['LocalEvents'])
		$LocalEventsDetail=$insarr['LocalEventsDetail'];
	else
		$LocalEventsDetail='';
	
	if($_POST['SchoolProgram'])
		$SchoolProgramDetail=$insarr['SchoolProgramDetail'];
	else
		$SchoolProgramDetail='';
	
	if($insarr['Scouts'])
		$ScoutsDetail=$insarr['ScoutsDetail'];
	else
		$ScoutsDetail='';
		
	$communityDetail=array
	(
		'UserId'=>$_SESSION['User']['UID'],
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
		'Additional'=>$insarr['Additional'],
	);
			
	//code to delete affiliate
	$delcomm = $usr->DeleteQry("tbl_community","UserId = '".$_SESSION['User']['UID']."'");
	$inscom 	= $Gen->InsertQry('tbl_community',$communityDetail);	
	$customerMarketingOpportunities['CommunityActivities'] = $inscom;
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_marketing_opportunities',$customerMarketingOpportunities);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_marketing_opportunities',$customerMarketingOpportunities,"UserId = '".$_SESSION['User']['UID']."'");

	header('location:step4.php');
	exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('step3.tpl');
?>