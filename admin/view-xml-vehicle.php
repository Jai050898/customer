<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
$User = array();

if(isset($_REQUEST['vid']) && $_REQUEST['vid'] != "")
{
	$Table		= "XML_vehicle ";
	$Fields		= "*";
	$Where 		= "vehicle_id = '".$_REQUEST['vid']."'";
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	//echo '<pre>';print_r($User);exit;
}
if(count($User) > 0){
    $smarty->assign('User',$User[0]);
} else {
    $smarty->assign('User',$User);
}
$smarty->display('view-xml-vehicle.tpl');
?>