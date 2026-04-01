<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Customer Best Returns');
    $usr    = new General;
    $Page = "customers";
    $smarty->assign('Page',$Page);


    /********** BY CUSTOMER Visits ***********/
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    
  //  if(isset($_REQUEST['source']) && $_REQUEST['source']!='') {
      //  $Where  .= " AND source = '".$_REQUEST['source']."'";
    //}
    
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

    $Where1    .= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $custAry = array();
    $custAry = $usr->GetSelWhere("XML_customers","cust_id, fullname, source, referral",$Where1);
    //echo "<prE>";print_r($custAry);exit;
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
        $customerArray[$key]['source'] = $customer['source'];
        $customerArray[$key]['referral'] = $customer['referral'];


        //All Total Visit Counts
        $Where3     = $Where." AND cust_id IN (".$customer['cust_id'].") AND status = 'A'";
        $customerArray[$key]['allTotal'] = $usr->TotalRows("XML_ro",$Where3);

        $Whr    = " 1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";

        if((isset($_REQUEST['fdate']) && $_REQUEST['fdate']!= '') && (isset($_REQUEST['tdate']) && $_REQUEST['tdate'] != '')) {

                $fdate = $Gen->Date_Format($_REQUEST['fdate']);
                $tdate = $Gen->Date_Format($_REQUEST['tdate']);

                $Whr    .= " AND transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59'";
        
        //$Whr    .= " AND transaction_date BETWEEN SUBDATE(CURDATE(), INTERVAL 1 YEAR) AND NOW()";
        // To calculate Gross Sales
        $resVisitAry =    array();
        $WhereFirstVisit	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 0,5 ";
        $fieldsro = "id, ro_id, cust_id,created_date, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales ";
        $resVisitAry = $usr->GetSelWhere("XML_ro", $fieldsro, $WhereFirstVisit);
        //echo '<pre>';print_r($resVisitAry);exit;
        $visitCnt   = count($resVisitAry);
        // To calculate Total Gross Sale
        $totalGrossSale	= 0;
        foreach($resVisitAry as $key1=>$visitArr) {
            if($key1 < 3) {
                if(!empty($visitArr)) {
                    $totalGrossSale += $visitArr['grossSales'];       
                    $customerArray[$key]['VisitArray'][$key1]   = $visitArr;
                    
                }
            }
        }
        $newVisitCnt    = count($customerArray[$key]['VisitArray']);
        if($newVisitCnt < 3) {
            for($j=$newVisitCnt;$j<=2;$j++) {
                if(!isset($customerArray[$key]['VisitArray'][$j]['grossSales'])) {
                    $customerArray[$key]['VisitArray'][$j]['grossSales'] = '-1';
                }
            }
        }
        
        $customerArray[$key]['grossTotal']   = $totalGrossSale;
        //$mixedArray = array();
        
       
    }
        
    // For Source Select BOX
    //$source  = $usr->GetSelWhere('XML_customers',"source"," 1=1 and source != '' GROUP BY source");
    //echo "<pre>";print_r($source);exit;
   // $smarty->assign('source',$source);
    }
	$Totalcounts =array();
	$Where5 = $Where." AND cust_id != '' AND cust_id != '0'";
	$fieldsro5 = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as Totalcount ";
	$Totalcounts = $usr->GetSelWhere("XML_ro", $fieldsro5, $Where5);
	$Totalcounts= $Totalcounts['0']['Totalcount'];
	//echo $Totalcounts;
     	$smarty->assign("Totalcounts",$Totalcounts);
	//$Totalgrosscount=$usr->TotalRows("XML_ro",$Where3);
	
	$Where6     = $Where." AND cust_id != '' AND cust_id != '0'";
        $Totalgrosscount = $usr->TotalRows("XML_ro",$Where6);
	//echo '<pre>';print_r($Totalgrosscount);
 	$smarty->assign("Totalgrosscount",$Totalgrosscount);
	
    	//$customerArray[$key]['Totalcount'] =  count($customerArray[$key]['allTotal']);

    
    $srcpath 	= "sortby=".$_REQUEST['sortby']."&sortoption=".$_REQUEST['sortoption']."&fdate=".$_REQUEST['fdate']."&tdate=".$_REQUEST['tdate']."&user_id=".$_REQUEST['user_id']."&source=".$_REQUEST['source']."&page=";
    include('includes/generate_pages.php');

    $smarty->assign("sortioption",$sortioption);
    $smarty->assign("sortimoption",$sortimoption);

    // for record from, to and Total display
    $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);
    

    $smarty->assign("records_from",$offset+1);
    $smarty->assign("limit",$limit);
    $smarty->assign("records_to",$records_to);
    $smarty->assign("total",$total);
    
    //echo '<pre>'.$visitCnt;print_r($customerArray);exit;
    $smarty->assign('customer', $customerArray);
  
    $smarty->display('customer-best-return.tpl');
?>



