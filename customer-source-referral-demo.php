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
    
    if(isset($_REQUEST['source']) && $_REQUEST['source']!='') {
        $Where  .= " AND source = '".$_REQUEST['source']."'";
    }
    
    $Where1 = $Where." AND cust_id != '' AND cust_id != '0' ";
    $Where4 = $Where." AND cust_id != '' AND cust_id != '0' GROUP BY cust_id";
    $total_customersAry = $usr->GetSelWhere("XML_customers","cust_id",$Where4);
    $total= count($total_customersAry);
    
    /************************get total visists of all customers ***********/
     $cust_totalvisits=0;
    foreach($total_customersAry as $total_cust_visits) {
        $totalvisits_custArray[] = $total_cust_visits['cust_id'];
    }
    $cust_visitsIds = implode(',', $totalvisits_custArray);

    $customervisitsArray = array();

    foreach($total_customersAry as $visits=>$customervisits) {


        //All Total Visit Counts
       //  $Where5     = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND cust_id IN (".$customervisits['cust_id'].") AND status = 'A'";
         $Where5     = $Where." AND cust_id IN (".$customervisits['cust_id'].") AND status = 'A'";
        $customervisitsArray[$visits]['allTotal'] = $usr->TotalRows("XML_ro",$Where5);
//total visits 
        $cust_totalvisits = $cust_totalvisits+$customervisitsArray[$visits]['allTotal'];
        
    }
    /****************eof total visits of all cusotmers***************/
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

    $Where1    .= "GROUP BY cust_id ORDER BY ".$SortBy."   LIMIT ".$offset.",".$limit;

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

                //$Whr    .= " AND transaction_date BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59'";
        }
        //$Whr    .= " AND transaction_date BETWEEN SUBDATE(CURDATE(), INTERVAL 1 YEAR) AND NOW()";
        // To calculate Gross Sales
        $resVisitAry =    array();
        $WhereFirstVisit	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 0,5 ";
        $fieldsro = "id, ro_id, cust_id, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales,min(transaction_date) as firstvisit";
        $resVisitAry = $usr->GetSelWhere("XML_ro", $fieldsro, $WhereFirstVisit);
      //  echo '<pre>';print_r($resVisitAry);exit;
        $visitCnt   = count($resVisitAry);
        // To calculate Total Gross Sale
        $totalGrossSale	= 0;
        foreach($resVisitAry as $key1=>$visitArr) {
            $customerArray[$key]['firstvisit']   = $visitArr['firstvisit'];
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
    $source  = $usr->GetSelWhere('XML_customers',"source"," 1=1 and source != '' GROUP BY source");
    //echo "<pre>";print_r($source);exit;
    $smarty->assign('source',$source);
    
    //--------------------calculate averages and totals -------
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";
    
    if(isset($_REQUEST['source']) && $_REQUEST['source']!='') {
        $Where  .= " AND source = '".$_REQUEST['source']."'";
    }
    
    $Where1 = $Where." AND cust_id != '' AND cust_id != '0'";
    $total = $usr->TotalRows("XML_customers",$Where1);
    
    
    
       
    		

    $Where1    .= "GROUP BY cust_id ORDER BY ".$SortBy;

    $tot_custAry = array();
    $tot_custAry = $usr->GetSelWhere("XML_customers","cust_id, fullname, source, referral",$Where1);
    //echo "<prE>";print_r($custAry);exit;
    $custArray = array();
    foreach($tot_custAry as $tot_cust) {
        $tot_custArray[] = $tot_cust['cust_id'];
    }
    $tot_custIds = implode(',', $tot_custArray);

    $tot_customerArray = array();
     //$ro1_avg is visits count (ro1 members)
        $ro1_avg=0;        
        $ro2_avg=0;
        $ro3_avg=0;
        $ro1_avg_amt=0;
        $ro2_avg_amt=0;
        $ro3_avg_amt=0;
        $total_ro=0;
        $tot_totalGrossSale_ro3=0;
        $tot_totalGrossSale_ro2=0;
        $tot_totalGrossSale_ro1=0;
        $total_visitors=0;
    foreach($tot_custAry as $key=>$tot_customer) {

        $tot_totalVisitsYear = 0;
        $tot_totalVisitsAll = 0;
        $tot_customerArray[$key]['cust_id'] = $tot_customer['cust_id'];
        $tot_customerArray[$key]['fullname'] = $tot_customer['fullname'];
        $tot_customerArray[$key]['source'] = $tot_customer['source'];
        $tot_customerArray[$key]['referral'] = $tot_customer['referral'];


        //All Total Visit Counts
        $Where3     = $Where." AND cust_id IN (".$tot_customer['cust_id'].") AND status = 'A'";
        $tot_customerArray[$key]['allTotal'] = $usr->TotalRows("XML_ro",$Where3);

        $Whr    = " 1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";

        if((isset($_REQUEST['fdate']) && $_REQUEST['fdate']!= '') && (isset($_REQUEST['tdate']) && $_REQUEST['tdate'] != '')) {

                $fdate = $Gen->Date_Format($_REQUEST['fdate']);
                $tdate = $Gen->Date_Format($_REQUEST['tdate']);

        }
       
        $tot_resVisitAry =    array();
        $WhereFirstVisit	= $Whr." AND cust_id = '".$tot_customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 0,5 ";
        $fieldsro = "id, ro_id, cust_id, sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales";
        $tot_resVisitAry = $usr->GetSelWhere("XML_ro", $fieldsro, $WhereFirstVisit);
        //echo '<pre>';print_r($tot_resVisitAry);exit;
        $tot_visitCnt   = count($tot_resVisitAry);
       
        // To calculate Total Gross Sale
        //$tot_totalGrossSale	= 0;
        foreach($tot_resVisitAry as $key1=>$tot_visitArr) {
            
            if($key1 < 3) {
                if(!empty($tot_visitArr)) {
                   
                    if($key1==0){
                        $tot_totalGrossSale_ro1 += $tot_visitArr['grossSales'];  
                      //  echo $key1;
                        $ro1_avg =$ro1_avg+1;
                      //  echo '--'.$ro1_avg;
                    }elseif($key1==1){
                        $tot_totalGrossSale_ro2 += $tot_visitArr['grossSales'];       
                        $ro2_avg =$ro2_avg+1;
                        
                    }else{
                       $tot_totalGrossSale_ro3 += $tot_visitArr['grossSales'];       
                       $ro3_avg =$ro3_avg+1;
                    }
                    
                    $tot_totalGrossSale += $tot_visitArr['grossSales']; 
                    $tot_customerArray[$key]['VisitArray'][$key1]   = $tot_visitArr;
                    
                }
            }
        }
        $tot_newVisitCnt    = count($tot_customerArray[$key]['VisitArray']);
        if($tot_newVisitCnt < 3) {
            for($j=$tot_newVisitCnt;$j<=2;$j++) {
                if(!isset($tot_customerArray[$key]['VisitArray'][$j]['grossSales'])) {
                    $tot_customerArray[$key]['VisitArray'][$j]['grossSales'] = '-1';
                }
            }
        }
        
        $tot_customerArray[$key]['tot_grossTotal']   = $tot_totalGrossSale;
        $total_ro = $total_ro+$tot_customerArray[$key]['tot_grossTotal'];
        
        //$mixedArray = array();
        
       
    }
    if($ro1_avg>0){
        $ro1_avg_amt =$tot_totalGrossSale_ro1/$ro1_avg;
    }
    if($ro2_avg>0){
        $ro2_avg_amt =$tot_totalGrossSale_ro2/$ro2_avg;
    }
    if($ro3_avg>0){
        $ro3_avg_amt =$tot_totalGrossSale_ro3/$ro3_avg;
    }
     
    //calculate total visitors (ro1+ro2+ro3)
    $total_visitors = $ro1_avg+$ro2_avg+$ro3_avg;
    //total_rogross_averga
    if($total_visitors >0){
        $total_rogross_avg = $tot_totalGrossSale/$total_visitors;
    }else{
         $total_rogross_avg = $tot_totalGrossSale;
    }
    
      
    
$ro_statsArray = array();
$ro_statsArray['tot_totalGrossSale_ro1']=$tot_totalGrossSale_ro1;
$ro_statsArray['tot_totalGrossSale_ro2']=$tot_totalGrossSale_ro2;
$ro_statsArray['tot_totalGrossSale_ro3']=$tot_totalGrossSale_ro3;
$ro_statsArray['ro1_avg']=$ro1_avg_amt ;
$ro_statsArray['ro2_avg']=$ro2_avg_amt ;
$ro_statsArray['ro3_avg']=$ro3_avg_amt ;
$ro_statsArray['total_ro']=$tot_totalGrossSale; 
$ro_statsArray['ro1_visit']=$ro1_avg;
$ro_statsArray['ro2_visit']=$ro2_avg;
$ro_statsArray['ro3_visit']=$ro3_avg;$total_visitors;
$ro_statsArray['total_visitors']=$total_visitors; 
$ro_statsArray['total_rogross_avg']=$total_rogross_avg;
$ro_statsArray['cust_totalvisits']=$cust_totalvisits;
     //echo '<pre>';print_r($ro_statsArray);exit;
    //end of averages and totals
    
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
    $smarty->assign('allsource', $allsourceAry);
    $smarty->assign('ro_stats', $ro_statsArray);
    
  /*  $smarty->assign('total_ro1', $tot_totalGrossSale_ro1);
    $smarty->assign('total_ro2', $tot_totalGrossSale_ro2);
    $smarty->assign('total_ro3', $tot_totalGrossSale_ro3);
    $smarty->assign('total_ro', $total_ro);
    $smarty->assign('ro1_avg', $ro1_avg);
    $smarty->assign('ro2_avg', $ro2_avg);
    $smarty->assign('ro3_avg', $ro3_avg);*/
    
    $smarty->display('customer-source-referral-demo.tpl');
?>



