<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['portfolio_id']) && $_REQUEST['portfolio_id'] != "")
{
	$Fields 	= "*";
	$Where 		= "id = ".$_REQUEST['portfolio_id'];
	$portfolio	= $usr->GetSelWhere("tbl_portfolio_requests",$Fields,$Where);
	$smarty->assign('Portfolio',$portfolio[0]);
}
if(isset($_REQUEST['portfolio_id']) && $_REQUEST['portfolio_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $Gen->UpdateQry("tbl_portfolio_requests",$PrFields,"id = ".$_REQUEST['portfolio_id']);
	header("Location:".SITEURL.'/admin/manage-portfolio-requests.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	$PrFields = $_REQUEST['Log'];
	$PrFields['request_date'] = date("Y-m-d H:i:s");
	$ins 						= $Gen->InsertQry('tbl_portfolio_requests',$PrFields);
	header("Location:".SITEURL.'/admin/manage-portfolio-requests.php');
}

$smarty->display('add-portfolio-request.tpl');
?>