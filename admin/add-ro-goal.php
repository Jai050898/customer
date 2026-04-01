<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
		for($i=0;$i<count($_REQUEST['Lognew']);$i++)
		{
				$PoFields = array();
				$PoFields['customer_id'] = $_REQUEST['user_id'];
				$PoFields['year'] = $_REQUEST['LogMain']['year'];
				$PoFields['month'] = $i+1;
				$PoFields['newval'] = $_REQUEST['Lognew'][$i];
				$PoFields['repeatval'] = $_REQUEST['Logrepeat'][$i];
				//echo "<pre>";print_r($PoFields);exit;
				$insItems	= $Gen->InsertQry('tbl_ro_goal',$PoFields);
		}

	header("Location:".SITEURL.'/admin/ro-goal.php?user_id='.$_REQUEST['user_id']);
}
$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
$smarty->assign('months',$months);
$smarty->display('add-ro-goal.tpl');
?>