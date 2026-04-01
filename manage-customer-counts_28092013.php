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
        
        // Last ^ Months
        $customerArray[$key]['fullname'] = $customer['fullname'];
        // Get details from RO table
        $Where2     = $Where." AND cust_id IN (".$customer['cust_id'].") AND transaction_date > DATE_SUB(now(), INTERVAL 6 MONTH) AND status = 'A'";
        $customerArray[$key]['6MonthTotal'] = $usr->TotalRows("XML_ro",$Where2);
        
        $Where3     = $Where." AND cust_id IN (".$customer['cust_id'].") AND (transaction_date BETWEEN (CURRENT_DATE() - INTERVAL 12 MONTH) AND (CURRENT_DATE() - INTERVAL 6 MONTH)) AND status = 'A'";
        $customerArray[$key]['6to12MonthTotal'] = $usr->TotalRows("XML_ro",$Where3);
        
        $Where4     = $Where." AND cust_id IN (".$customer['cust_id'].") AND (transaction_date BETWEEN (CURRENT_DATE() - INTERVAL 18 MONTH) AND (CURRENT_DATE() - INTERVAL 12 MONTH)) AND status = 'A'";
        $customerArray[$key]['12to18MonthTotal'] = $usr->TotalRows("XML_ro",$Where4);
        
        $Where5     = $Where." AND cust_id IN (".$customer['cust_id'].") AND (transaction_date BETWEEN (CURRENT_DATE() - INTERVAL 24 MONTH) AND (CURRENT_DATE() - INTERVAL 18 MONTH)) AND status = 'A'";
        $customerArray[$key]['18to24MonthTotal'] = $usr->TotalRows("XML_ro",$Where5);
        
        $Where6     = $Where." AND cust_id IN (".$customer['cust_id'].") AND (transaction_date BETWEEN (CURRENT_DATE() - INTERVAL 36 MONTH) AND (CURRENT_DATE() - INTERVAL 24 MONTH)) AND status = 'A'";
        $customerArray[$key]['24to36MonthTotal'] = $usr->TotalRows("XML_ro",$Where6);
        
        $Where7     = $Where." AND cust_id IN (".$customer['cust_id'].") AND (transaction_date BETWEEN (CURRENT_DATE() - INTERVAL 48 MONTH) AND (CURRENT_DATE() - INTERVAL 36 MONTH)) AND status = 'A'";
        $customerArray[$key]['36to48MonthTotal'] = $usr->TotalRows("XML_ro",$Where7);
        
        //$WhereAllTotal     = $Where." AND cust_id IN (".$customer['cust_id'].") AND status = 'A'";
        //$customerArray[$key]['allTotal'] = $usr->TotalRows("XML_ro",$WhereAllTotal);
        //echo "<pre>";print_r($customerArray);
    }
    
    $smarty->assign('customer', $customerArray);
    $smarty->display('manage-customer-counts.tpl');
?>