<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
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
	//echo "<pre>";print_r($_REQUEST);exit;
		for($i=0;$i<count($_REQUEST['Log']['sdate']);$i++)
		{
			if($_REQUEST['Log']['sdate'][$i] != "")
			{
				$PoFields = array();
				$PoFields['cal_id'] = $_REQUEST['id'];
				$PoFields['sdate'] = $Gen->Date_Format($_REQUEST['Log']['sdate'][$i]);
				$PoFields['edate'] = $Gen->Date_Format($_REQUEST['Log']['edate'][$i]);
				$PoFields['duration'] = dateDiff($PoFields['sdate'],$PoFields['edate']);
				$insItems	= $Gen->InsertQry('tbl_calendars_slow_periods',$PoFields);
			}
		}
		foreach($_REQUEST['Log1']['sdate'] as $k=>$v)
		{
			$PostFields = array();
			$PostFields['sdate'] = $Gen->Date_Format($_REQUEST['Log1']['sdate'][$k]);
			$PostFields['edate'] = $Gen->Date_Format($_REQUEST['Log1']['edate'][$k]);
			$PostFields['duration'] = dateDiff($PostFields['sdate'],$PostFields['edate']);
			$UpOverview = $Gen->UpdateQry("tbl_calendars_slow_periods",$PostFields,"id = '".$k."'");
			if($v == "")
			{
				$del = $Gen->DeleteQry('tbl_calendars_slow_periods',"id = '".$k."'");
			}
		}
    	header("Location:".SITEURL.'/calendars.php');
}
//Code To Get Caleder
$Cal = $usr->GetSelWhere("tbl_calendars","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
$smarty->assign('Cal',$Cal[0]);
//Code to get Items
$Items = $usr->GetSelWhere("tbl_calendars_slow_periods","*","1=1 AND status = 'A'  AND cal_id = '".$_REQUEST['id']."' ORDER BY sdate DESC");
$smarty->assign('Items',$Items);
//echo "<pre>";print_r($Cal);print_r($Items);exit;
$smarty->display('slow-periods.tpl');
?>