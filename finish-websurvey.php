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
$smarty->assign('Page','MyAccount');
$usr 		= new General;
if(isset($_SESSION['User']['iswebsurveycompleted']) && $_SESSION['User']['iswebsurveycompleted'] == "Y")
{
	$success="You have already submitted your survey!!!";
}

if(isset($_POST['btnSubmit']))
{
	if($usr->IsWebSurveyCompleted())
	{
		$updtarr = array();
		$updtarr['iswebsurveycompleted'] = "Y";
		$updtarr['lastwebdatemodified'] = date("Y-m-d H:i:s");
		$Result 			= $Gen->UpdateQry('tbl_users',$updtarr," user_id = ".$_SESSION['User']['UID']);
		$success="Thanks for submitting the survey. We'll review it soon";
		$_SESSION['User']['iswebsurveycompleted']="Y";
		
		$subject	= "Web Survey Submitted!!!";
		$result		= $_SESSION['User']['user_name'].' has submitted his web survey sucessfully.' ;
		$getdet 	= $usr->adminmail(ADMINMAIL,$_SESSION['User']['Email'],$subject,$_SESSION['User']['user_name'],$result);
	}
	else
		$success='You are yet to complete all the sections of the survey. Please do it before submitting it.';
}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('finish-websurvey.tpl');
?>