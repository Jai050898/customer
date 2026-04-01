<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    /********** BY CUSTOMER ZIPCODES ***********/
    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    // get Zipcodes of Logged in Company
    $zipsAry = array();
    $Where1 = $Where." AND zip!='' AND zip!='0' AND zip!='-1'  GROUP BY zip";
    $zipsAry = $usr->GetSelWhere("XML_customers","zip",$Where1);
    
    $zipArray = array();
    foreach($zipsAry as $zip) {
        $zipArray[] = $zip['zip'];
    }
    //echo "<pre>";print_r($zipArray);exit;
    $mainZipsAry = array();
    $customerArray = array();
    
    $year = date('Y');
    foreach($zipArray as $key=>$zipcode) {
            $totalCustomerSpentAmtAll   = 0;
            //if($i == $year) {
              //  echo "<pre>";print_r($zipArray);exit;
            //}
            $totalCustomerSpentAmtYear  = 0;
            $custAry    = array();
            $custIdsArray  = array();

            //to get Customers of by zipcode
            $Where3 = $Where." AND zip = '".$zipcode."'";
            $custAry    = $usr->GetSelWhere("XML_customers","cust_id",$Where3);
            //echo "<pre>";print_r($custAry);
            $custIdsArray['zipcode'] = $zipcode;

             foreach($custAry as $cust){
                $custIdsArray['cust_ids'][] = $cust['cust_id'];
            }

            // Get details from RO table
            $custIds    = implode(',', $custIdsArray['cust_ids']);
            $Where2     = $Where." AND cust_id IN (".$custIds.") AND transaction_date >'".date($year.'-01-01 00:00:00')."' AND transaction_date <='".date($year.'-12-31 23:59:59')."' AND status = 'A'";
            $roAry = $usr->GetSelWhere("XML_ro","*",$Where2);
            //echo "<pre>";print_r($roAry);

            
            foreach($roAry as $ro) {
                $totalCustomerSpentAmtYear = $totalCustomerSpentAmtYear + $ro['balancedue'] + $ro['laboramount'] + $ro['partsamount'] + $ro['taxamount'] + $ro['hazardwasteamount'] + $ro['shopsuppliesamount'];
            }
            
            $roAllAry = array();
            $Where3     = $Where." AND cust_id IN (".$custIds.") AND status = 'A'";
            $roAllAry = $usr->GetSelWhere("XML_ro","*",$Where3);
            foreach($roAllAry as $roAll) {
                $totalCustomerSpentAmtAll = $totalCustomerSpentAmtAll + $roAll['balancedue'] + $roAll['laboramount'] + $roAll['partsamount'] + $roAll['taxamount'] + $roAll['hazardwasteamount'] + $roAll['shopsuppliesamount'];
            }
            
            $customerArray[$key]['zipcode'] = $zipcode;
            $customerArray[$key]['yearTotal'] = $totalCustomerSpentAmtYear;
            $customerArray[$key]['allTotal'] = $totalCustomerSpentAmtAll;
        }
        
    //echo "<pre>";print_r($customerArray);exit;
    
    $smarty->assign('customer', $customerArray);
    $smarty->display('manage-zipcode-reports.tpl');
?>