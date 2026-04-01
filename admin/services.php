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

$servicesInfoarr = $usr->GetAllWhere("web_tbl_services","UserId = '".$_REQUEST['id']."'");
if(isset($servicesInfoarr) && !empty($servicesInfoarr))
{
	$servicesInfo = $servicesInfoarr[0];
	$smarty->assign('servicesInfo',$servicesInfo);

	$fleetSelected=explode(',',$servicesInfo['FleetServices']);
	$smarty->assign('fleetSelected', $fleetSelected);

	$packageSelected=explode(',',$servicesInfo['SpecialServicePackage']);
	$smarty->assign('packageSelected', $packageSelected);

	
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
	
	if(is_array($_POST['FleetServices']))
		$FleetServices=implode(',',$_POST['FleetServices']);

	if(is_array($_POST['SpecialServicePackage']))

		$SpecialServicePackage=implode(',',$_POST['SpecialServicePackage']);

	#set the values
	$services = array();
	$services['UserId'] = $_REQUEST['id'];
	$services['MenuServices'] = $_POST['MenuServices'];
	$services['SpecializeStyle'] = $_POST['SpecializeStyle'];
	$services['SpecialtyServices'] = $_POST['SpecialtyServices'];
	$services['KnownForSpecial'] = $_POST['KnownForSpecial'];
	$services['FleetServices'] = $FleetServices;
	$services['FleetServicesOther'] = $_POST['FleetServicesOther'];
	$services['ServiceWraps'] = $_POST['ServiceWraps'];
	$services['SpecialServicePackage'] = $SpecialServicePackage;
	$services['SpecialServicePackageOther'] = $_POST['SpecialServicePackageOther'];
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_services',$services);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_services',$services,"UserId = '".$_REQUEST['id']."'");

		header('location:competitiveAdvantages.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('services.tpl');
?>