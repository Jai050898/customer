<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Edit Marketing Budget');
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['LogMain'];
	$ins 						= $Gen->UpdateQry('tbl_budget',$PrFields,"id = '".$_REQUEST['id']."'");
	if($ins)
	{
		for($i=0;$i<count($_REQUEST['Log']['title']);$i++)
		{
			if($_REQUEST['Log']['title'][$i] != "")
			{
				$PoFields = array();
				$PoFields['bid'] = $_REQUEST['id'];
				$PoFields['cat_id'] = $_REQUEST['Log']['cat_id'][$i];
				$PoFields['title'] = $_REQUEST['Log']['title'][$i];
				$PoFields['amount'] = $_REQUEST['Log']['amount'][$i];
				$PoFields['actual_amount'] = $_REQUEST['Log']['actual_amount'][$i];
				
				$insItems	= $Gen->InsertQry('tbl_budget_items',$PoFields);
			}
		}
		foreach($_REQUEST['Log1']['title'] as $k=>$v)
		{
			$PostFields = array();
			$PostFields['cat_id'] = $_REQUEST['Log1']['cat_id'][$k];
			$PostFields['title'] = $_REQUEST['Log1']['title'][$k];
			$PostFields['amount'] = $_REQUEST['Log1']['amount'][$k];
			$PostFields['actual_amount'] = $_REQUEST['Log1']['actual_amount'][$k];
			
			$UpOverview = $Gen->UpdateQry("tbl_budget_items",$PostFields,"id = '".$k."'");
			if($v == "")
			{
				$del = $Gen->DeleteQry('tbl_budget_items',"id = '".$k."'");
			}
		}
	}
	header("Location:".SITEURL.'/marketing-budget.php');
}
//Code To Get Categories
$Cat = $usr->GetSelWhere("tbl_calendars_cat","id,cat_name","1=1 AND status = 'A' AND customer_id = '".$_SESSION['User']['UID']."'");
$smarty->assign('Cat',$Cat);
//Code To Get Caleder
$Cal = $usr->GetSelWhere("tbl_budget","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
//Code to get Items
$Items = $usr->GetSelWhere("tbl_budget_items","*","1=1 AND status = 'A'  AND bid = '".$_REQUEST['id']."'");
$smarty->assign('Cal',$Cal[0]);
$smarty->assign('Items',$Items);
//echo "<pre>";print_r($Cal);print_r($Items);exit;
$smarty->display('edit-budget.tpl');
?>