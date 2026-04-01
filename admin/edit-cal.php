<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
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
	$ins 						= $Gen->UpdateQry('tbl_calendars',$PrFields,"id = '".$_REQUEST['id']."'");
	if($ins)
	{
		for($i=0;$i<count($_REQUEST['Log']['title']);$i++)
		{
			if($_REQUEST['Log']['title'][$i] != "")
			{
				$PoFields = array();
				$PoFields['cal_id'] = $_REQUEST['id'];
				$PoFields['cat_id'] = $_REQUEST['Log']['cat_id'][$i];
				$PoFields['title'] = $_REQUEST['Log']['title'][$i];
				$PoFields['sdate'] = $Gen->Date_Format($_REQUEST['Log']['sdate'][$i]);
				$PoFields['edate'] = $Gen->Date_Format($_REQUEST['Log']['edate'][$i]);
				$PoFields['duration'] = dateDiff($PoFields['sdate'],$PoFields['edate']);
				$insItems	= $Gen->InsertQry('tbl_calendars_items',$PoFields);
			}
		}
		foreach($_REQUEST['Log1']['title'] as $k=>$v)
		{
			$PostFields = array();
			$PostFields['cat_id'] = $_REQUEST['Log1']['cat_id'][$k];
			$PostFields['title'] = $_REQUEST['Log1']['title'][$k];
			$PostFields['sdate'] = $Gen->Date_Format($_REQUEST['Log1']['sdate'][$k]);
			$PostFields['edate'] = $Gen->Date_Format($_REQUEST['Log1']['edate'][$k]);
			$PostFields['duration'] = dateDiff($PostFields['sdate'],$PostFields['edate']);
			$UpOverview = $Gen->UpdateQry("tbl_calendars_items",$PostFields,"id = '".$k."'");
			if($v == "")
			{
				$del = $Gen->DeleteQry('tbl_calendars_items',"id = '".$k."'");
			}
		}
	}
	header("Location:".SITEURL.'/admin/cal-user.php?user_id='.$_REQUEST['user_id']);
}
//Code To Get Categories
$Cat = $usr->GetSelWhere("tbl_calendars_cat","id,cat_name","1=1 AND status = 'A' AND customer_id = '".$_REQUEST['user_id']."'");
$smarty->assign('Cat',$Cat);
//Code To Get Caleder
$Cal = $usr->GetSelWhere("tbl_calendars","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
//Code to get Items
$Items = $usr->GetSelWhere("tbl_calendars_items","*","1=1 AND status = 'A'  AND cal_id = '".$_REQUEST['id']."'");
$smarty->assign('Cal',$Cal[0]);
$smarty->assign('Items',$Items);
//echo "<pre>";print_r($Cal);print_r($Items);exit;
$smarty->display('edit-cal.tpl');
?>