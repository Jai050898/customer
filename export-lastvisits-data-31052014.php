<?php
require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','New Customers Data');
    $usr 		= new General;
    $Page = 'customers';
   
    
   
    
     $Where  = "1=1 AND A.company_id = '".$_SESSION['User']['xml_id']."' ";
     
   
    
    if(isset($_GET['fdate']) && $_GET['fdate']!=''&& isset($_GET['tdate']) && $_GET['tdate']!='') {
        
         $fdate =$Gen->Date_Format($_GET['fdate']);
 	$tdate = $Gen->Date_Format($_GET['tdate']);
   
    
    // To Fetch Total ROws
      $fields	= "DISTINCT(B.cust_id),A.fullname,A.email,A.address1,A.city,A.zip,A.phone2,B.transaction_date";
      $Where		.= "and B.transaction_date
BETWEEN '".$fdate." 00:00:00' AND '".$tdate." 23:59:59' AND B.cust_id NOT IN ( SELECT cust_id FROM `XML_ro` WHERE 1 =1 AND transaction_date > '".$tdate." 23:59:59')";
      
      $Where		.= " GROUP BY B.cust_id ORDER BY A.fullname ASC";
      $Table	= "XML_customers as A JOIN XML_ro as B on A.cust_id= B.cust_id";
       $customersArray		= $usr->GetSelWhere($Table,$fields,$Where);
        // EXPORT data to CSV
      
       
      if(count($customersArray)>0){
          $fileName = "last-visited-Report".date('Y-m-d');
        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=".$fileName.".csv"); 
        fputcsv($output, array('Customer ID','Name','Email','Address','City','Zip','Phone','Last visited date'));
        
        foreach($customersArray as $cust) {
            fputcsv($output, $cust);
            
          
        }
        fclose($output) or die("Can't close php://output");   
      }
        
       //header("Location:".SITEURL."/customer-last-visits.php");
        
    exit();
       
   
        
    }
    
     
?>




