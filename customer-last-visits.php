<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','New Customers Data');
    $usr 		= new General;
    $Page = 'customers';
    $smarty->assign('Page',$Page);
    
    //echo "<pre>";print_r($_REQUEST);exit;
    
     $Where  = "1=1 AND A.company_id = '".$_SESSION['User']['xml_id']."' AND B.company_id = '".$_SESSION['User']['xml_id']."' ";
     
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword'] !='') {
            $Where .= " AND (A.fullname like '%".$_REQUEST['keyword']."%')";	
    }
    
    if(isset($_REQUEST['fdate']) && $_REQUEST['fdate']!=''&& isset($_REQUEST['tdate']) && $_REQUEST['tdate']!='') {
        
	$fdate = $Gen->Date_Format($_REQUEST['fdate']);
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);
   
    
    // To Fetch Total ROws
       $fields	= "DISTINCT(B.cust_id)";
      $Where		.= "and B.transaction_date
BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' AND B.cust_id NOT IN ( SELECT cust_id FROM `XML_ro` WHERE 1 =1 AND transaction_date > '".$tdate." 23:59:59')";
      
      $Where		.= " GROUP BY B.cust_id ";
      $Table	= "XML_customers as A JOIN XML_ro as B on A.cust_id= B.cust_id";
    $totalArray		= $usr->GetSelWhere($Table,$fields,$Where);
    $total = count($totalArray);
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
     if(isset($_REQUEST['sortby']) && $_REQUEST['sortby'] == 'fullname'){
      $Where  = "1=1 AND A.company_id = '".$_SESSION['User']['xml_id']."' AND B.company_id = '".$_SESSION['User']['xml_id']."' ";
      $fields	= "DISTINCT(B.cust_id),A.fullname,A.email,max(B.transaction_date) as transaction_date";
      $SortBy		= " A.fullname ";
      $Where		.= "and B.transaction_date
BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' AND B.cust_id NOT IN ( SELECT cust_id FROM `XML_ro` WHERE 1 =1 AND transaction_date > '".$tdate." 23:59:59')";
    
      $SortBy		= " A.fullname ".$getSort;
      $Where		.= " GROUP BY B.cust_id ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
      $Table	= "XML_customers as A JOIN XML_ro as B on A.cust_id= B.cust_id";
      
    }else{
      $Where  = "1=1 AND A.company_id = '".$_SESSION['User']['xml_id']."' AND B.company_id = '".$_SESSION['User']['xml_id']."'  ";
      $fields	= "DISTINCT(B.cust_id),A.fullname,A.email,max(B.transaction_date) as transaction_date";
      $SortBy		= " A.fullname ";
      $Where		.= "and B.transaction_date
BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' AND B.cust_id NOT IN ( SELECT cust_id FROM `XML_ro` WHERE 1 =1 AND transaction_date > '".$tdate." 23:59:59')";
    
      $SortBy		= " A.fullname ".$getSort;
      $Where		.= " GROUP BY B.cust_id LIMIT ".$offset.",".$limit;
      $Table	= "XML_customers as A JOIN XML_ro as B on A.cust_id= B.cust_id";  
    }  
   
    
    
    
    $customersArray=array();
    $customersArray		= $usr->GetSelWhere($Table,$fields,$Where);
    
    
   
    //echo "<pre>";print_r($customersArray);exit;
    
    
    $srcpath = "fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&page=";
    include('includes/generate_pages.php');
    
    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);
    
    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    
    if(count($customersArray) > 0){
        $smarty->assign("records_from",$offset+1);
    } elseif(count($customersArray) == 0) {
        $smarty->assign("records_from",0);
    } else {
        $smarty->assign("records_from",$offset);
    }
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    
    //echo "<pre>";print_r($customersArray);exit;
    }
    $smarty->assign("allArray",$customersArray);
    $smarty->display('customer-last-visits.tpl');
    
    
   
?>        
        
