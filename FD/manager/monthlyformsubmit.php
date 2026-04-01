<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$smarty->assign('Page','Home');
$usr 		= new General;
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$chkrec	= $Gen->TotalRows("tbl_monthly","shop_id = '".$_REQUEST['shopid']."' AND year = '".date("Y")."' AND month = '".$_REQUEST['month']."'");
	if($chkrec == 0)
	{
		$InsArr				= array();
		$InsArr['grosssales'] = $_REQUEST['grosssales'];
		$InsArr['repairorders'] = $_REQUEST['repairorders'];
		$InsArr['newcustomers'] = $_REQUEST['newcustomers'];
		$InsArr['actualhours'] = $_REQUEST['actualhours'];
		$InsArr['facebookfans'] = $_REQUEST['facebookfans'];
		$InsArr['googleplususers'] = $_REQUEST['googleplususers'];
		$InsArr['vibe'] = $_REQUEST['vibe'];
		$InsArr['activity'] = $_REQUEST['activity'];
		$InsArr['shop_id'] = $_REQUEST['shopid'];
		$InsArr['year'] = date("Y");
		$InsArr['month'] = $_REQUEST['month'];
		$InsArr['daysopen'] = $_REQUEST['daysopen'];
		
		$ins 						= $Gen->InsertQry('tbl_monthly',$InsArr);
		echo "success";
	}
	else
	{
			echo "error";
	}
}
?>