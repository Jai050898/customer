<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    $Page = 'daily';
    $smarty->assign('Page',$Page);
    
    /********** BY CUSTOMER Visits ***********/
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    
    $Where1 = $Where." AND cust_id != '' AND cust_id != '0'";
    $total = $usr->TotalRows("XML_customers",$Where1);
    
    $limit	= 25;
    $pageNum 	= 1; 					
    
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
    
    /*********** To Get the Count of Total Users in the Site ********/
    if($_POST['sortoption']=='' ||  $_POST['sortoption']=='desc') {
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_POST['sortoption']);
    } else {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= " cust_id ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		
    
    $Where1		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    
    $custAry = array();
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
    
    
    $srcpath 	= "page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    
    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    $smarty->assign("records_from",$offset+1);
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    
    
    $smarty->assign('customer', $customerArray);
    $smarty->display('manage-customer-visit-reports.tpl');
?>