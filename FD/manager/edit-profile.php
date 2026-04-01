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
require_once("../includes/login_check_manager.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
	$Fields 	= "name,password,email,username,phone";
	$Where 		= "Company_ID = ".$_SESSION['Manager']['ID'];
	$user	= $usr->GetSelWhere("tbl_company",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('User',$user[0]);

if($_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	
	$UpOverview 				= $Gen->UpdateQry("tbl_company",$PrFields,"Company_ID = ".$_SESSION['Manager']['ID']);
	header("Location:".SITEURL.'/manager/edit-profile.php?task=S');
	exit;
}
$smarty->display('edit-profile.tpl');
?>