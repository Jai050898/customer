<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
$smarty->assign("Page","customers");
/*****section to get the details from data base*********************/
if(isset($_REQUEST['vid']) && $_REQUEST['vid'] != "")
{
	$Table		= "MIS_vehicle";
	$Fields		= "*";
	$Where 		= "MIS_Vehicle_ID = ".$_REQUEST['vid'];
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	//echo '<pre>';print_r($User);exit;
	$smarty->assign('User',$User[0]);
}
$smarty->display('view-mis-vehicle.tpl');
?>