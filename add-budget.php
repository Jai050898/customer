<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Add Marketing Budget');
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['LogMain'];
	$PrFields['customer_id'] = $_SESSION['User']['UID'];
	$ins 						= $Gen->InsertQry('tbl_budget',$PrFields);
	if($ins)
	{
		for($i=0;$i<count($_REQUEST['Log']['title']);$i++)
		{
				$PoFields = array();
				$PoFields['bid'] = $ins;
				$PoFields['cat_id'] = $_REQUEST['Log']['cat_id'][$i];
				$PoFields['title'] = $_REQUEST['Log']['title'][$i];
				$PoFields['amount'] = $_REQUEST['Log']['amount'][$i];
				$PoFields['actual_amount'] = $_REQUEST['Log']['actual_amount'][$i];
					
				$insItems	= $Gen->InsertQry('tbl_budget_items',$PoFields);
		}
	}
	header("Location:".SITEURL.'/marketing-budget.php');
}
//Code To Get Categories
$Cat = $usr->GetSelWhere("tbl_calendars_cat","id,cat_name","1=1 AND status = 'A' AND customer_id = '".$_SESSION['User']['UID']."'");
$smarty->assign('Cat',$Cat);
$smarty->display('add-budget.tpl');
?>