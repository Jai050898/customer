<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$usr 		= new General;
//Code To Get Caleder
$Cal = $usr->GetSelWhere("tbl_calendars","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
//Code to get Items
$Items = $usr->GetSelWhere("tbl_calendars_items","*","1=1 AND status = 'A'  AND cal_id = '".$_REQUEST['id']."'");
//echo "<pre>";print_r($Items);exit;
$PrFields = array();
$PrFields['name'] = "Copy of ".$Cal[0]['name'];
$PrFields['customer_id'] = $_SESSION['User']['UID'];
//echo "<pre>";print_r($PrFields);exit;
$ins 						= $Gen->InsertQry('tbl_calendars',$PrFields);
if($ins)
{
	for($i=0;$i<count($Items);$i++)
	{
		$PrFieldsItems = array();
		$PrFieldsItems['cal_id'] = $ins;
		$PrFieldsItems['cat_id'] = $Items[$i]['cat_id'];
		$PrFieldsItems['title'] = $Items[$i]['title'];
		$PrFieldsItems['sdate'] = $Items[$i]['sdate'];
		$PrFieldsItems['edate'] = $Items[$i]['edate'];
		$PrFieldsItems['duration'] = $Items[$i]['duration'];
		$insItems	= $Gen->InsertQry('tbl_calendars_items',$PrFieldsItems);
	}
}
header("Location:".SITEURL.'/calendars.php');
?>