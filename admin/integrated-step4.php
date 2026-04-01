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

$stuffDetailarr = $usr->GetAllWhere("tbl_survey_stuff","UserId = '".$_REQUEST['id']."'");
if(isset($stuffDetailarr) && !empty($stuffDetailarr))
{
	$stuffDetail = $stuffDetailarr[0];
	$smarty->assign('stuffDetail',$stuffDetail);
	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;
	
	$stuff = array();
	$stuff['UserId'] = $_REQUEST['id'];
	$stuff['UseForEmpRecruiting'] = $_POST['UseForEmpRecruiting'];
	$stuff['CurrentJobs'] = $_POST['CurrentJobs'];
	$stuff['LaborRate'] = $_POST['LaborRate'];
	$stuff['TechnicianNumber'] = $_POST['TechnicianNumber'];
	
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_stuff',$stuff);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_stuff',$stuff,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step5.php?id='.$_REQUEST['id']);
		exit;

}	

$allEmployeesarr = $usr->GetAllWhere("tbl_survey_employee","UserId = '".$_SESSION['User']['UID']."'");
$smarty->assign("allEmployees",$allEmployeesarr);

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step4.tpl');
?>