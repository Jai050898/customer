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
$businessCustomerDetailarr = $usr->GetAllWhere("tbl_customer_profile","UserId = '".$_REQUEST['id']."'");
if(isset($businessCustomerDetailarr) && !empty($businessCustomerDetailarr))
{
	$businessCustomerDetail = $businessCustomerDetailarr[0];
	$businessCustomerDetail['EconomicInfluence']=explode(',',$businessCustomerDetail['EconomicInfluence']);
	$smarty->assign('businessCustomerDetail',$businessCustomerDetail);
	
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
	
	$businessCustomerProfile = array();
	#set the values
	$businessCustomerProfile['UserId']= $_REQUEST['id'];
	$businessCustomerProfile['MarketingTargetsInDB'] = $_POST['MarketingTargetsInDB'];
	$businessCustomerProfile['SexMale'] = $_POST['SexMale'];
	$businessCustomerProfile['SexFeMale'] = $_POST['SexFeMale'];
	$businessCustomerProfile['SexUnknown'] = $_POST['SexUnknown'];
	$businessCustomerProfile['RaceWhite'] = $_POST['RaceWhite'];
	$businessCustomerProfile['RaceBlack'] = $_POST['RaceBlack'];
	$businessCustomerProfile['RaceAmerican'] = $_POST['RaceAmerican'];
	$businessCustomerProfile['RaceHispanic'] = $_POST['RaceHispanic'];
	$businessCustomerProfile['RaceAsian'] = $_POST['RaceAsian'];
	$businessCustomerProfile['RaceHawaiian'] = $_POST['RaceHawaiian'];
	$businessCustomerProfile['RaceOther'] = $_POST['RaceOther'];
	$businessCustomerProfile['RaceUnknown'] = $_POST['RaceUnknown'];
	$businessCustomerProfile['ResidenceHomeowners'] = $_POST['ResidenceHomeowners'];
	$businessCustomerProfile['ResidenceRenters'] = $_POST['ResidenceRenters'];
	$businessCustomerProfile['ResidenceWithFamily'] = $_POST['ResidenceWithFamily'];
	$businessCustomerProfile['ResidenceVacationHome'] = $_POST['ResidenceVacationHome'];
	$businessCustomerProfile['ResidenceOthers'] = $_POST['ResidenceOthers'];
	$businessCustomerProfile['ResidenceUnknown'] = $_POST['ResidenceUnknown'];
	$businessCustomerProfile['EducationSchooling'] = $_POST['EducationSchooling'];
	$businessCustomerProfile['EducationSchoolGraduate'] = $_POST['EducationSchoolGraduate'];
	$businessCustomerProfile['EducationCollegeGraduate'] = $_POST['EducationCollegeGraduate'];
	$businessCustomerProfile['EducationMasters'] = $_POST['EducationMasters'];
	$businessCustomerProfile['EducationUnknown'] = $_POST['EducationUnknown'];
	$businessCustomerProfile['PrimaryLangEnglish'] = $_POST['PrimaryLangEnglish'];
	$businessCustomerProfile['PrimaryLangSpanish'] = $_POST['PrimaryLangSpanish'];
	$businessCustomerProfile['PrimaryLangOther'] = $_POST['PrimaryLangOther'];
	$businessCustomerProfile['PrimaryLangUnknown'] = $_POST['PrimaryLangUnknown'];
	$businessCustomerProfile['Age18_21'] = $_POST['Age18_21'];
	$businessCustomerProfile['Age22_25'] = $_POST['Age22_25'];
	$businessCustomerProfile['Age26_29'] = $_POST['Age26_29'];
	$businessCustomerProfile['Age30_39'] = $_POST['Age30_39'];
	$businessCustomerProfile['Age40_49'] = $_POST['Age40_49'];
	$businessCustomerProfile['Age50_59'] = $_POST['Age50_59'];
	$businessCustomerProfile['Age60_69'] = $_POST['Age60_69'];
	$businessCustomerProfile['AgeGreater70'] = $_POST['AgeGreater70'];
	$businessCustomerProfile['AgeUnknown'] = $_POST['AgeUnknown'];
	$businessCustomerProfile['MaritalSingle'] = $_POST['MaritalSingle'];
	$businessCustomerProfile['MaritalMarried'] = $_POST['MaritalMarried'];
	$businessCustomerProfile['MaritalUnknown'] = $_POST['MaritalUnknown'];
	$businessCustomerProfile['ChildrenNone'] = $_POST['ChildrenNone'];
	$businessCustomerProfile['Children1'] = $_POST['Children1'];
	$businessCustomerProfile['Children2'] = $_POST['Children2'];
	$businessCustomerProfile['ChildrenGreater3'] = $_POST['ChildrenGreater3'];
	$businessCustomerProfile['ChildrenUnknown'] = $_POST['ChildrenUnknown'];
	$businessCustomerProfile['ChildrenAge0_5'] = $_POST['ChildrenAge0_5'];
	$businessCustomerProfile['ChildrenAge6_15'] = $_POST['ChildrenAge6_15'];
	$businessCustomerProfile['ChildrenAge16_19'] = $_POST['ChildrenAge16_19'];
	$businessCustomerProfile['ChildrenAge19_23'] = $_POST['ChildrenAge19_23'];
	$businessCustomerProfile['ChildrenAgeAbove23ChildrenAgeAbove23'] = $_POST['ChildrenAgeAbove23ChildrenAgeAbove23'];
	$businessCustomerProfile['ChildrenAgeUnknown'] = $_POST['ChildrenAgeUnknown'];
	$businessCustomerProfile['IncomeUnder40'] = $_POST['IncomeUnder40'];
	$businessCustomerProfile['Income40_59'] = $_POST['Income40_59'];
	$businessCustomerProfile['Income60_99'] = $_POST['Income60_99'];
	$businessCustomerProfile['Income100_249'] = $_POST['Income100_249'];
	$businessCustomerProfile['IncomeAbove250'] = $_POST['IncomeAbove250'];
	$businessCustomerProfile['IncomeUnknown'] = $_POST['IncomeUnknown'];
	$businessCustomerProfile['VehicleCustomerBrings1'] = $_POST['VehicleCustomerBrings1'];
	$businessCustomerProfile['VehicleCustomerBrings2'] = $_POST['VehicleCustomerBrings2'];
	$businessCustomerProfile['VehicleCustomerBrings3'] = $_POST['VehicleCustomerBrings3'];
	$businessCustomerProfile['VehicleCustomerBrings4'] = $_POST['VehicleCustomerBrings4'];
	$businessCustomerProfile['VehicleCustomerBringsAbove5'] = $_POST['VehicleCustomerBringsAbove5'];
	$businessCustomerProfile['VehicleCustomerBringsUnknown'] = $_POST['VehicleCustomerBringsUnknown'];
	$businessCustomerProfile['CustomerPerVehicle1'] = $_POST['CustomerPerVehicle1'];
	$businessCustomerProfile['CustomerPerVehicle2'] = $_POST['CustomerPerVehicle2'];
	$businessCustomerProfile['CustomerPerVehicle3'] = $_POST['CustomerPerVehicle3'];
	$businessCustomerProfile['CustomerPerVehicle4'] = $_POST['CustomerPerVehicle4'];
	$businessCustomerProfile['CustomerPerVehicleAbove5'] = $_POST['CustomerPerVehicleAbove5'];
	$businessCustomerProfile['CustomerPerVehicleUnknown'] = $_POST['CustomerPerVehicleUnknown'];
	$businessCustomerProfile['AvgAmountSpentBelow249'] = $_POST['AvgAmountSpentBelow249'];
	$businessCustomerProfile['AvgAmountSpent250_999'] = $_POST['AvgAmountSpent250_999'];
	$businessCustomerProfile['AvgAmountSpent1000_1999'] = $_POST['AvgAmountSpent1000_1999'];
	$businessCustomerProfile['AvgAmountSpent2000_2999'] = $_POST['AvgAmountSpent2000_2999'];
	$businessCustomerProfile['AvgAmountSpent3000_3999'] = $_POST['AvgAmountSpent3000_3999'];
	$businessCustomerProfile['AvgAmountSpent4000_4999'] = $_POST['AvgAmountSpent4000_4999'];
	$businessCustomerProfile['AvgAmountSpent5000_6000'] = $_POST['AvgAmountSpent5000_6000'];
	$businessCustomerProfile['AvgAmountSpentAbove6000'] = $_POST['AvgAmountSpentAbove6000'];
	$businessCustomerProfile['AvgAmountSpentUnknown'] = $_POST['AvgAmountSpentUnknown'];
	$businessCustomerProfile['CustUseCoupons'] = $_POST['CustUseCoupons'];
	$businessCustomerProfile['CustTravelToShop'] = $_POST['CustTravelToShop'];
	$businessCustomerProfile['MonthFrequentCustomer'] = $_POST['MonthFrequentCustomer'];
	$businessCustomerProfile['MonthLessCustomer'] = $_POST['MonthLessCustomer'];
	$businessCustomerProfile['ServiceCustBuyMost'] = $_POST['ServiceCustBuyMost'];
	$businessCustomerProfile['ServiceCustBuyLeast'] = $_POST['ServiceCustBuyLeast'];
	$businessCustomerProfile['CustReferrals'] = $_POST['CustReferrals'];
	$businessCustomerProfile['AdvertisingSourceFromCust'] = $_POST['AdvertisingSourceFromCust'];
	$businessCustomerProfile['AdvertisingSourceFromNewCust'] = $_POST['AdvertisingSourceFromNewCust'];
	
	if(is_array($_POST['EconomicInfluence']))
		$EconomicInfluence=implode(',',$_POST['EconomicInfluence']);

	
	$businessCustomerProfile['EconomicInfluence'] = $EconomicInfluence;
	$businessCustomerProfile['EconomicInfluenceOther'] = $_POST['EconomicInfluenceOther'];
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_customer_profile',$businessCustomerProfile);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_customer_profile',$businessCustomerProfile,"UserId = '".$_REQUEST['id']."'");

	header('location:step5.php?id='.$_REQUEST['id']);
	exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('step4.tpl');
?>