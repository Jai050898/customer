<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    
    $usr    = new General;
    $smarty->assign('breadcrumb','Export Customer Reports');
    
    $Page = "product";
    $smarty->assign('Page',$Page);
    $customerArray = array();
    /********** CUSTOMER DATA for Download ***********/    
    $Where  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' ";
        
   if(isset($_REQUEST['sdate']) && $_REQUEST['sdate'] != "" && isset($_REQUEST['edate']) && $_REQUEST['edate'] != "") {
             $sdate = $Gen->Date_Format($_REQUEST['sdate']);
             $edate = $Gen->Date_Format($_REQUEST['edate']);
            
             $TotalWhr   .= " AND transaction_date > '".date('Y-m-d 00:00:00',strtotime($sdate))."' AND transaction_date <= '".date('Y-m-d 23:59:59',strtotime($edate))."'";
    
        // Get Customers Ids From Ro Table
            //get between range 
            if(isset($_REQUEST['start_range']) && isset($_REQUEST['end_range'])){
             $start_amt = $_REQUEST['start_range'];
             $end_amt = $_REQUEST['end_range'];   
            }else{
                $start_amt = 0;
             $end_amt = 0;
            }
             
        $Where1 = $Where.''.$TotalWhr." AND cust_id != '' AND cust_id != '0' GROUP BY cust_id ";
     
        $total_temp =  $usr->GetSelWhere("XML_ro","id",$Where1);
        $total = count($total_temp);
        
        $limit	= 25;
        $pageNum = 1; 					

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

        if (isset($_REQUEST['sortby']) && $_REQUEST['sortby'] != '') {
            $SortBy = $_REQUEST['sortby'] . " " . $getSort;
        }
        
        
        $Where1		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;
        
        $custAry = array();
        $custAry = $usr->GetSelWhere("XML_ro","cust_id",$Where1);

        $custArray = array();
        foreach($custAry as $cust) {
            $custArray[] = $cust['cust_id'];
        }
        //echo "<pre>";print_r($custArray);//exit;
        //$custIds = implode(',', $custArray);

        $customerArray = array();

        foreach($custArray as $key=>$cust){
            $spent_total = 0;
            $totalArray = array();
            
            // Get Customer Details from Customer table
            $custDetAry = array();
            $Where2 = $Where." AND cust_id != '' AND cust_id != '0' AND cust_id = '".$cust."' AND fullname != '' Group By cust_id";
            $custDetAry = $usr->GetSelWhere("XML_customers","id, cust_id, fullname, address1, city, state, zip",$Where2);
            if(!empty($custDetAry)) {
                $customerArray[$key]    = $custDetAry['0'];

                // Get Amount Spent During the Period from RO Table
                $sale_before_discount = "(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount)";
                $Where3 = $Where."".$TotalWhr."  AND cust_id = '".$cust."' AND status = 'A'";
                $totalArray  = $usr->GetSelWhere("XML_ro",$sale_before_discount."as total",$Where3);
            
                foreach($totalArray as $total1){ 
                    $spent_total+= $total1['total'];
                }
                //echo "<pre>".$spent_total;print_r($totalArray);exit; 
                  $rebate_percent = ($spent_total * $_REQUEST['percentage'])/100;
                
                 if($start_amt > 0 && $end_amt >0 ){
                      $rebate_val = intval($rebate_percent);
                          if($rebate_val >= $start_amt && $rebate_val <= $end_amt){
                               $customerArray[$key]['amountSpent']   = $spent_total;
                               $customerArray[$key]['rebate']   = ($customerArray[$key]['amountSpent'] * $_REQUEST['percentage'])/100;
                                   $USDollar = number_format($customerArray[$key]['rebate'], 2,'.',','); // put it in decimal format, rounded  
                            $printTotNet = convert_number($USDollar);  //convert to words (see function above)  
                            $x = $USDollar;  
                            $explode = explode('.', $x);   //separate the cents  
                            $printDolCents = $printTotNet . ' Dollars and ' . $explode[1] . ' Cents';  
                            $table .= $printDolCents;  // print the line with dollars words and cents in numerals                  
                           
                           }
                }else{
                            $customerArray[$key]['amountSpent']   = $spent_total;
                            $customerArray[$key]['rebate']   = ($customerArray[$key]['amountSpent'] * $_REQUEST['percentage'])/100;
                            $USDollar = number_format($customerArray[$key]['rebate'], 2,'.',','); // put it in decimal format, rounded  
                            $printTotNet = convert_number($USDollar);  //convert to words (see function above)  
                            $x = $USDollar;  
                            $explode = explode('.', $x);   //separate the cents  
                            $printDolCents = $printTotNet . ' Dollars and ' . $explode[1] . ' Cents';  
                            $table .= $printDolCents;  // print the line with dollars words and cents in numerals  
                                   
                }
                
                
                
            }
            
             
        }
      //  echo "<pre>";print_r($customerArray);exit;
       
        
        $srcpath = "percentage=".$_REQUEST['percentage']."&sdate=".$_REQUEST['sdate']."&edate=".$_REQUEST['edate']."&start_range=".$_REQUEST['start_range']."&end_range=".$_REQUEST['end_range']."&page=";
        include('includes/generate_pages.php');

        $smarty->assign("sortioption",$sortioption);
        $smarty->assign("sortimoption",$sortimoption);

        // for record from, to and Total display
        $records_to = (($pageNum * $limit) < $total ? ($pageNum * $limit) : $total);

        $smarty->assign("records_from",$offset+1);
        $smarty->assign("limit",$limit);
        $smarty->assign("records_to",$records_to);
        $smarty->assign("total",$total);
        
    }
 
    //dollar to word conversion funciton
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




   
    //echo "<pre>";print_r($customerArray);exit;
    $smarty->assign('customer', $customerArray);
    $smarty->display('rebate_check.tpl');
?>
