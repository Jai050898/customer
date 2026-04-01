<?php
    require_once("includes/application_start.php");
    //require_once("includes/login_check.php");
    require_once("includes/login_check_staff.php");
    $smarty->assign('breadcrumb','New Customers Data');
    $usr 		= new General;
    $Page = 'customers';
    $smarty->assign('Page',$Page);
    $limit	= 25;
    $pageNum 	= 1; 	
    $from_default_date = '';
                     $to_default_date = '';
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
    //echo "<pre>";print_r($_REQUEST);exit;
    
    $Where  = "1=1 AND A.company_id = '".$_SESSION['User']['xml_id']."'";
     
    //echo '<pre>';print_r($total);exit;
    if(isset($_REQUEST['keyword']) && $_REQUEST['keyword'] !='') {
            $Where .= " AND (A.fullname like '%".$_REQUEST['keyword']."%')";	
    }

    if(isset($_REQUEST['fdate']) && $_REQUEST['fdate']!=''&& isset($_REQUEST['tdate']) && $_REQUEST['tdate']!='') {
        
	$fdate = $Gen->Date_Format($_REQUEST['fdate']);
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);
        $default='0';
    }else{
           $Where		.= "AND reg_date BETWEEN SUBDATE(CURDATE(), INTERVAL 3 DAY ) AND NOW() ";
$default='1';
echo $from_default_date = date("m-d-Y");
$to_default_date_str = strtotime($from_default_date);
$to_req_date = strtotime("+3 day",$to_default_date_str);
echo $to_default_date = date('m-d-Y',$to_req_date);

    }
   
 //    $Where    .= " AND reg_date BETWEEN SUBDATE(CURDATE(), INTERVAL 3 DAY ) AND NOW()";
        
    // To Fetch Total ROws
     if($default==1){
    $Where		.= "AND reg_date BETWEEN SUBDATE(CURDATE(), INTERVAL 3 DAY ) AND NOW() ";    
    }else{
    $Where  = "1=1 AND A.company_id = '".$_SESSION['User']['xml_id']."' AND (A.reg_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') ";
         
     }
    $Table  = "XML_customers A ";
    
    $total   = $usr->TotalRows($Table, $Where);
    
    
    
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
      $Table	= "XML_customers A LEFT JOIN XML_ro C ON A.cust_id = C.cust_id  ";
      $fields	= "DISTINCT(A.cust_id),A.id,A.fullname,A.source,A.referral";
      $SortBy		= " A.fullname ".$getSort;
      
      $Where		.= "GROUP BY C.ro_id ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    }    
    else if(isset($_REQUEST['sortby']) && $_REQUEST['sortby'] == 'ro_id'){
      $Table	= "XML_customers A LEFT JOIN XML_ro C ON A.cust_id = C.cust_id  ";
      $fields	= "DISTINCT(A.cust_id),A.id,A.fullname,A.source,A.referral";
      $SortBy		= " C.ro_id ".$getSort;
      
      $Where		.= "GROUP BY C.ro_id ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
    }else{
        
   $fields	= "DISTINCT(A.id),A.cust_id,A.fullname,A.source,A.referral";
    $Table	= "XML_customers  A";
     $Where		.= "GROUP BY A.cust_id LIMIT ".$offset.",".$limit;
     }
    
    
    
    $customersArray=array();
   //  echo "select ".$fields." ".$Table."". $Where;
    
    $customersArray		= $usr->GetSelWhere($Table,$fields,$Where);
    
    /*********** To Get the Count of Total Users in the Site ********/
    
    $allArray       = array();
    //echo "<pre>";print_r($customersArray);exit;
    
    foreach($customersArray  as $key=>$value)
    {
        
        $allArray[$key] = $value;

        // To calculate Gross Sales
        $grossSaleArray = array();
        if($default==1){
             $Where3	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' and  cust_id = '".$value['cust_id']."' AND (transaction_date BETWEEN SUBDATE(CURDATE(), INTERVAL 3 DAY) AND NOW()) GROUP BY ro_id ORDER BY transaction_date ASC LIMIT 0,1";
        }else{
              $Where3	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' and  cust_id = '".$value['cust_id']."' AND (transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59')  GROUP BY ro_id ORDER BY transaction_date ASC LIMIT 0,1";
        }
       
        
        
        $fields         = "id, company_id, ro_id, cust_id, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross, discountamount, source, referral";
        $Table3		= "XML_ro ";
        //echo "select ".$fields."from".$Table3." ".$Where3;
        
       // echo "<pre>";print_r($grossSaleArray);exit;
    
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
     //echo "<pre>";print_r($grossSaleArray);exit;
    
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
    //print_r($allArray);
    $srcpath = "fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&keyword=".$_REQUEST['keyword']."&page=";
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
    $smarty->assign("total1",$total1);
    
    //echo "<pre>";print_r($allArray);exit;
    
    $smarty->assign("allArray",$allArray);
    $smarty->assign("fromdate",$from_default_date);
    $smarty->assign("todate",$to_default_date);

    $smarty->display('customer-recent-customers_new_staff.tpl');
    
    
?>        
        
