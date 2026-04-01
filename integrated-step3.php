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
$smarty->assign('breadcrumb','Integrated Survey- Step3');
$usr 		= new General;

$businessProfileDetailarr = $usr->GetAllWhere("tbl_survey_business_profile","UserId = '".$_SESSION['User']['UID']."'");
if(isset($businessProfileDetailarr) && !empty($businessProfileDetailarr))
{
	$businessProfileDetail = $businessProfileDetailarr[0];
	$businessProfileDetail['StandardColors']=explode(',',$businessProfileDetail['StandardColors']);
	//echo "<pre>";print_r($businessProfileDetail);exit;
	$smarty->assign('businessProfileDetail',$businessProfileDetail);
	
	$affiliationDetailarr=$usr->GetAllWhere("tbl_survey_affiliation"," EntryId = '".$businessProfileDetail['AffiliatedWith']."'");
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
	
	$associationDetailarr=$usr->GetAllWhere("tbl_survey_association"," EntryId = '".$businessProfileDetail['AssociationInvolved']."'");
	
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
	$insarr = $_REQUEST;
	
	#affiliation info
	if(is_array($_POST['OilCompanies']))
		$OilCompaniesAffiliation=implode(',',$_POST['OilCompanies']);
	$OilCompaniesOther=$_POST['OilCompaniesOther'];
	
	if(is_array($_POST['TireCompanies']))
		$TireCompaniesAffiliation=implode(',',$_POST['TireCompanies']);
	$TireCompaniesOther=$_POST['TireCompaniesOther'];
	
	if(is_array($_POST['Franchise']))
		$FranchiseAffiliation=implode(',',$_POST['Franchise']);
	$FranchiseOther=$_POST['FranchiseOther'];
	
	if(is_array($_POST['BannerProgram']))
		$BannerProgramAffiliation=implode(',',$_POST['BannerProgram']);
	$BannerProgramOther=$_POST['BannerProgramOther'];
	
	if(is_array($_POST['AdditionalAffilitiation']))
		$AdditionalAffiliation=implode(',',$_POST['AdditionalAffilitiation']);
	$AdditionalAffiliationOther=$_POST['AdditionalAffilitiationOther'];
	
	#association info
	if(is_array($_POST['Industry']))
		$IndustryAssociation=implode(',',$_POST['Industry']);
	$IndustryOther=$_POST['IndustryOther'];
	
	if(is_array($_POST['GeneralBusiness']))
		$GeneralBusinessAssociation=implode(',',$_POST['GeneralBusiness']);
	$GeneralBusinessOther=$_POST['GeneralBusinessOther'];
	
	if(is_array($_POST['AdditionalAssociation']))
		$AdditionalAssociation=implode(',',$_POST['AdditionalAssociation']);
	$AdditionalAssociationOther=$_POST['AdditionalAssociationOther'];
	
	
	#colorInfo
	if(is_array($_POST['StandardColors']))
		$StandardColors=implode(',',$_POST['StandardColors']);
	
	
	#**************************************************#
	#Do some filetring
	
	if($_POST['HasLogo']==0)
		$_POST['IsTradeMarked']='';

	if($_POST['HasCatchPhrase']==0)
		$_POST['CatchPhrase']='';
		
	if($_POST['HasStandardColors']==0)
		$StandardColors='';	
		
	if($_POST['CollectEmailAddress']==0)
		$_POST['PercentageTime']='';
		
	if($_POST['HasCoOpFunding']==0)
		$_POST['FundingAmount']='';
	
	$customerBusinessProfile = array();
	$customerBusinessProfile['UserId'] = $_SESSION['User']['UID'];
	$customerBusinessProfile['HasLogo'] = $_POST['HasLogo'];
	$customerBusinessProfile['IsTradeMarked'] = $_POST['IsTradeMarked'];
	$customerBusinessProfile['HasCatchPhrase'] = $_POST['HasCatchPhrase'];
	$customerBusinessProfile['CatchPhrase'] = $_POST['CatchPhrase'];
	$customerBusinessProfile['HasStandardColors'] = $_POST['HasStandardColors'];
	$customerBusinessProfile['StandardColors'] = $StandardColors;
	$customerBusinessProfile['HasJingle'] = $_POST['HasJingle'];
	$customerBusinessProfile['CollectEmailAddress'] = $_POST['CollectEmailAddress'];
	$customerBusinessProfile['PercentageTime'] = $_POST['PercentageTime'];
	$customerBusinessProfile['HasCoOpFunding'] = $_POST['HasCoOpFunding'];
	$customerBusinessProfile['FundingAmount'] = $_POST['FundingAmount'];
	
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
	$delaff = $usr->DeleteQry("tbl_survey_affiliation","UserId = '".$_SESSION['User']['UID']."'");
	$insaff 	= $Gen->InsertQry('tbl_survey_affiliation',$affiliationDetail);	
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
	$delass = $usr->DeleteQry("tbl_survey_association","UserId = '".$_SESSION['User']['UID']."'");
	$insass 	= $Gen->InsertQry('tbl_survey_association',$associationDetail);	
	$customerBusinessProfile['AssociationInvolved'] = $insass;
	
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_business_profile',$customerBusinessProfile);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_business_profile',$customerBusinessProfile,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:integrated-step4.php');
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step3.tpl');
?>