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

$notorietyInfoarr = $usr->GetAllWhere("tbl_survey_notoriety","UserId = '".$_REQUEST['id']."'");
if(isset($notorietyInfoarr) && !empty($notorietyInfoarr))
{
	$notorietyInfo = $notorietyInfoarr[0];
	$smarty->assign('notorietyInfo',$notorietyInfo);

	$eventsSelected=explode(',',$notorietyInfo['SpecialEvents']);
	$smarty->assign('eventsSelected', $eventsSelected);

	$activitiesSelected=explode(',',$notorietyInfo['CommunityActivities']);
	$smarty->assign('activitiesSelected', $activitiesSelected);

	
	$smarty->assign('isNew', false);
}
else
{
	$smarty->assign('isNew', true);
}

if(isset($_POST['btnSubmit']))
{
	$insarr = $_REQUEST;

	if(is_array($_POST['SpecialEvents']))
		$SpecialEvents=implode(',',$_POST['SpecialEvents']);
	
	if(is_array($_POST['CommunityActivities']))
		$CommunityActivities=implode(',',$_POST['CommunityActivities']);

	$notoriety = array();
	$notoriety['UserId'] = $_REQUEST['id'];
	$notoriety['AwardNotoriety'] = $_POST['AwardNotoriety'];
	$notoriety['GeneralBusinessAssocation'] = $_POST['GeneralBusinessAssocation'];
	$notoriety['SpecialEvents'] = $SpecialEvents;
	$notoriety['SpecialEventsOther'] = $_POST['SpecialEventsOther'];
	$notoriety['CommunityActivities'] = $CommunityActivities;
	$notoriety['CommunityActivitiesOther'] = $_POST['CommunityActivitiesOther'];
	$notoriety['AreaKnownFor'] = $_POST['AreaKnownFor'];
	$notoriety['LocationSpecial'] = $_POST['LocationSpecial'];
	$notoriety['LocalSportsTeam'] = $_POST['LocalSportsTeam'];
	
		
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('tbl_survey_notoriety',$notoriety);	
	}
	else
		$ins = $Gen->UpdateQry('tbl_survey_notoriety',$notoriety,"UserId = '".$_REQUEST['id']."'");

		header('location:integrated-step8.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('integrated-step7.tpl');
?>