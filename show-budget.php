<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Show Marketing Budget');
$usr 		= new General;
$id=  $_REQUEST['id'];
$Cal = $usr->GetSelWhere("tbl_budget","*","1=1 AND status = 'A'  AND id = '".$id."'");
for($j=0;$j<count($Cal);$j++)
{
	$amountarr	= $usr->GetSelWhere("tbl_budget_items","SUM(amount) as amount","bid = '".$Cal[$j]['id']."' AND status = 'A'");
	$Cal[$j]['amount'] = $amountarr[0]['amount'];
	$per = ($Cal[$j]['amount']/$Cal[$j]['gsales'])*100;  
	$Cal[$j]['per'] = number_format($per, 2, '.', ''); 
	$actualamountarr	= $usr->GetSelWhere("tbl_budget_items","SUM(actual_amount) as actualamount","bid = '".$Cal[$j]['id']."' AND status = 'A'");
	$Cal[$j]['actualamount'] = $actualamountarr[0]['actualamount'];
	$actpr = ($Cal[$j]['actualamount']/$Cal[$j]['gsales'])*100;
	$Cal[$j]['actper'] = number_format($actpr, 2, '.', '');  
}

$Cat = $usr->GetSelWhere("tbl_calendars_cat","id,cat_name","1=1 AND status = 'A' AND customer_id = '".$_SESSION['User']['UID']."'");
for($i=0;$i<count($Cat);$i++)
{
	$Items = $usr->GetSelWhere("tbl_budget_items","*","1=1 AND status = 'A'  AND bid = '".$id."' AND cat_id = '".$Cat[$i]['id']."'");
	if(!empty($Items))
		$Cat[$i]['Items'] = $Items;
	//else
		//unset($Cat[$i]);
}
//echo "<pre>";print_r($Cal);print_r($Cat);exit;
$smarty->assign('Cal',$Cal[0]);
$smarty->assign('Item',$Cat);
$smarty->display('show-budget.tpl');
?>