<?php
require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','New Customers Data');
    $usr 		= new General;
    $Page = 'customers';
   
    
   
    
     $Where  = "1=1 AND A.company_id = '".$_SESSION['User']['xml_id']."' AND B.company_id = '".$_SESSION['User']['xml_id']."' ";

   
    
    if(isset($_GET['fdate']) && $_GET['fdate']!=''&& isset($_GET['tdate']) && $_GET['tdate']!='') {
        
         $fdate =$Gen->Date_Format($_GET['fdate']);
 	$tdate = $Gen->Date_Format($_GET['tdate']);
   
    
    // To Fetch Total ROws
      $fields	= "DISTINCT(B.cust_id),A.fullname,A.email,A.address1,A.city,A.zip,A.phone2,max(B.transaction_date) as transaction_date,A.state";
      $Where		.= "and B.transaction_date
BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' AND B.cust_id NOT IN ( SELECT cust_id FROM `XML_ro` WHERE 1 =1 AND transaction_date > '".$tdate." 23:59:59')";
      
      $Where		.= " GROUP BY B.cust_id ORDER BY A.fullname ASC";
      $Table	= "XML_customers as A JOIN XML_ro as B on A.cust_id= B.cust_id";
       $customersArray		= $usr->GetSelWhere($Table,$fields,$Where);
      
        // EXPORT data to CSV
      //get customer total spent
       foreach($customersArray as $key=>$customer) {

        $totalVisitsYear = 0;
        $totalVisitsAll = 0;
        $customerArray[$key]['cust_id'] = $customer['cust_id'];
        


        $Whr    = " 1=1 AND company_id = '".$_SESSION['User']['xml_id']."'";

        
        // To calculate Gross Sales
        $resVisitAry =    array();
        $WhereFirstVisit	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id  ";
        $fieldsro = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales";
        $resVisitAry = $usr->GetSelWhere("XML_ro", $fieldsro, $WhereFirstVisit);
        $visitCnt   = count($resVisitAry);
        
       
        $totalGrossSale	='$ 0';
        foreach($resVisitAry as $visitArr) {
            $totalGrossSale += $visitArr['grossSales'];
        }
         // To calculate Total Gross Sale

        //get last login spent
        $WhereFirstVisit1	= $Whr." AND cust_id = '".$customer['cust_id']."' GROUP BY id ORDER BY transaction_date ASC LIMIT 1";
        $fieldsro = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as last_grossSales";
        $lastVisitAry = $usr->GetSelWhere("XML_ro", $fieldsro, $WhereFirstVisit1);
        $lastvisitCnt   = count($lastVisitAry);
        
       
        $last_totalGrossSale	='$ 0';
        foreach($lastVisitAry as $lastvisitArr) {
            $last_totalGrossSale += $lastvisitArr['last_grossSales'];
        }
        //eof last login spent
        //echo '<pre>';print_r($mixedArray);
        $customersArray[$key]['last_totalGrossSale']= '$ '.$last_totalGrossSale;
         $customersArray[$key]['totalGrosssale']='$ '.$totalGrossSale;
        
     
   }
   //get customer total spent
       
        
      if(count($customersArray)>0){
          $fileName = "last-visited-Report".date('Y-m-d');
        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=".$fileName.".csv"); 
        fputcsv($output, array('Customer ID','Name','Email','Address','City','Zip','Phone','Last visited date','state','last spent','total spent'));
        
        foreach($customersArray as $cust) {
            fputcsv($output, $cust);
            
          
        }
        fclose($output) or die("Can't close php://output");   
      }
        
       //header("Location:".SITEURL."/customer-last-visits.php");
        
    exit();
       
   
        
    }
    
     
?>




