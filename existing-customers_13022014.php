<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign('breadcrumb','Existing Customer Reports');
    
    $Page = 'Customers';
    $smarty->assign('Page',$Page);
    
    /********** to get customer Ids from RO table  ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
        
    if(isset($_REQUEST['fdate']) && $_REQUEST['fdate']!=''&& isset($_REQUEST['tdate']) && $_REQUEST['tdate']!='')  {
        
	$fdate = $Gen->Date_Format($_REQUEST['fdate']);
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);
        
        // Get Customers Ids From Ro Table
       $Where1 = $Where." AND cust_id != '' AND (transaction_date > '".$fdate." 00:00:00' AND transaction_date <= '".$tdate." 23:59:59') GROUP BY cust_id";
        
        $total_temp = $usr->GetSelWhere("XML_ro","cust_id",$Where1);
        if(!empty($total_temp)){
            
            $dateCust   = array();
            foreach($total_temp as $cust){
                $dateCust[] = $cust['cust_id'];
            }
            $dateCustIds    = implode(',',$dateCust);
        
        $Where2 = $Where." AND cust_id IN (".$dateCustIds.") GROUP BY cust_id";
        
        $limit   = 2;
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
        $SortBy		= "cust_id ".$getSort;

        if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
            $SortBy = $_REQUEST['sortby'] . " " . $getSort;
        }
        
        
        $Where3	.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
        
        $custAry = array();
        $fields= "cust_id, fullname, address1,city, state, zip, reg_date";
        $table="XML_customers";
        $custAry = $usr->GetSelWhere($table,$fields,$Where2);
        //echo "<pre>";print_r($custAry);exit;
        
        $srcpath = "fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&page=";
        include('includes/generate_pages.php');

        $smarty->assign("sortioption",$sortioption);
        $smarty->assign("sortimoption",$sortimoption);

        // for record from, to and Total display
        $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
        if(count($custAry) > 0) {
            $smarty->assign("records_from",$offset+1);
        } else {
            $smarty->assign("records_from",$offset);
        }
    }
    }
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
     $smarty->assign('Page',$Page);
    $smarty->assign('customerCnt', count($custAry));
    $smarty->assign('customer', $custAry);
    $smarty->display('existing-customers.tpl');
?>
