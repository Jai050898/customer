<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
require_once("../class/export_excel_class.php");
$usr 		= new General;


$fn="keywordbrands".time().".csv";
$excel_obj=new ExportExcel("$fn");	
/*****section to get the details from data base*********************/
 $MMSUsersAry    = array();
    $MMSUsersAry 	= $usr->GetSelWhere("XML_customers","Distinct(company_id)"," 1=1");
    $mmsAry = array();
    if(!empty($MMSUsersAry)){
        foreach($MMSUsersAry as $mmsuser){
            $mmsAry[] = $mmsuser['company_id'];
        }
    }
    $userIds    = implode(",", $mmsAry);


    //echo "<pre>";print_r($_REQUEST);exit;
  $Where		= "1=1 AND A.status != 'D' AND xml_id IN (".$userIds.") AND is_staff='N'";
    $Table		= "tbl_users A ";

    $Fields		= "A.xml_id, A.email,A.company_name";

    $total		= $usr->TotalRows($Table,$Where);

    $limit		= 25;
    $pageNum 	= 1; 					
    if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
       $pageNum = $_REQUEST['page'];
    $offset 	= ($pageNum - 1) * $limit;
    /*********** To Get the Count of Total Users in the Site ********/

 
    if($_REQUEST['sortoption']=='desc')
    {
            $sortioption='asc';
            $getSort='desc';	
            $sortimoption='up';
            $smarty->assign("sortoption",$_REQUEST['sortoption']); 
    }
    else
    {
            $sortioption='desc';
            $getSort='asc';	
            $sortimoption='down';
    }
    $SortBy		= " A.company_name ".$getSort;

    if(isset($_REQUEST['sortby']) && $_REQUEST['sortby']!='')
            $SortBy	= $_REQUEST['sortby']." ".$getSort;		

    $Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

    $Users 	= $usr->GetSelWhere($Table,$Fields,$Where);
    //echo "<pre>";print_r($Users);exit;
    
    $currentYear        = date('Y');
    $lastYear           = $currentYear - 1;
    foreach($Users as $key=>$user){
        
        // Customer Total
        $Where		= "1=1 AND company_id = '".$user['xml_id']."'";
        $Table		= "XML_customers";
        $custTotal	= $usr->TotalRows($Table, $Where);
        $Users[$key]['custTotal']   = $custTotal;
        
        
        // Customer Total in 2013
        $Where		= "1=1 AND company_id = '".$user['xml_id']."' AND YEAR(transaction_date) = '".$lastYear."' GROUP BY cust_id";
        $Table		= "XML_ro";
        $custTotalLastYear	= $usr->GetSelWhere($Table,"cust_id", $Where);
        $Users[$key]['custTotalLastYear']   = count($custTotalLastYear);
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$user['xml_id']."' AND YEAR(transaction_date) = '".$lastYear."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '') {
            $Users[$key]['grossSale']   = $grossSaleArray[0]['gross'];
        } else {
            $Users[$key]['grossSale']   = 0;
        }
        
        
        // Total RO's
        $Where2		= "1=1 AND company_id = '".$user['xml_id']."' AND YEAR(transaction_date) = '".$lastYear."'";
        $Table2		= "XML_ro";
        $rototal	= $usr->TotalRows($Table2,$Where2);
        $Users[$key]['roTotal']   = $rototal;
        
        // Average RO's
        if($Users[$key]['roTotal'] != 0) {
            $Users[$key]['averageRO']   =   $Users[$key]['grossSale'] / $Users[$key]['roTotal'];
        } else {
            $Users[$key]['averageRO']   =   0;
        }
       $Users[$key]['averageRO']= number_format((float)$Users[$key]['averageRO'], 2, '.', '');
        
        //add dollar
        $Users[$key]['grossSale'] = '$'.$Users[$key]['grossSale'];
        
         /****** For Calculating Average Customer Lifetime Value ******/
        $RODetails  = array();
        // RO Get All RO Details
        $tbl = "XML_ro_details";
        $flds = "sum(extendedsale) as total_extendedsale";
        $Whr1 = " company_id = '".$user['xml_id']."'";
       $RODetails = $usr->GetSelWhere($tbl,$flds,$Whr1);
        $total_extendedsale = '';
        $total_extendedsale = $RODetails['0']['total_extendedsale'];
        //echo $total_extendedsale;exit;
        if($Users[$key]['custTotal'] != '' && $Users[$key]['custTotal'] != 0) {
            $avgCustLifeVal = $total_extendedsale/$Users[$key]['custTotal'];
            //echo $avgCustLifeVal;exit;
        } else {
            $avgCustLifeVal = 0; 
        }
$avgCustLifeVal=        number_format((float)$avgCustLifeVal, 2, '.', '');
        $Users[$key]['avgCustLifetimeValue']    = '$ '.$avgCustLifeVal;
        
        
        
        // total average year of all visitors for Last 12 Months    
        $last12monthsVisitorsAllYrsAry = array();
        $last12monthsVisitorsAllYrsAry	= $usr->GetSelWhere("XML_ro", "id, cust_id, company_id, MIN( transaction_date ) , MAX( transaction_date ) , DATEDIFF(MAX(transaction_date) , MIN(transaction_date)) AS days", "company_id = '".$user['xml_id']."' AND transaction_date >= DATE_SUB( NOW( ) , INTERVAL 12 MONTH )  GROUP BY cust_id");
        //echo "<pre>";print_r($last12monthsVisitorsAllYrsAry);exit;
        $last12monthsVisitsCnt = count($last12monthsVisitorsAllYrsAry);
        $last12monthsallVisitsCnt=0;
        foreach ($last12monthsVisitorsAllYrsAry as $last12monthsVisitsAry){
            $last12monthsallVisitsCnt   += $last12monthsVisitsAry['days'];
        }
        
        if($last12monthsVisitsCnt != 0 && $last12monthsVisitsCnt != ''){
            $last12monthsavgVisits1  = $last12monthsallVisitsCnt / $last12monthsVisitsCnt;
        } else {
            $last12monthsVisitsCnt1 = 0;
        }
       /* $years = ($last12monthsavgVisits1 / 365) ; // days / 365 days
        $years = floor($years); // Remove all decimals

        $month = ($last12monthsavgVisits1 % 365) / 30.5; // I choose 30.5 for Month (30,31) ;)
        $month = floor($month); // Remove all decimals

        $days = ($last12monthsavgVisits1 % 365) % 30.5; // the rest of days

        $last12monthsavgVisits  = $years." : ".$month." : ".$days;
        
        $Users[$key]['last12monthsavgVisits']    = $last12monthsavgVisits;
        */
          $last12monthsavgVisits1 = floor($last12monthsavgVisits1);
       $Users[$key]['last12monthsavgVisits']    = $last12monthsavgVisits1.' days';
        
        //get date 
         $getdateAry	= $usr->GetSelWhere("XML_ro", "cust_id, company_id,created_date", "company_id = '".$user['xml_id']."' order by id desc limit 1");
               //  ("XML_ro", "id, cust_id, company_id,created_date company_id = '".$user['xml_id']."' order by id desc limit 1");
         foreach ($getdateAry as $udateAry){
            $uniqueD_date   = $udateAry['created_date'];
        }
        $Users[$key]['invoicedate']    = $uniqueD_date;   
        // total average years of all visitors for All Time
        $totalVisitorsAllYrsAry = array();
        $totalVisitorsAllYrsAry	= $usr->GetSelWhere("XML_ro", "id, cust_id, company_id, MIN(transaction_date) , MAX(transaction_date) , DATEDIFF( MAX(transaction_date) , MIN( transaction_date ) ) AS days", "company_id = '".$user['xml_id']."' GROUP BY cust_id");
        //echo "<pre>";print_r($totalVisitorsAllYrsAry);exit;
        $totalVisitsCnt = count($totalVisitorsAllYrsAry);
        $allVisitsCnt=0;
        foreach ($totalVisitorsAllYrsAry as $allVisitsAry){
            $allVisitsCnt   += $allVisitsAry['days'];
        }
        if($totalVisitsCnt != '' && $totalVisitsCnt!= 0) {
            $avgVisits  = $allVisitsCnt / $totalVisitsCnt;
        } else {
            $avgVisits  = 0;
        }
        
        /// Average Visits for all Time
   /*     $years2 = ($avgVisits / 365) ; // days / 365 days
        $years2 = floor($years2); // Remove all decimals

        $month2 = ($avgVisits % 365) / 30.5; // I choose 30.5 for Month (30,31) ;)
        $month2 = floor($month2); // Remove all decimals

        $days2 = ($avgVisits % 365) % 30.5; // the rest of days

        $avgVisits  = $years2." : ".$month2." : ".$days2;
        
        $Users[$key]['avgVisits']    = $avgVisits;
        
        */
         $avgVisits =floor($avgVisits);
        $Users[$key]['avgVisits']    = $avgVisits.' days';
         /***********  total count of emails Who have last visited **********/
        // Find cust Ids Who have last Visited
        $lastVisited    = array();
        $Fields2        = "cust_id";
        $Where2         = " company_id = '".$user['xml_id']."' AND  status = 'A' Group BY cust_id";
        $lastVisited    = $usr->GetSelWhere("XML_ro",$Fields2, $Where2);



        //echo "<pre>"; print_r($lastVisited);exit;
        $lastVisitedCusts   = array();
        foreach($lastVisited as $last){
            $lastVisitedCusts[]   = $last['cust_id'];
        }

        $lastVisitedCustIds = implode(',', $lastVisitedCusts);
        //echo $lastVisitedCustIds;exit;

        // Find Cusotmers Who have Emails
        $LastVisitedCustEmailCnt     = $usr->TotalRows("XML_customers","cust_id IN (".$lastVisitedCustIds.") AND email != '' AND company_id = '".$user['xml_id']."'");
        $Users[$key]['LastVisitedCustEmailCnt']    = $LastVisitedCustEmailCnt;   
        
    }
	
        
        // EXPORT data to CSV
   
        $fileName = "ExtractionList".date('Y-m-d');
        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=".$fileName.".csv"); 
        fputcsv($output, array('ID','Customer Email','Customer Name','Customer total('.$lastYear.')','Customer total','gross sale(2013)','Ro total(2013)','Average Ro(2013)','Average customers lifetime value','12 mo lifespan','Date','Total life span','Total email'));
           foreach($Users as $cust) {
             fputcsv($output, $cust);

        }
        fclose($output) or die("Can't close php://output");   
  

?>
