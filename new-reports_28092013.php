<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","new reports");
    
    //echo "<pre>";print_r($_REQUEST);exit;
    
    /********** CUSTOMER DATA for Download ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
        
    
    
    if(isset($_REQUEST['percentage']) && $_REQUEST['percentage']!='' && isset($_REQUEST['days']) && $_REQUEST['days']!='') {
        $duration = $_REQUEST['days'];
        
    
        // Get Customers Ids From Ro Table
        $custAry = array();
        $Where1 = $Where." AND cust_id != '' AND cust_id != '0' GROUP BY cust_id ";
        $custAry = $usr->GetSelWhere("XML_ro","cust_id",$Where1);

        $custArray = array();
        foreach($custAry as $cust) {
            $custArray[] = $cust['cust_id'];
        }
        //echo "<pre>";print_r($custArray);//exit;
        //$custIds = implode(',', $custArray);

        $customerArray = array();

        foreach($custArray as $key=>$cust){
            $spent_total = 0;
            $totalArray = array();
            
            // Get Customer Details from Customer table
            $custDetAry = array();
            $Where2 = $Where." AND cust_id != '' AND cust_id != '0' AND cust_id = '".$cust."' AND fullname != '' Group By cust_id";
            $custDetAry = $usr->GetSelWhere("XML_customers","id, cust_id, fullname, address1, city, state, zip",$Where2);
            if(!empty($custDetAry)) {
                $customerArray[$key]    = $custDetAry['0'];

                // Get Amount Spent During the Period from RO Table
                $sale_before_discount = "(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount)";
                $Where3 = $Where." AND transaction_date > DATE_SUB(now(), INTERVAL ".$duration.") AND cust_id = '".$cust."' AND status = 'A'";

                $totalArray  = $usr->GetSelWhere("XML_ro",$sale_before_discount."as total",$Where3);
                foreach($totalArray as $total){ 
                    $spent_total+= $total['total'];
                }
                //echo "<pre>".$spent_total;print_r($totalArray);exit;   

                $customerArray[$key]['amountSpent']   = $spent_total;
                $customerArray[$key]['rebate']   = $customerArray[$key]['amountSpent'] * $_REQUEST['percentage'];
            }
            
            //echo "<pre>";print_r($customerArray);
        }
    }
    
    //echo "<pre>";print_r($customerArray);exit;
    $smarty->assign('customer', $customerArray);
    $smarty->display('new-reports.tpl');
?>