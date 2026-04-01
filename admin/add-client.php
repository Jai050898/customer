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
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo '<pre>';print_r($_REQUEST);exit;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['client_id']) && $_REQUEST['client_id'] != "")
{
	$Fields 	= "company_name,first_name,last_name,password,email,phone,state,country,city,zipcode,address";
	$Where 		= "client_id = ".base64_decode($_REQUEST['client_id']);
	$Clients	= $usr->GetSelWhere("tbl_clients",$Fields,$Where);
	//echo '<pre>';print_r($Clients);exit;
	$smarty->assign('Clients',$Clients[0]);
	//Code to get Countries
	$States		= $Gen->GetSelWhere('tbl_states','State_ID,State_Name'," Country_Code = '".$Clients[0]['country']."' ORDER BY State_ID");
	//echo "<pre>";print_r($States);exit;
	$smarty->assign('States',$States);
}
if(isset($_REQUEST['client_id']) && $_REQUEST['client_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields 			= $_REQUEST['Log'];
	$PrFields['state'] 	= $_REQUEST['state'][0];
	$UpOverview 		= $Gen->UpdateQry("tbl_clients",$PrFields,"client_id = ".base64_decode($_REQUEST['client_id']));
	header("Location:".SITEURL.'/admin/manage-clients.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields			= $_REQUEST['Log'];
	$PrFields['state'] 	= $_REQUEST['state'][0];
	$ins 				= $Gen->InsertQry('tbl_clients',$PrFields);
	header("Location:".SITEURL.'/admin/manage-clients.php');
}
//Code to get Countries
$Country			= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_Name");
$smarty->assign('country',$Country);

$smarty->display('add-client.tpl');
?>