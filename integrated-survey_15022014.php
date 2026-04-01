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
$Page = 'account';
$smarty->assign('Page',$Page);
$Page = 'account';
$smarty->assign('breadcrumb','Integrated Survey');
$usr 		= new General;
if(isset($_SESSION['User']['issurveycompleted']) && $_SESSION['User']['issurveycompleted'] == "Y")
{
	$success="You have already submitted your survey!!!";
}
if(isset($_POST['btnSubmit']))
{
	if($usr->IsIntegratedSurveyCompleted())
	{
		$updtarr = array();
		$updtarr['issurveycompleted'] = "Y";
		$updtarr['lastsurveydatemodified'] = date("Y-m-d H:i:s");
		$Result 			= $Gen->UpdateQry('tbl_users',$updtarr," user_id = ".$_SESSION['User']['UID']);
		$success="Thanks for submitting the survey. We'll review it soon";
		$_SESSION['User']['issurveycompleted']="Y";
	}
	else
		$success='You are yet to complete all the sections of the survey. Please do it before submitting it.';
}
if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-survey.tpl');
?>