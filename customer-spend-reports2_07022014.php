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
            
           $fieldsrototal = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) / count(ro_id) as grossRos";
           
          $Tablero	= "XML_ro ";
       
        
        // To calculate Gross Sales
          // To calculate Gross Sales
        //first visit amount spent
        $resfv =    array();
          
           $Wherefv	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id  ORDER BY transaction_date ASC LIMIT 0,1 ";
           
           $resfv = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefv);
      //     echo '<pre>';print_r($resfv);exit;
            
	if(!empty($resfv)) {
            $customerArray[$key]['fv']= $resfv[0]['grossSales'];
        }
        
        
        //second visit amount spent
        $resv=array();
            
          $Wheresv	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 1,2 " ;
           
          
            $ressv = $usr->GetSelWhere('XML_ro', $fieldsro, $Wheresv);
          if(!empty($ressv)){    
            $customerArray[$key]['sv']= $ressv[0]['grossSales'];
        }
            
        
        
        //third visit amount spent    
        $restv  = array();
           $Wheretv	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 2,3 " ;
           
           $restv = $usr->GetSelWhere($Tablero, $fieldsro, $Wheretv);
            
            //echo '<pre>';print_r($customerArray);exit;
       if(!empty($restv)) {
             $customerArray[$key]['tv']= $restv[0]['grossSales'];
        }
         // fourth visit amount spent  
        $resfov = array();
            
           $Wherefov	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 3,4 " ;
       
                $resfov = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefov);
           if(!empty($resfov)){
          $customerArray[$key]['fov']= $resfov[0]['grossSales'];
          }  
         //fifth visit amount spent
               $resfiv =array();
       
            $Wherefiv	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 4,5 " ;
       
                 
            $resfiv = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefiv);
            if(!empty($resfiv)){
          $customerArray[$key]['fiv']= $resfiv[0]['grossSales'];
          }
       
            $restov = array();
            $Wheretov	= $Whr." AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date ASC ";
           
           $Wherero	= $Whr." AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date ASC ";
       
                $restov=$usr->GetSelWhere($Tablero, $fieldsro, $Wheretov);
           if(!empty($restov)){
            $customerArray[$key]['tov']= $restov[0]['grossSales'];
         }
//            $Wherefdatetdate	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'  ORDER BY transaction_date  DESC ";
            
            
            $totalRO =array();
            $totalRO=$usr->GetSelWhere($Tablero, $fieldsrototal, $Wherero);
            if(!empty($totalRO)){            
            $customerArray[$key]['avro']= $totalRO[0]['grossRos'];
        }	
          
            
 

	
  
   }
  // echo "<pre>";print_r($customerArray );exit;
//echo '<pre>';print_r($ressv);exit;
           
//echo "<pre>";print_r($fdatetodate );
//echo "<pre>";print_r($resfv );exit;
//echo "<pre>";print_r($ressv );
//echo "<pre>";print_r($restv );
//echo "<pre>";print_r($resfov );
//echo "<pre>";print_r($resfiv );
//echo "<pre>";print_r($restov );

 
    
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

    
    
        
        
        
        
        /*
        //$Wherefdatetdate	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'  ORDER BY transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' DESC ";
            
            
           //echo "<pre>";print_r($customerArray);exit;
            
     /*if(isset($_REQUEST['fdate']) && isset($_REQUEST['tdate'])) {
        
	$fdate = $Gen->Date_Format($_REQUEST['fdate']);
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);

        $Where6 = $Where." AND cust_id != '' AND cust_id != '0' AND (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59')";
        $fdatetodate  = $usr->GetSelWhere("XML_ro",'cust_id,id',$Where6);
        
        $Wherefv2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'  AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') DESC LIMIT 0,1 " ;
        //  $Wherefv2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'  AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date > '".date('Y-m-d 00:00:00',strtotime($fdate))."' AND transaction_date <= '".date('Y-m-d 23:59:59',strtotime($tdate))."'DESC LIMIT 0,1 " ;
        $resfv2 = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefv2);
        
        $Wheresv2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') DESC LIMIT 1,2 " ;
        
        $ressv2 = $usr->GetSelWhere($Tablero, $fieldsro, $Wheresv2);
        
            $Wheretv2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') DESC LIMIT 2,3 " ;
           
            $restv2 = $usr->GetSelWhere($Tablero, $fieldsro, $Wheretv2);
            
            $Wherefov2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') DESC LIMIT 3,4 " ;
            
            $resfov2 = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefov2);
            
            $Wherefiv2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') DESC LIMIT 4,5 " ;
            
             $resfiv2 = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefiv2);
            
            $Wheretov2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' ORDER BY (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') DESC ";
            
            $restov2=$usr->GetSelWhere($Tablero, $fieldsro, $Wheretov2);
            
            $Wherero2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' ORDER BY (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59') DESC ";
$custAry[$key]['fiv']   = $resfiv2 ;
        // Get Customers Ids From Ro Table
echo "<pre>";print_r($custAry );

exit;

   }
echo "<pre>";print_r($fdatetodate );
echo "<pre>";print_r($resfv2 );
echo "<pre>";print_r($ressv2 );
echo "<pre>";print_r($restv2 );
echo "<pre>";print_r($resfov2 );
echo "<pre>";print_r($resfiv2 );
echo "<pre>";print_r($restov2 );

exit;
          // echo  $fieldsfdatetdate= "$customerArray[$key]['fv'],$customerArray[$key]['sv'],$customerArray[$key]['tv'],
          // $customerArray[$key]['fov'],$customerArray[$key]['fiv'],$customerArray[$key]['tov'],$customerArray[$key]['avro'] as date";
            
           
           // $FromdateTOdate= $usr->GetSelWhere($Tablero, $fieldsfdatetdate, $Wherefdatetdate);
           // $customerArray[$key]['date']= $FromdateTOdate[0]['date'];
            
          
             // Total RO Before Discount
    
     
         // echo "<pre>";print_r($customerArray);exit;
           
  //echo '<pre>';print_r($averagero);exit;
  */


    
?>

  
        
        