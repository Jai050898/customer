<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "name,password,email,username,phone";
	$Where 		= "Company_ID = ".$_REQUEST['user_id'];
	$user	= $usr->GetSelWhere("tbl_company",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('User',$user[0]);
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	$error = "";
	$PrFields = $_REQUEST['Log'];
	$chkemail	= $usr->TotalRows("tbl_company","email = '".$PrFields['email']."' AND Company_ID != '".$_REQUEST['user_id']."'");
	if($chkemail > 0)
	{
		$error = "Email Already Exist";
	}
	if($error == "")
	{
		$chkuser	= $usr->TotalRows("tbl_company","username = '".$PrFields['username']."' AND Company_ID != '".$_REQUEST['user_id']."'");
		if($chkuser > 0)
		{
			$error = "User Name Already Exist";
		}
	}
	if($error == "")
	{
		$UpOverview 				= $Gen->UpdateQry("tbl_company",$PrFields,"Company_ID = ".$_REQUEST['user_id']);
		header("Location:".SITEURL.'/admin/manage-company.php');
		exit;
	}
	else
	{
		$smarty->assign("error",$error);
		$smarty->assign('User',$PrFields);
	}
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post' && $_REQUEST['user_id'] == "")
{
	$error = "";
	$PrFields = $_REQUEST['Log'];
	
	$chkemail	= $usr->TotalRows("tbl_company","email = '".$PrFields['email']."'");
	if($chkemail > 0)
	{
		$error = "Email Already Exist";
	}
	$chkuser	= $usr->TotalRows("tbl_company","username = '".$PrFields['username']."'");
	if($chkuser > 0)
	{
		$error = "User Name Already Exist";
	}
	if($error == "")
	{
		$ins 						= $Gen->InsertQry('tbl_company',$PrFields);
		header("Location:".SITEURL.'/admin/manage-company.php');
	}
	else
	{
		$smarty->assign("error",$error);
		$smarty->assign('User',$PrFields);
	}
}
$smarty->display('add-company.tpl');
?>