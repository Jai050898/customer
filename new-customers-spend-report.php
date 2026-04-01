<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign('breadcrumb','Export Customer Reports');
    
    $Page = 'daily';
    $smarty->assign('Page',$Page);
    /********** CUSTOMER DATA for Download ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
       
    if(isset($_REQUEST['fdate']) && $_REQUEST['fdate']!=''&& isset($_REQUEST['tdate']) && $_REQUEST['tdate']!='') {
        
	$fdate = $Gen->Date_Format($_REQUEST['fdate']);;
	$tdate = $Gen->Date_Format($_REQUEST['tdate']);
        
        // Get Customers Ids From Ro Table
        $Where1 = $Where." AND cust_id != '' AND cust_id != '0' AND (transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59')";
         $customerArray = array();
        foreach($custAry as $key=>$customer) {
        
        $totalVisitsYear = 0;
        $totalVisitsAll = 0;
        $customerArray[$key]['cust_id'] = $customer['cust_id'];
        $customerArray[$key]['fullname'] = $customer['fullname'];
        
        //All Total Visit Counts
        $Where3     = $Where." AND cust_id IN (".$customer['cust_id'].") AND status = 'A'";
        $customerArray[$key]['allTotal'] = $usr->TotalRows("XML_ro",$Where3);
    
        // To calculate Gross Sales
            $Wherefv	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59'DESC LIMIT 0,1 " ;
            
            $Wheresv	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' DESC LIMIT 1,2 " ;
            
            $Wheretv	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59'DESC LIMIT 2,3 " ;
            
            $Wherefov	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59'DESC LIMIT 3,4 " ;
            
            $Wherefiv	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date  BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59'DESC LIMIT 4,5 " ;
            
            $Wheretov	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' DESC ";
           
            $Wherero	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' DESC ";
            
            $WhereAvgro	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id = '".$customer['cust_id']."' ORDER BY transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' DESC ";
            
            
            $fieldsro = " sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales";
            
            $fieldsrototal = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) / count(ro_id) as grossRos";
            
            $Tablero	= "XML_ro ";
            
            $resfv = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefv);
            $customerArray[$key]['fv']= $resfv[0]['grossSales'];
            
            $ressv = $usr->GetSelWhere($Tablero, $fieldsro, $Wheresv);
            $customerArray[$key]['sv']= $ressv[0]['grossSales'];
            
            $restv = $usr->GetSelWhere($Tablero, $fieldsro, $Wheretv);
            $customerArray[$key]['tv']= $restv[0]['grossSales'];
            
            $resfov = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefov);
            $customerArray[$key]['fov']= $resfov[0]['grossSales'];
            
            $resfiv = $usr->GetSelWhere($Tablero, $fieldsro, $Wherefiv);
            $customerArray[$key]['fiv']= $resfiv[0]['grossSales'];
            
            $restov=$usr->GetSelWhere($Tablero, $fieldsro, $Wheretov);
            $customerArray[$key]['tov']= $restov[0]['grossSales'];
            
            $totalRO=$usr->GetSelWhere($Tablero, $fieldsrototal, $Wherero);
            
            $customerArray[$key]['avro']= $totalRO[0]['grossRos'];
          
             // Total RO Before Discount
    }
         
        $srcpath = "fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&page=";
        include('includes/generate_pages.php');
echo "<pre>";print_r($customerArray);exit;
        $smarty->assign("sortioption",$sortioption);
        $smarty->assign("sortimoption",$sortimoption);

        // for record from, to and Total display
        $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
        if(count($custAry) > 0) {
            $smarty->assign("records_from",$offset+1);
        } else {
            $smarty->assign("records_from",$offset);
        }
        $smarty->assign("limit",$limit);
        $smarty->assign("records_to",$records_to);
        $smarty->assign("total",$total);
        
    }
    $smarty->assign('customerCnt', count($custAry));
    $smarty->assign('customer', $custAry);
    $smarty->display('new-customers.tpl');
?>
