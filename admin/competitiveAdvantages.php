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

$competitiveAdvantagesInfoarr = $usr->GetAllWhere("web_tbl_competitive_advantages","UserId = '".$_REQUEST['id']."'");
if(isset($competitiveAdvantagesInfoarr) && !empty($competitiveAdvantagesInfoarr))
{
	$competitiveAdvantagesInfo = $competitiveAdvantagesInfoarr[0];
	$smarty->assign('competitiveAdvantagesInfo',$competitiveAdvantagesInfo);

	$advantageSelected=explode(',',$competitiveAdvantagesInfo['CompetitiveAdvantages']);
	$smarty->assign('advantageSelected', $advantageSelected);

	$wrAdvantageSelected=explode(',',$competitiveAdvantagesInfo['CompetitiveAdvantagesWR']);
	$smarty->assign('wrAdvantageSelected', $wrAdvantageSelected);

	
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
	
	if(is_array($_POST['CompetitiveAdvantages']))
		$CompetitiveAdvantages=implode(',',$_POST['CompetitiveAdvantages']);

	if(is_array($_POST['CompetitiveAdvantagesWR']))
		$CompetitiveAdvantagesWR=implode(',',$_POST['CompetitiveAdvantagesWR']);

	#set the values
	$competitiveAdvantages = array();
	$competitiveAdvantages['UserId'] = $_REQUEST['id'];
	$competitiveAdvantages['CompShuttleService'] = $_POST['CompShuttleService'];
	$competitiveAdvantages['CompetitiveAdvantages'] = $CompetitiveAdvantages;
	$competitiveAdvantages['CompetitiveAdvantagesWR'] = $CompetitiveAdvantagesWR;
	$competitiveAdvantages['CompetitiveAdvantagesOther'] = $_POST['CompetitiveAdvantagesOther'];
	
	//echo "<pre>";print_r($insarr);exit;
	if($_POST['isNew'])
	{
		$ins 	= $Gen->InsertQry('web_tbl_competitive_advantages',$competitiveAdvantages);	
	}
	else
		$ins = $Gen->UpdateQry('web_tbl_competitive_advantages',$competitiveAdvantages,"UserId = '".$_REQUEST['id']."'");

		header('location:marketing.php?id='.$_REQUEST['id']);
		exit;

}	

if(isset($success))
$smarty->assign("Successmssage",$success);

$smarty->display('competitiveAdvantages.tpl');
?>