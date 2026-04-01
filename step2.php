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
$smarty->assign('breadcrumb','Marketing Survey Step-2');
$usr 		= new General;
if(isset($_SESSION['User']['ismarketingsurveycompleted']) && $_SESSION['User']['ismarketingsurveycompleted'] == "Y")
{
	$success="You have already submitted your survey!!!";
}
$businessProfileDetailarr = $usr->GetAllWhere("tbl_business_profile","UserId = '".$_SESSION['User']['UID']."'");
if(isset($businessProfileDetailarr) && !empty($businessProfileDetailarr))
{
	$businessProfileDetail = $businessProfileDetailarr[0];
	$businessProfileDetail['StandardColors']=explode(',',$businessProfileDetail['StandardColors']);
	$smarty->assign('businessProfileDetail',$businessProfileDetail);
	
	$affiliationDetailarr=$usr->GetAllWhere("tbl_affiliation"," EntryId = '".$businessProfileDetail['AffiliatedWith']."'");
	if($affiliationDetailarr)
	{
		$affiliationDetail = $affiliationDetailarr[0];
		$affiliationDetail['OilCompanies']=explode(',',$affiliationDetail['OilCompanies']);
		$affiliationDetail['TireCompanies']=explode(',',$affiliationDetail['TireCompanies']);
		$affiliationDetail['Franchise']=explode(',',$affiliationDetail['Franchise']);
		$affiliationDetail['BannerProgram']=explode(',',$affiliationDetail['BannerProgram']);
		$affiliationDetail['Additional']=explode(',',$affiliationDetail['Additional']);
		$affiliationDetail['AdditionalOther']=$affiliationDetail['AdditionalOther'];
		
		$smarty->assign('affiliationDetail',$affiliationDetail);
	}
	else
	{
		$smarty->assign('affiliationDetail',false);
	}
	//echo "<pre>";print_r($affiliationDetail);exit;
	$associationDetailarr=$usr->GetAllWhere("tbl_association"," EntryId = '".$businessProfileDetail['AssociationInvolved']."'");
	
	if($associationDetailarr)
	{
		$associationDetail = $associationDetailarr[0];
		$associationDetail['Industry']=explode(',',$associationDetail['Industry']);
		$associationDetail['GeneralBusiness']=explode(',',$associationDetail['GeneralBusiness']);
		$associationDetail['AdditionalOther']=$associationDetail['AdditionalOther'];
		
		$smarty->assign('associationDetail',$associationDetail);
	}
	else
	{
		$smarty->assign('associationDetail',false);
	}
	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}
if(isset($_POST['btnSubmit']))
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$insarr = $_REQUEST;
	unset($insarr['btnSubmit']);
	unset($insarr['hidInHousePlan']);
	unset($insarr['isNew']);	
	
	#affiliation info
	if(is_array($insarr['OilCompanies']))
		$OilCompaniesAffiliation=implode(',',$insarr['OilCompanies']);
	$OilCompaniesOther=$insarr['OilCompaniesOther'];
	
	if(is_array($insarr['TireCompanies']))
		$TireCompaniesAffiliation=implode(',',$insarr['TireCompanies']);
	$TireCompaniesOther=$insarr['TireCompaniesOther'];
	
	if(is_array($insarr['Franchise']))
		$FranchiseAffiliation=implode(',',$insarr['Franchise']);
	$FranchiseOther=$insarr['FranchiseOther'];
	
	if(is_array($insarr['BannerProgram']))
		$BannerProgramAffiliation=implode(',',$insarr['BannerProgram']);
	$BannerProgramOther=$insarr['BannerProgramOther'];
	
	if(is_array($insarr['AdditionalAffilitiation']))
		$AdditionalAffiliation=implode(',',$insarr['AdditionalAffilitiation']);
	$AdditionalAffiliationOther=$insarr['AdditionalAffilitiationOther'];
	
	#association info
	if(is_array($insarr['Industry']))
		$IndustryAssociation=implode(',',$insarr['Industry']);
	$IndustryOther=$insarr['IndustryOther'];
	
	if(is_array($insarr['GeneralBusiness']))
		$GeneralBusinessAssociation=implode(',',$insarr['GeneralBusiness']);
	$GeneralBusinessOther=$insarr['GeneralBusinessOther'];
	
	if(is_array($insarr['AdditionalAssociation']))
		$AdditionalAssociation=implode(',',$insarr['AdditionalAssociation']);
	$AdditionalAssociationOther=$insarr['AdditionalAssociationOther'];
	
	
	#colorInfo
	if(is_array($insarr['StandardColors']))
		$StandardColors=implode(',',$insarr['StandardColors']);
	
	
	#**************************************************#
	#Do some filetring
	
	if($insarr['HasLogo']==0)
		$insarr['IsTradeMarked']='';

	if($insarr['HasCatchPhrase']==0)
		$insarr['CatchPhrase']='';
		
	if($insarr['HasStandardColors']==0)
		$StandardColors='';	
		
	if($insarr['CollectEmailAddress']==0)
		$insarr['PercentageTime']='';
		
	if($insarr['HasCoOpFunding']==0)
		$insarr['FundingAmount']='';
	
	$insarr['UserId'] = $_SESSION['User']['UID']	;
	
	$customerBusinessProfile = array();
	$customerBusinessProfile['UserId'] = $_SESSION['User']['UID'];
	$customerBusinessProfile['HasLogo'] = $insarr['HasLogo'];
	$customerBusinessProfile['IsTradeMarked'] = $insarr['IsTradeMarked'];
	$customerBusinessProfile['HasCatchPhrase'] = $insarr['HasCatchPhrase'];
	$customerBusinessProfile['CatchPhrase'] = $insarr['CatchPhrase'];
	$customerBusinessProfile['HasStandardColors'] = $insarr['HasStandardColors'];
	$customerBusinessProfile['StandardColors'] = $StandardColors;
	$customerBusinessProfile['HasJingle'] = $insarr['HasJingle'];
	$customerBusinessProfile['CollectEmailAddress'] = $insarr['CollectEmailAddress'];
	$customerBusinessProfile['PercentageTime'] = $insarr['PercentageTime'];
	$customerBusinessProfile['HasCoOpFunding'] = $insarr['HasCoOpFunding'];
	$customerBusinessProfile['FundingAmount'] = $insarr['FundingAmount'];
	
	#save affiliationDetail info
	$affiliationDetail=array
	(
		'UserId'=>$_SESSION['User']['UID'],
		'OilCompanies'=>$OilCompaniesAffiliation,
		'OilCompaniesOther'=>$OilCompaniesOther,
		'TireCompanies'=>$TireCompaniesAffiliation,
		'TireCompaniesOther'=>$TireCompaniesOther,
		'Franchise'=>$FranchiseAffiliation,
		'FranchiseOther'=>$FranchiseOther,
		'BannerProgram'=>$BannerProgramAffiliation,
		'BannerProgramOther'=>$BannerProgramOther,
		'Additional'=>$AdditionalAffiliation,
		'AdditionalOther'=>$AdditionalAffiliationOther
	);
	//code to delete affiliate
	$delaff = $usr->DeleteQry("tbl_affiliation","UserId = '".$_SESSION['User']['UID']."'");
	$insaff 	= $Gen->InsertQry('tbl_affiliation',$affiliationDetail);	
	$customerBusinessProfile['AffiliatedWith'] = $insaff;
	
	#save associationDetail info
	$associationDetail=array
	(
		'UserId'=>$_SESSION['User']['UID'],
		'Industry'=>$IndustryAssociation,
		'IndustryOther'=>$IndustryOther,
		'GeneralBusiness'=>$GeneralBusinessAssociation,
		'GeneralBusinessOther'=>$GeneralBusinessOther,
		'Additional'=>$AdditionalAssociation,
		'AdditionalOther'=>$AdditionalAssociationOther
	);
		
	//code to delete affiliate
	$delass = $usr->DeleteQry("tbl_association","UserId = '".$_SESSION['User']['UID']."'");
	$insass 	= $Gen->InsertQry('tbl_association',$associationDetail);	
	$customerBusinessProfile['AssociationInvolved'] = $insass;
			
	//echo "<pre>";print_r($customerBusinessProfile);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_business_profile',$customerBusinessProfile);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_business_profile',$customerBusinessProfile,"UserId = '".$_SESSION['User']['UID']."'");
	
		header('location:step3.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('step2.tpl');
?>