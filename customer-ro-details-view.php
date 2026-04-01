<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");

    $usr = new General;
    $smarty->assign("Page","customers");
    $smarty->assign('breadcrumb','View Customer RO Details');
    
    $RODetails = array();
    
    /*****section to get the details from data base*********************/
    if(isset($_REQUEST['id']) && $_REQUEST['id'] != "") {       
        // RO Get All RO Details
        $tbl = "XML_ro_details";
        $fields = "*";
        $Where1 = " ro_id = '".$_REQUEST['id']."'";
        $RODetails = $usr->GetSelWhere($tbl,$fields,$Where1);
    }
    if($_SERVER['REMOTE_ADDR'] == '182.72.88.156'){
        //echo "<prE>".$Where1;print_r($RODetails);exit;
    }
    $smarty->assign('RODetails',$RODetails);
    $smarty->display('customer-ro-details-view.tpl');
?>