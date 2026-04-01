<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    
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

        $customerArray = array();

        foreach($custArray as $key=>$cust){
            $spent_total = 0;
            $totalArray = array();
            
            // Get Customer Details from Customer table
            $custDetAry = array();
            $Where2 = $Where." AND cust_id != '' AND cust_id != '0' AND cust_id = '".$cust."' AND fullname != '' Group By cust_id";
            $custDetAry = $usr->GetSelWhere("XML_customers","id, cust_id, fullname, address1, city, state, zip",$Where2);
            if(!empty($custDetAry)) {
                $customerArray[$key]['id']    = $custDetAry['0']['id'];
                if($custDetAry['0']['cust_id'] != '')
                    $customerArray[$key]['cust_id']    = $custDetAry['0']['cust_id'];
                else
                    $customerArray[$key]['cust_id']    = "NULL";
                if($custDetAry['0']['fullname'] != '')
                    $customerArray[$key]['fullname']    = $custDetAry['0']['fullname'];
                else
                    $customerArray[$key]['fullname']    = "NULL";
                if($custDetAry['0']['address1'] != '')
                    $customerArray[$key]['address1']    = $custDetAry['0']['address1'];
                else
                    $customerArray[$key]['address1']    = "NULL";
                if($custDetAry['0']['city'] !='')
                    $customerArray[$key]['city']    = $custDetAry['0']['city'];
                else
                    $customerArray[$key]['city']    = "NULL";
                if($custDetAry['0']['state'] != '')
                    $customerArray[$key]['state']    = $custDetAry['0']['state'];
                else
                    $customerArray[$key]['state']    = "NULL";
                if($custDetAry['0']['zip'] != '')
                    $customerArray[$key]['zip']    = $custDetAry['0']['zip'];
                else
                    $customerArray[$key]['zip']    = "NULL";
                    
                
                // Get Amount Spent During the Period from RO Table
                $sale_before_discount = "(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount)";
                $Where3 = $Where." AND transaction_date > DATE_SUB(now(), INTERVAL ".$duration.") AND cust_id = '".$cust."' AND status = 'A'";

                $totalArray  = $usr->GetSelWhere("XML_ro",$sale_before_discount."as total",$Where3);
                foreach($totalArray as $total){ 
                    $spent_total+= $total['total'];
                }
                //echo "<pre>".$spent_total;print_r($totalArray);exit;   
                if($spent_total != '')
                    $customerArray[$key]['amountSpent']   = $spent_total;
                else
                    $customerArray[$key]['amountSpent']   = 0;
                if($customerArray[$key]['amountSpent'] != '' && $_REQUEST['percentage'] != '' )
                    $customerArray[$key]['rebate']   = $customerArray[$key]['amountSpent'] * $_REQUEST['percentage'];
                else
                    $customerArray[$key]['rebate']   = 0;
            }
            
            //echo "<pre>";print_r($customerArray);
        }
        
        
        // EXPORT data to CSV
        $fileName = "CustomerData".date('Y-m-d');
        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=".$fileName.".csv"); 
        fputcsv($output, array('S.No','Customer Id','Name','Address','City','State','Zip','Amount spent during '.$duration,'Rebate'));
        foreach($customerArray as $cust) {
            fputcsv($output, $cust);
        }
        fclose($output) or die("Can't close php://output");
        
    }
?>