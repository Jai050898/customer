<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['Shop_ID']) && $_REQUEST['Shop_ID'] != "")
{
	$Fields 	= "name,password,email,user_name,phone,state,country,city,zip_code,address,website,shop_email,opening_date";
	$Where 		= "Shop_ID = ".$_REQUEST['Shop_ID'];
	$user	= $usr->GetSelWhere("tbl_shop",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('Shop',$user[0]);
	//Code to get Countries
	$States	= $Gen->GetSelWhere('tbl_states','State_ID,State_Name'," Country_Code = '".$user[0]['country']."' ORDER BY State_ID");
	//echo "<pre>";print_r($States);exit;
	$smarty->assign('States',$States);
}
if(isset($_REQUEST['Shop_ID']) && $_REQUEST['Shop_ID'] != "" && $_REQUEST['hid_key']=='Post')
{
	$error = "";
	$PrFields = $_REQUEST['Log'];
	$chkemail	= $usr->TotalRows("tbl_shop","email = '".$PrFields['email']."' AND Shop_ID != '".$_REQUEST['Shop_ID']."'");
	if($chkemail > 0)
	{
		$error = "Email Already Exist";
	}
	if($error == "")
	{
		$chkuser	= $usr->TotalRows("tbl_shop","user_name = '".$PrFields['user_name']."' AND Shop_ID != '".$_REQUEST['Shop_ID']."'");
		if($chkuser > 0)
		{
			$error = "User Name Already Exist";
		}
	}
	if($error == "")
	{
		$PrFields['opening_date']	= $Gen->Date_Format($_REQUEST['Log']['opening_date']);
		$PrFields['state'] = $_REQUEST['state'][0];
		//echo "<pre>";print_r($PrFields);exit;
		$UpOverview 				= $Gen->UpdateQry("tbl_shop",$PrFields,"Shop_ID = ".$_REQUEST['Shop_ID']);
		header("Location:".SITEURL.'/manager/manage-shops.php');
		exit;
	}
	else
	{
		$smarty->assign("error",$error);
		$States	= $Gen->GetSelWhere('tbl_states','State_ID,State_Name'," Country_Code = '".$PrFields['country']."' ORDER BY State_ID");
		$smarty->assign('States',$States);
		$PrFields['state'] = $_REQUEST['state'][0];
		$smarty->assign('Shop',$PrFields);
	}
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post' && $_REQUEST['Shop_ID'] == "")
{
	$error = "";
	$PrFields = $_REQUEST['Log'];
	$chkemail	= $usr->TotalRows("tbl_shop","email = '".$PrFields['email']."'");
	if($chkemail > 0)
	{
		$error = "Email Already Exist";
	}
	$chkuser	= $usr->TotalRows("tbl_shop","user_name = '".$PrFields['user_name']."'");
	if($chkuser > 0)
	{
		$error = "User Name Already Exist";
	}
	if($error == "")
	{
		$PrFields['opening_date']	= $Gen->Date_Format($_REQUEST['Log']['opening_date']);
		$PrFields['Company_ID'] = $_SESSION['Manager']['ID'];
		$PrFields['state'] = $_REQUEST['state'][0];
		$ins 						= $Gen->InsertQry('tbl_shop',$PrFields);
		header("Location:".SITEURL.'/manager/manage-shops.php');
	}
	else
	{
		$smarty->assign("error",$error);
		$States	= $Gen->GetSelWhere('tbl_states','State_ID,State_Name'," Country_Code = '".$PrFields['country']."' ORDER BY State_ID");
		$smarty->assign('States',$States);
		$PrFields['state'] = $_REQUEST['state'][0];
		$smarty->assign('Shop',$PrFields);
	}
}
//Code to get Countries
$Country	= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_ID");
$smarty->assign('country',$Country);

$smarty->display('add-shop.tpl');
?>