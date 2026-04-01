<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    /********** BY CUSTOMER ZIPCODES ***********/
    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    // get Vehicles of Logged in Company
    $custAry = array();
    $Where1 = $Where." AND cust_id != '' AND cust_id != '0'";
    $custAry = $usr->GetSelWhere("XML_customers","cust_id, fullname",$Where1);
    
    $custArray = array();
    foreach($custAry as $cust) {
        $custArray[] = $cust['cust_id'];
    }
    $custIds = implode(',', $custArray);
    
    $customerArray = array();
    foreach($custAry as $key=>$customer) {
        
        $totalVisitsYear = 0;
        $totalVisitsAll = 0;
        
        $customerArray[$key]['fullname'] = $customer['fullname'];
        // Get details from RO table
        $Where2     = $Where." AND cust_id IN (".$customer['cust_id'].") AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
        $customerArray[$key]['yearTotal'] = $usr->TotalRows("XML_ro",$Where2);

        $Where3     = $Where." AND cust_id IN (".$customer['cust_id'].") AND status = 'A'";
        $customerArray[$key]['allTotal'] = $usr->TotalRows("XML_ro",$Where3);

    }
    
    
    $smarty->assign('customer', $customerArray);
    $smarty->display('manage-customer-visit-reports.tpl');
?>