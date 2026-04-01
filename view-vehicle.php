<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr 		= new General;
    $smarty->assign("Page","customers");
    $User = array();
    $smarty->assign('User',$User);
    
    /*****section to get the details from data base*********************/
    if(isset($_REQUEST['vid']) && $_REQUEST['vid'] != "") {
            $Table		= "XML_vehicle";
            $Fields		= "*";
            $Where 		= "vehicle_id = ".$_REQUEST['vid'];
            $User	= $usr->GetSelWhere($Table,$Fields,$Where);
            //echo '<pre>';print_r($User);exit;
            $smarty->assign('User',$User[0]);
    }
    $smarty->display('view-vehicle.tpl');
?>