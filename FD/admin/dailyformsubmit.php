<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign('Page','Home');
$usr 		= new General;
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$chkrec	= $Gen->TotalRows("tbl_daily","shop_id = '".$_REQUEST['shopid']."' AND year = '".date("Y")."' AND month = '".date("m")."' AND day = '".$_REQUEST['day']."'");
	if($chkrec == 0)
	{
		$InsArr				= array();
		$InsArr['grosssales'] = $_REQUEST['grosssales'];
		$InsArr['repairorders'] = $_REQUEST['repairorders'];
		$InsArr['newcustomers'] = $_REQUEST['newcustomers'];
		$InsArr['actualhours'] = $_REQUEST['actualhours'];
		$InsArr['vibe'] = $_REQUEST['vibe'];
		$InsArr['activity'] = $_REQUEST['activity'];
		$InsArr['shop_id'] = $_REQUEST['shopid'];
		$InsArr['year'] = date("Y");
		$InsArr['month'] = date("m");
		$InsArr['day'] = $_REQUEST['day'];
		$ins 						= $Gen->InsertQry('tbl_daily',$InsArr);
		echo "success";
	}
	else
	{
			echo "error";
	}
}
?>