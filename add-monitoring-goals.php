<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Add Marketing Monitoring Goal');
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
		$insarr = array();
		$insarr['year'] = $_REQUEST['StartDateYear'];
		$insarr['customer_id'] = $_SESSION['User']['UID'];
		$insid = $Gen->InsertQry('tbl_monitoring_goals',$insarr);
		if($insid)
		{
			for($i=0;$i<count($_REQUEST['Loggoalsales']);$i++)
			{
					$PoFields = array();
					$PoFields['mid'] = $insid;
					$PoFields['month'] = $i+1;
					$PoFields['goalsales'] = $_REQUEST['Loggoalsales'][$i];
					//echo "<pre>";print_r($PoFields);exit;
					$insItems	= $Gen->InsertQry('tbl_monitoring_goals_items',$PoFields);
			}
		}
		header("Location:".SITEURL.'/monitoring.php');
}
$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
$smarty->assign('months',$months);
$smarty->display('add-monitoring-goals.tpl');
?>