<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Add Marketing Calendar Item');
$usr 		= new General;
function dateDiff($start, $end) {
	$start_ts = strtotime($start);
	$end_ts = strtotime($end);
	$diff = $end_ts - $start_ts;
	return round(($diff+86400) / 86400);
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['LogMain'];
	$PrFields['customer_id'] = $_SESSION['User']['UID'];
	$ins 						= $Gen->InsertQry('tbl_calendars',$PrFields);
	if($ins)
	{
		for($i=0;$i<count($_REQUEST['Log']['title']);$i++)
		{
				$PoFields = array();
				$PoFields['cal_id'] = $ins;
				$PoFields['cat_id'] = $_REQUEST['Log']['cat_id'][$i];
				$PoFields['title'] = $_REQUEST['Log']['title'][$i];
				$PoFields['sdate'] = $Gen->Date_Format($_REQUEST['Log']['sdate'][$i]);
				$PoFields['edate'] = $Gen->Date_Format($_REQUEST['Log']['edate'][$i]);
				$PoFields['duration'] = dateDiff($PoFields['sdate'],$PoFields['edate']);
				$insItems	= $Gen->InsertQry('tbl_calendars_items',$PoFields);
		}
	}
	header("Location:".SITEURL.'/calendars.php');
}
//Code To Get Categories
$Cat = $usr->GetSelWhere("tbl_calendars_cat","id,cat_name","1=1 AND status = 'A' AND customer_id = '".$_SESSION['User']['UID']."'");
$smarty->assign('Cat',$Cat);
$smarty->display('add-cal.tpl');
?>