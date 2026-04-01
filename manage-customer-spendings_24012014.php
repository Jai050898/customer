<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    $Page = 'daily';
    $smarty->assign('Page',$Page);
    
    /********** BY CUSTOMER ZIPCODES ***********/
    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        
    // get Vehicles of Logged in Company
    //$custAry = array();
    //$Where1 = $Where." AND cust_id != '' AND cust_id != '0'";
    //$custAry = $usr->GetSelWhere("XML_customers","cust_id, fullname",$Where1);
    
    //$custArray = array();
    //foreach($custAry as $cust) {
//        $custArray[] = $cust['cust_id'];
 //   }
   // $custIds = implode(',', $custArray);
    
    $customerArray = array();
        
    $sale_before_discount = "(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount)";
    // Get details from RO table
    
    //0-250 for last 12 months
    $Where2     = $Where." AND ".$sale_before_discount." >= 0 AND ".$sale_before_discount."< 250 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto250TotalYear'] = $usr->TotalRows("XML_ro",$Where2);
    
    // 0-250 for All Years
    $Where3     = $Where." AND ".$sale_before_discount." >= 0 AND ".$sale_before_discount."< 250 AND status = 'A'";
    $customerArray['upto250TotalAll'] = $usr->TotalRows("XML_ro",$Where3);

    
    // 251-500 for Current Year
    $Where4     = $Where." AND ".$sale_before_discount." >= 251 AND ".$sale_before_discount."< 500 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto500TotalYear'] = $usr->TotalRows("XML_ro",$Where4);
    
    // 251-500 for All Years
    $Where5     = $Where." AND ".$sale_before_discount." >= 251 AND ".$sale_before_discount."< 500 AND status = 'A'";
    $customerArray['upto500TotalAll'] = $usr->TotalRows("XML_ro",$Where5);

    // 501-1000 for last 12 Months
    $Where6     = $Where." AND ".$sale_before_discount." >= 501 AND ".$sale_before_discount."< 1000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto1000TotalYear'] = $usr->TotalRows("XML_ro",$Where6);
    
    // 501-1000 for All Years
    $Where7     = $Where." AND ".$sale_before_discount." > 501 AND ".$sale_before_discount."< 1000  AND status = 'A'";
    $customerArray['upto1000TotalAll'] = $usr->TotalRows("XML_ro",$Where7);

    // 1001 to 1250 for last 12 Months
    $Where8     = $Where." AND ".$sale_before_discount." > 1001 AND ".$sale_before_discount."< 1250 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto1250TotalYear'] = $usr->TotalRows("XML_ro",$Where8);
    
    // 1001 to 1250 for All Years
    $Where9     = $Where." AND ".$sale_before_discount." > 1001 AND ".$sale_before_discount."< 1250  AND status = 'A'";
    $customerArray['upto1250TotalAll'] = $usr->TotalRows("XML_ro",$Where9);
    
    //1251 to 1500 for Last 12 Months
    $Where10     = $Where." AND ".$sale_before_discount." > 1251 AND ".$sale_before_discount."< 1500 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto1500TotalYear'] = $usr->TotalRows("XML_ro",$Where10);
    
    //1251 to 1500 for All Yeats
    $Where11     = $Where." AND ".$sale_before_discount." > 1251 AND ".$sale_before_discount."<    1500 AND status = 'A'";
    $customerArray['upto1500TotalAll'] = $usr->TotalRows("XML_ro",$Where11);

    // 1501 to 2000 for Last 12 Months
    $Where12     = $Where." AND ".$sale_before_discount." > 1501 AND ".$sale_before_discount."< 2000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto2000TotalYear'] = $usr->TotalRows("XML_ro",$Where12);

    //1501 to 2000 for All Years
    $Where13     = $Where." AND ".$sale_before_discount." > 1501 AND ".$sale_before_discount."< 2000 AND status = 'A'";
    $customerArray['upto2000TotalAll'] = $usr->TotalRows("XML_ro",$Where13);
    
    //2001 to 2500 for Last 12 Months
    $Where14     = $Where." AND ".$sale_before_discount." > 2001 AND ".$sale_before_discount."< 2500 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto2500TotalYear'] = $usr->TotalRows("XML_ro",$Where14);
    
    //2001 to 2500 for All Years
    $Where15     = $Where." AND ".$sale_before_discount." > 2001 AND ".$sale_before_discount."< 2500 AND status = 'A'";
    $customerArray['upto2500TotalAll'] = $usr->TotalRows("XML_ro",$Where15);

    //2501 to 3000 for Last 12 Months
    $Where16     = $Where." AND ".$sale_before_discount." > 2501 AND ".$sale_before_discount."< 3000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto3000TotalYear'] = $usr->TotalRows("XML_ro",$Where16);
    
    //2501 to 3000 for All Years
    $Where17     = $Where." AND ".$sale_before_discount." > 2501 AND ".$sale_before_discount."< 3000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto3000TotalAll'] = $usr->TotalRows("XML_ro",$Where17);

    
    // 3001 to 3500 for Last 12 Months
    $Where18     = $Where." AND ".$sale_before_discount." > 3001 AND ".$sale_before_discount."< 3500 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto3500TotalYear'] = $usr->TotalRows("XML_ro",$Where18);
    
    // 3001 to 3500 for All Years
    $Where19     = $Where." AND ".$sale_before_discount." > 3001 AND ".$sale_before_discount."< 3500 AND status = 'A'";
    $customerArray['upto3500TotalAll'] = $usr->TotalRows("XML_ro",$Where19);

    // 3501 to 5000 for Last 12 Months
    $Where20     = $Where." AND ".$sale_before_discount." > 3501 AND ".$sale_before_discount."< 5000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto5000TotalYear'] = $usr->TotalRows("XML_ro",$Where20);
    
    // 3501 to 5000 for All YEars
    $Where21     = $Where." AND ".$sale_before_discount." > 3501 AND ".$sale_before_discount."< 5000 AND status = 'A'";
    $customerArray['upto5000TotalAll'] = $usr->TotalRows("XML_ro",$Where21);

    // 5001 to 7500 for Last 12 Months
    $Where22     = $Where." AND ".$sale_before_discount." > 5001 AND ".$sale_before_discount."< 7500 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto7500TotalYear'] = $usr->TotalRows("XML_ro",$Where22);
    
    // 5001 to 7500 for All Years
    $Where23     = $Where." AND ".$sale_before_discount." > 5001 AND ".$sale_before_discount."< 7500 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto7500TotalAll'] = $usr->TotalRows("XML_ro",$Where23);

    //7501 to 10000 for Last 12 Months
    $Where24     = $Where." AND ".$sale_before_discount." > 7501 AND ".$sale_before_discount."< 10000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto10000TotalYear'] = $usr->TotalRows("XML_ro",$Where24);
    
    //7501 to 10000 for All Years
    $Where25     = $Where." AND ".$sale_before_discount." > 7501 AND ".$sale_before_discount."< 10000 AND status = 'A'";
    $customerArray['upto10000TotalAll'] = $usr->TotalRows("XML_ro",$Where25);
    
    //10001 to 12500 for Last 12 Months
    $Where26     = $Where." AND ".$sale_before_discount." > 10001 AND ".$sale_before_discount."< 12500 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto12500TotalYear'] = $usr->TotalRows("XML_ro",$Where26);
    
    //10001 to 12500 for All Years
    $Where27     = $Where." AND ".$sale_before_discount." > 10001 AND ".$sale_before_discount."< 12500 AND status = 'A'";
    $customerArray['upto12500TotalAll'] = $usr->TotalRows("XML_ro",$Where27);

    // 12501 to 15000 for Last 12 Months
    $Where28     = $Where." AND ".$sale_before_discount." > 12501 AND ".$sale_before_discount."< 15000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto15000TotalYear'] = $usr->TotalRows("XML_ro",$Where28);
    
    // 12501 to 15000 for All Years
    $Where29     = $Where." AND ".$sale_before_discount." > 12501 AND ".$sale_before_discount."< 15000 AND status = 'A'";
    $customerArray['upto15000TotalAll'] = $usr->TotalRows("XML_ro",$Where29);

    //15001 to 20000 for Last 12 Months
    $Where30     = $Where." AND ".$sale_before_discount." > 15001 AND ".$sale_before_discount."< 20000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto20000TotalYear'] = $usr->TotalRows("XML_ro",$Where30);
    
    //15001 to 20000 for All Years
    $Where31     = $Where." AND ".$sale_before_discount." > 15001 AND ".$sale_before_discount."< 20000 AND status = 'A'";
    $customerArray['upto20000TotalAll'] = $usr->TotalRows("XML_ro",$Where31);

    //20001 to 25000 for Last 12 Months
    $Where32     = $Where." AND ".$sale_before_discount." > 20001 AND ".$sale_before_discount."< 25000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto25000TotalYear'] = $usr->TotalRows("XML_ro",$Where32);
    
    //20001 to 25000 for All Years
    $Where33     = $Where." AND ".$sale_before_discount." > 20001 AND ".$sale_before_discount."< 25000 AND status = 'A'";
    $customerArray['upto25000TotalAll'] = $usr->TotalRows("XML_ro",$Where33);

    // 25001 to 30000 for Last 12 Months
    $Where34     = $Where." AND ".$sale_before_discount." > 25001 AND ".$sale_before_discount."< 30000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto30000TotalYear'] = $usr->TotalRows("XML_ro",$Where34);
    
    // 25001 to 30000 for All Years
    $Where35     = $Where." AND ".$sale_before_discount." > 25001 AND ".$sale_before_discount."< 30000 AND status = 'A'";
    $customerArray['upto30000TotalAll'] = $usr->TotalRows("XML_ro",$Where35);

    // 30001 to 50000 for Last 12 Months
    $Where36     = $Where." AND ".$sale_before_discount." > 30001 AND ".$sale_before_discount."< 50000 AND transaction_date > DATE_SUB(now(), INTERVAL 12 MONTH) AND status = 'A'";
    $customerArray['upto50000TotalYear'] = $usr->TotalRows("XML_ro",$Where36);
    
    // 30001 to 50000 for All Years
    $Where37     = $Where." AND ".$sale_before_discount." > 30001 AND ".$sale_before_discount."< 50000 AND status = 'A'";
    $customerArray['upto50000TotalAll'] = $usr->TotalRows("XML_ro",$Where37);
        
    
    //echo "<pre>";print_r($customerArray);exit;
    $smarty->assign('customer', $customerArray);
    $smarty->display('manage-customer-spendings.tpl');
?>