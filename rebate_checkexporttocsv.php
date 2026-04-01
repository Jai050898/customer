<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    
    
    
    //echo "<pre>";print_r($_REQUEST);exit;
    
    /********** CUSTOMER DATA for Download ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
        $unbatch = $_REQUEST['unbatch'];
        $not_batch ='';
        if(count($unbatch) >0){
            foreach($unbatch as $val){
                $not_batch .= "'".$val."',";
            }
            $un_batch_id = substr($not_batch,0, -1);
            $unbatch_condition = 'AND cust_id not in ('.$un_batch_id.')';
        }else{
            $unbatch_condition='';
        }
      
    if(isset($_REQUEST['percentage']) && $_REQUEST['percentage']!='' && isset($_REQUEST['start_date']) && $_REQUEST['end_date']!='') {
                $sdate = $Gen->Date_Format($_REQUEST['start_date']);
                $edate = $Gen->Date_Format($_REQUEST['end_date']);
                if(isset($_REQUEST['start_range']) && isset($_REQUEST['end_range'])){
                    $start_range = $_REQUEST['start_range'];
                    $end_range = $_REQUEST['end_range'];                    
                }else{
                    $start_range =0;
                    $end_range =0;                    
                }

  $TotalWhr   .= " AND transaction_date > '".date('Y-m-d 00:00:00',strtotime($sdate))."' AND transaction_date <= '".date('Y-m-d 23:59:59',strtotime($edate))."'";
         
           //get between range 
            if(isset($_REQUEST['start_range']) && isset($_REQUEST['end_range'])){
             $start_amt = $_REQUEST['start_range'];
             $end_amt = $_REQUEST['end_range'];   
            }else{
                $start_amt = 0;
             $end_amt = 0;
            }
        // Get Customers Ids From Ro Table
        $custAry = array();
        $Where1 = $Where.''.$TotalWhr.''.$unbatch_condition." AND cust_id != '' AND cust_id != '0' GROUP BY cust_id ";
        $custAry = $usr->GetSelWhere("XML_ro","cust_id",$Where1);

        $custArray = array();
        foreach($custAry as $cust) {
            $custArray[] = $cust['cust_id'];
        }

        $customerArray = array();

        foreach($custArray as $key=>$cust){
            $spent_total = 0;
            $totalArray = array();
            
            // Get Customer Details from Customer table
            $custDetAry = array();
            $Where2 = $Where." AND cust_id != '' AND cust_id != '0' AND cust_id = '".$cust."' AND fullname != '' Group By cust_id";
            $custDetAry = $usr->GetSelWhere("XML_customers","id, cust_id, fullname, address1, city, state, zip",$Where2);
            if(!empty($custDetAry)) {
                $customerArray[$key]['xml_cust_id']    = $custDetAry['0']['id'];
                if($custDetAry['0']['cust_id'] != '')
                    $customerArray[$key]['cust_id']    = $custDetAry['0']['cust_id'];
                else
                    $customerArray[$key]['cust_id']    = "NULL";
                if($custDetAry['0']['fullname'] != '')
                    $customerArray[$key]['fullname']    = $custDetAry['0']['fullname'];
                else
                    $customerArray[$key]['fullname']    = "NULL";
                if($custDetAry['0']['address1'] != '')
                    $customerArray[$key]['address1']    = $custDetAry['0']['address1'];
                else
                    $customerArray[$key]['address1']    = "NULL";
                if($custDetAry['0']['city'] !='')
                    $customerArray[$key]['city']    = $custDetAry['0']['city'];
                else
                    $customerArray[$key]['city']    = "NULL";
                if($custDetAry['0']['state'] != '')
                    $customerArray[$key]['state']    = $custDetAry['0']['state'];
                else
                    $customerArray[$key]['state']    = "NULL";
                if($custDetAry['0']['zip'] != '')
                    $customerArray[$key]['zip']    = $custDetAry['0']['zip'];
                else
                    $customerArray[$key]['zip']    = "NULL";
                $customerArray[$key]['company_id'] = $_SESSION['User']['xml_id'] ;
                $customerArray[$key]['company_name']=$_SESSION['User']['company_name'];
                $customerArray[$key]['batch_date'] = date('Y-m-d H:i:s');
                $customerArray[$key]['batch_start_date']= $sdate;
                $customerArray[$key]['batch_end_date']= $edate;
                $customerArray[$key]['start_range']=$start_range;
                $customerArray[$key]['end_range']=$end_range;
                $customerArray[$key]['rebate_percent']=$_REQUEST['percentage'];
                // Get Amount Spent During the Period from RO Table
                $sale_before_discount = "(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount)";
                $Where3 = $Where." ".$TotalWhr." ".$unbatch_condition."  AND cust_id = '".$cust."' AND status = 'A'";

                $totalArray  = $usr->GetSelWhere("XML_ro",$sale_before_discount."as total",$Where3);
                foreach($totalArray as $total){ 
                                $spent_total+= $total['total'];
                }
                //echo "<pre>".$spent_total;print_r($totalArray);exit;   
                if($spent_total != '')
                    $customerArray[$key]['amountSpent']   = $spent_total;// $customerArray[$key]['amountSpent']   = number_format($spent_total, 2, ',', '.');
                else
                    $customerArray[$key]['amountSpent']   =0;
               
                if($customerArray[$key]['amountSpent'] != '' && $_REQUEST['percentage'] != '' ) {
                     $rebate = ($customerArray[$key]['amountSpent'] * $_REQUEST['percentage'])/100;
                    $customerArray[$key]['rebate']  = $rebate; //$customerArray[$key]['rebate']  = "$".number_format($rebate, 2, ',', '.');
                    $USDollar = number_format($customerArray[$key]['rebate'], 2,'.',','); // put it in decimal format, rounded  
                            $printTotNet = convert_number($USDollar);  //convert to words (see function above)  
                            $x = $USDollar;  
                            $explode = explode('.', $x);   //separate the cents  
                            $printDolCents = $printTotNet . ' Dollars and ' . $explode[1] . ' Cents';  
                            $customerArray[$key]['rebate_words']= $printDolCents;  // print the line with dollars words and cents in numerals 
                }
                else{
                    $customerArray[$key]['rebate']   = "0.00";
                     $USDollar = number_format($customerArray[$key]['rebate'], 2,'.',','); // put it in decimal format, rounded  
                            $printTotNet = convert_number($USDollar);  //convert to words (see function above)  
                            $x = $USDollar;  
                            $explode = explode('.', $x);   //separate the cents  
                            $printDolCents = $printTotNet . ' Dollars and ' . $explode[1] . ' Cents';  
                            $customerArray[$key]['rebate_words'] = $printDolCents;  // print the line with dollars words and cents in numerals 
                }
            }
            
            //echo "<pre>";print_r($customerArray);
              
        }
       // insert rebate in rebate_table for admin 
        $tableName = 'rebate_batch';
        $duration = $_REQUEST['start_date']." and ".$_REQUEST['end_date'];
        foreach($customerArray as $cust) {
         
          $rebate_percent = ($spent_total * $_REQUEST['percentage'])/100;
                 if($start_range !=0 && $end_range != 0)
                 {       
                          $rebate_val = intval($rebate_percent);
                          

                      if( $cust['rebate'] > $start_range &&  $cust['rebate'] < $end_range)
                        {
                          $insert_qry=$usr->InsertQry($tableName, $cust);
                       }
                }
                else
                {
                       $insert_qry=$usr->InsertQry($tableName, $cust);
                    
                }
        }
        
        // EXPORT data to CSV
      
        $fileName = "RebateReport".date('Y-m-d');
        $output = fopen("php://output",'w') or die("Can't open php://output");
        header("Content-Type:application/csv"); 
        header("Content-Disposition:attachment;filename=".$fileName.".csv"); 
        fputcsv($output, array('S.No','Customer Id','Name','Address','City','State','Zip','Company id','Shop name','Batch date','From','To','Start range','End range','Percentage','Amount spent during '.$duration,'Rebate','Rebate Amount'));
        foreach($customerArray as $cust) {
             $rebate_percent = ($spent_total * $_REQUEST['percentage'])/100;
            if($start_range !=0 && $end_range != 0){
                $rebate_val = intval($rebate_percent);
                if($cust['rebate']> $start_range && $cust['rebate'] < $end_range)
                    {
                      fputcsv($output, $cust);
                    }
          }
          else{
                       fputcsv($output, $cust);
              }
        }
        fclose($output) or die("Can't close php://output");   
       
    
       
   
        
    }
    
       
    function convert_number($number)  
{  
    if (($number < 0) || ($number > 999999999))  
    {  
        return "$number";  
    }  

    $Gn = floor($number / 1000000);  /* Millions (giga) */  
    $number -= $Gn * 1000000;  
    $kn = floor($number / 1000);     /* Thousands (kilo) */  
    $number -= $kn * 1000;  
    $Hn = floor($number / 100);      /* Hundreds (hecto) */  
    $number -= $Hn * 100;  
    $Dn = floor($number / 10);       /* Tens (deca) */  
    $n = $number % 10;               /* Ones */  

    $res = "";  

    if ($Gn)  
    {  
        $res .= convert_number($Gn) . " Million";  
    }  

    if ($kn)  
    {  
        $res .= (empty($res) ? "" : " ") .  
            convert_number($kn) . " Thousand";  
    }  

    if ($Hn)  
    {  
        $res .= (empty($res) ? "" : " ") .  
            convert_number($Hn) . " Hundred";  
    }  

    $ones = array("", "One", "Two", "Three", "Four", "Five", "Six",  
        "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen",  
        "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen",  
        "Nineteen");  
    $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty",  
        "Seventy", "Eigthy", "Ninety");  

    if ($Dn || $n)  
    {  
        if (!empty($res))  
        {  
//            $res .= " and ";  
           $res .= " ";  
        }  

        if ($Dn < 2)  
        {  
            $res .= $ones[$Dn * 10 + $n];  
        }  
        else  
        {  
            $res .= $tens[$Dn];  

            if ($n)  
            {  
                $res .= "-" . $ones[$n];  
            }  
        }  
    }  

    if (empty($res))  
    {  
        $res = "zero";  
    }  

    return $res;  
}  



    
   
    
?>




