<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Edit Market Monitoring Item');
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['LogMain'];
	$ins 						= $Gen->UpdateQry('tbl_monitoring',$PrFields,"id = '".$_REQUEST['id']."'");
	//if($ins)
	//{
		foreach($_REQUEST['Log1']['Loggrosssales'] as $k=>$v)
		{
			$PostFields = array();
			$PostFields['grosssales'] = $_REQUEST['Log1']['Loggrosssales'][$k];
			$PostFields['rocount'] = $_REQUEST['Log1']['Logrocount'][$k];
			
			$UpOverview = $Gen->UpdateQry("tbl_monitoring_items",$PostFields,"id = '".$k."'");
		}
	//}
	header("Location:".SITEURL.'/monitoring.php');
}
$Cal = $usr->GetSelWhere("tbl_monitoring","*","1=1 AND status = 'A'  AND id = '".$_REQUEST['id']."'");
//Code to get Items
$Items = $usr->GetSelWhere("tbl_monitoring_items","*","1=1 AND status = 'A'  AND mid = '".$_REQUEST['id']."' ORDER BY month");
$smarty->assign('Cal',$Cal[0]);
$smarty->assign('Items',$Items);
//echo "<pre>";print_r($Items);exit;
//$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
//$smarty->assign('months',$months);
$smarty->display('edit-monitoring.tpl');
?>