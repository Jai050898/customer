<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Manage Customer Visits');
    $usr    = new General;
    $smarty->assign("Page","zip reports");
    
    $Page = "customers";
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
    
    $Where1		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
   
    
    $custAry = array();
    $custAry = $usr->GetSelWhere("XML_customers","cust_id, fullname",$Where1);
    //echo "<pre>sdfr";print($custAry);exit;
    $custArray = array();
    foreach($custAry as $cust) {
        $custArray[] = $cust['cust_id'];
    }
    $custIds = implode(',', $custArray);
    
    $customerArray = array();
  
    foreach($custAry as $key=>$customer) {
        
        $totalVisitsYear = 0;
        $totalVisitsAll = 0;
        
        $customerArray[$key]['cust_id'] = $customer['cust_id'];
        
        $customerArray[$key]['fullname'] = $customer['fullname'];
        
        
        //All Total Visit Counts
        $Where3     = $Where." AND cust_id IN (".$customer['cust_id'].") AND status = 'A'";
        $customerArray[$key]['allTotal'] = $usr->TotalRows("XML_ro",$Where3);
    	
        $Whr    = " 1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
        if((isset($_REQUEST['fdate']) && $_REQUEST['fdate']!= '') && (isset($_REQUEST['tdate']) && $_REQUEST['tdate'] != '')) {
        
            $fdate = $Gen->Date_Format($_REQUEST['fdate']);
            $tdate = $Gen->Date_Format($_REQUEST['tdate']);
            
            $Whr    .= " AND transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59'";
        }
        
    	$fieldsro = " sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales";
        $Tablero  = "XML_ro ";
            
            
        // To calculate Gross Sales
        //first visit amount spent
        $resfv =    array();
        $Wherefv    = $Whr." AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date ASC LIMIT 0,1" ;
        $resfv  = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefv);
        
	if(!empty($resfv)) {
            $customerArray[$key]['fv']= $resfv[0]['grossSales'];
        }
        
        
        //second visit amount spent
        $resv=array();
        $Wheresv	= $Whr." AND cust_id = '".$customer['cust_id']."'   ORDER BY transaction_date ASC LIMIT 2,1 " ;
        $ressv = $usr->GetSelWhere($Tablero, $fieldsro, $Wheresv);
        if(!empty($ressv)){    
            $customerArray[$key]['sv']= $ressv[0]['grossSales'];
        }
        
        
        //third visit amount spent    
        $restv  = array();
        $Wheretv    = $Whr." AND cust_id = '".$customer['cust_id']."'  ORDER BY transaction_date ASC LIMIT 3,1 " ;        
        $restv  = $usr->GetSelWhere($Tablero, $fieldsro, $Wheretv);
        if(!empty($restv)) {
             $customerArray[$key]['tv']= $restv[0]['grossSales'];
        }
         // fourth visit amount spent  
        $resfov = array();
        $Wherefov	= $Whr." AND cust_id = '".$customer['cust_id']."'  ORDER BY transaction_date ASC LIMIT 4,1 ";
        $resfov = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefov);
         if(!empty($resfov)){
          $customerArray[$key]['fov']= $resfov[0]['grossSales'];
          }  
         //fifth visit amount spent
         $Wherefiv	= $Whr." AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date ASC LIMIT 5,1 " ;
         $resfiv =array();
          $resfiv = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefiv);
          if(!empty($resfiv)){
          $customerArray[$key]['fiv']= $resfiv[0]['grossSales'];
          }
          
          //total amount spent for all visits
          $Wheretov	= $Whr." AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date ASC ";
         $restov = array();
         $restov=$usr->GetSelWhere($Tablero, $fieldsro, $Wheretov);
          if(!empty($restov)){
            $customerArray[$key]['tov']= $restov[0]['grossSales'];
         }
         //average ro  
        $Wherero	= $Whr." AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date ASC ";
        $fieldsrototal = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) / count(ro_id) as grossRos";
        $totalRO =array();
        $totalRO=$usr->GetSelWhere($Tablero, $fieldsrototal, $Wherero);
        if(!empty($totalRO)){            
            $customerArray[$key]['avro']= $totalRO[0]['grossRos'];
        }		   
        }
        
        $srcpath 	= "sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&user_id=".$_REQUEST['user_id']."&page=";
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
    $smarty->display('customer-spend-reports.tpl');
   
?>
