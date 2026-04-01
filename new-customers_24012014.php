<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign('breadcrumb','Export Customer Reports');
    
    $Page = 'daily';
    $smarty->assign('Page',$Page);
    $customerArray = array();
    /********** CUSTOMER DATA for Download ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
        
    if(isset($_REQUEST['days']) && $_REQUEST['days']!='') {
        $duration = $_REQUEST['days'];
    
        // Get Customers Ids From Ro Table
        $Where1 = $Where." AND cust_id != '' AND cust_id != '0' GROUP BY cust_id ";
        $total_temp = $usr->GetSelWhere("XML_ro","id",$Where1);
        $total = count($total_temp);
        
        $limit	= 25;
        $pageNum = 1; 					

        if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
           $pageNum = $_REQUEST['page'];
        $offset 	= ($pageNum - 1) * $limit;

        /*********** To Get the Count of Total Users in the Site ********/
        if($_REQUEST['sortoption']=='' ||  $_REQUEST['sortoption']=='desc') {
                $sortioption='asc';
                $getSort='desc';	
                $sortimoption='up';
                $smarty->assign("sortoption",$_REQUEST['sortoption']);
        } else {
                $sortioption='desc';
                $getSort='asc';	
                $sortimoption='down';
        }
        $SortBy		= " cust_id ".$getSort;

        if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
            $SortBy = $_REQUEST['sortby'] . " " . $getSort;
        }
        
        
        $Where1		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
        
        $custAry = array();
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
                foreach($totalArray as $total1){ 
                    $spent_total+= $total1['total'];
                }
                //echo "<pre>".$spent_total;print_r($totalArray);exit;   

                $customerArray[$key]['amountSpent']   = $spent_total;
                $customerArray[$key]['rebate']   = $customerArray[$key]['amountSpent'] * $_REQUEST['percentage'];
            }
        }
        //echo "<pre>";print_r($customerArray);exit;
        
        $srcpath = "days=".$_REQUEST['days']."&page=";
        include('includes/generate_pages.php');

        $smarty->assign("sortioption",$sortioption);
        $smarty->assign("sortimoption",$sortimoption);

        // for record from, to and Total display
        $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);

        $smarty->assign("records_from",$offset+1);
        $smarty->assign("limit",$limit);
        $smarty->assign("records_to",$records_to);
        $smarty->assign("total",$total);
        
    }
    
    
    //echo "<pre>";print_r($customerArray);exit;
    $smarty->assign('customer', $customerArray);
    $smarty->display('new-customers.tpl');
?>
