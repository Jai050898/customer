<?php
    require_once("includes/application_start.php");
    //require_once("includes/login_check.php");
    require_once("includes/login_check_staff.php");
    $smarty->assign('breadcrumb','New Customers Data');
    $usr 		= new General;
    $Page = 'customers';
    $smarty->assign('Page',$Page);
    
    //echo "<pre>";print_r($_REQUEST);exit;
    
     $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
     
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword'] !='') {
            $Where .= " AND (fullname like '%".$_REQUEST['keyword']."%')";	
    }
    
    if(isset($_REQUEST['fdate']) && $_REQUEST['fdate']!=''&& isset($_REQUEST['tdate']) && $_REQUEST['tdate']!='') {
        
	$fdate = $Gen->Date_Format($_REQUEST['fdate']);
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);
   
    
    // To Fetch Total ROws
    $Where  .= " AND (reg_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') ";
    $Table  = "XML_customers ";
    $total   = $usr->TotalRows($Table, $Where);
    
    $limit	= 25;
    $pageNum 	= 1; 					
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

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		
    
    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    
    $customersArray=array();
    $fields	= " id,cust_id,fullname, source, referral";
    $Table	= "XML_customers ";
    $customersArray		= $usr->GetSelWhere($Table,$fields,$Where);
    $allArray       = array();
    //echo "<pre>";print_r($customersArray);exit;
    
    foreach($customersArray  as $key=>$value)
    {
        
        $allArray[$key] = $value;

        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' and  cust_id = '".$value['cust_id']."' AND (transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59')  GROUP BY ro_id ORDER BY transaction_date ASC LIMIT 0,1";
        $fields         = "id, company_id, ro_id, cust_id, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross, discountamount, source, referral";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);

        if(!empty($grossSaleArray) && count($grossSaleArray) > 0){ 
            $allArray[$key]['id']   = $grossSaleArray['0']['id'];
            $allArray[$key]['ro_id']   = $grossSaleArray['0']['ro_id'];
            $allArray[$key]['company_id']   = $grossSaleArray['0']['company_id'];
            $allArray[$key]['cust_id']   = $grossSaleArray['0']['cust_id'];
            $allArray[$key]['gross']   = $grossSaleArray['0']['gross'];
            $allArray[$key]['discount']   = $grossSaleArray['0']['discountamount'];
            $allArray[$key]['netSale']    = $allArray[$key]['gross'] - $allArray[$key]['discount'];
        }

    }
    $srcpath = "fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&keyword=".$_REQUEST['keyword']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    
    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    if(count($allArray) > 0){
        $smarty->assign("records_from",$offset+1);
    } elseif(count($allArray) == 0) {
        $smarty->assign("records_from",0);
    } else {
        $smarty->assign("records_from",$offset);
    }
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    
    //echo "<pre>";print_r($allArray);exit;
    }
    $smarty->assign("allArray",$allArray);
    $smarty->display('customer-recent-customers_new_staff.tpl');
?>        
        
