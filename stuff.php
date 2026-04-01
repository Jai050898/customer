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
$smarty->assign('breadcrumb','Website Survey- About the Stuff');
$usr 		= new General;

$stuffDetailarr = $usr->GetAllWhere("web_tbl_stuff","UserId = '".$_SESSION['User']['UID']."'");
if(isset($stuffDetailarr) && !empty($stuffDetailarr))
{
	$stuffDetail = $stuffDetailarr[0];
	$smarty->assign('stuffDetail',$stuffDetail);
	//echo "<pre>";print_r($stuffDetail);exit;
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
	
	$stuff = array();
	$stuff['UserId'] = $_SESSION['User']['UID'];
	$stuff['UseForEmpRecruiting'] =$_POST['UseForEmpRecruiting'];
	$stuff['CurrentJobs'] = $_POST['CurrentJobs'];
	
	//echo "<pre>";print_r($stuff);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_stuff',$stuff);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_stuff',$stuff,"UserId = '".$_SESSION['User']['UID']."'");

		header('location:branding.php');
		exit;

}	
$allEmployeesarr = $usr->GetAllWhere("web_tbl_employee","UserId = '".$_SESSION['User']['UID']."'");
$smarty->assign("allEmployees",$allEmployeesarr);

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('stuff.tpl');
?>