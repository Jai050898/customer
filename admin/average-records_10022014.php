<?php
    require_once("../includes/application_start.php");
    require_once("../includes/login_check_admin.php");
    $smarty->assign('breadcrumb','Average Customers');
    
    $usr    = new General;
    $Page   = "customers";
    $page1  = "map";
        
    $customersArray = array();
    $fields	= " id,cust_id,fullname";
    $Table	= "XML_customers ";
    $customersArray		= $usr->GetSelWhere($Table,$fields,$Where);
    $allArray       = array();
    $currentYear    = date('Y');
    $lastYear       = $currentYear - 7;
    $yearDifference = $currentYear - $lastYear;
    
    for($i=$currentYear, $j =0; $i > $lastYear; $i--,$j++){
        $allArray['years'][$j] = $i;
        
        // No. of customers by YEAR
        $custTotalClass = '';
        $custArray  = array();
        $Where1  = "1=1 AND company_id = '".$_REQUEST['user_id']."' AND YEAR(transaction_date) = '".$i."' GROUP BY cust_id";
        $fields1 = "id";
        $Table1  = "XML_ro";
        $custArray  = $usr->GetSelWhere($Table1, $fields1, $Where1);
        //echo '<pre>';print_r($custArray);exit;
        $totalCustArray = array();
        foreach($custArray as $key=>$cust){
          $totalCustArray[] = $cust['id'];
        }
        $allArray['averagegrossCustomers'][$j] = count($totalCustArray)/12;
       //echo $allArray['countgrossCustomers'][$j] = sum($totalCustArray);
		
	//Average customers
	//$allArray['AveragegrossCustomers'][$j]	=$allArray['grossCustomers'][$j] / $allArray['countgrossCustomers'][$j];
	 // To calculate Gross Sales
        $grossSaleArray = array();
        $Where2	= "1=1 AND company_id = '".$_REQUEST['user_id']."' AND YEAR(transaction_date)= '".$i."'";
        $fields2 = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales";
        $Table2	= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table2, $fields2, $Where2);

      
        $allArray['averagegrossSales'][$j] = $grossSaleArray['0']['grossSales']/12;
	  //echo "<pre>".$i;print_r($allArray);
        //Average Gross sales
 //       $allArray['AveragegrossSales'][$j] = $grossSaleArray['0']['grossSales'] / $grossSaleArray['0']['countgrossSales'];
	
	
        //Comparitive Gross Sale
        if($j == 0){
            $allArray['comparitiveGrossSale'][$j]   = 0;
        }
        elseif($j < $yearDifference) 
        {
            if($allArray['averagegrossSales'][$j] != 0)
            {
                if($j <= $yearDifference-1) 
                {
                    $allArray['comparitiveGrossSale'][$j-1]   = $allArray['averagegrossSales'][$j-1] - $allArray['averagegrossSales'][$j];
                    if($j == $yearDifference-1) 
                    {
                        $allArray['comparitiveGrossSale'][$j]   = 0;
                    }
                }
            }

        }
    }
         
         
    for($x =0; $x<=$yearDifference; $x++)
    {
       if($x == 0)
       {
           $allArray['variance'][$x]  = 0;
       } 
       elseif($x <= $yearDifference)
       {
          if($allArray['comparitiveGrossSale'][$x] != 0) 
          {
              if($x <= $yearDifference-1)
              {
                   $allArray['variance'][$x-1]  = $allArray['comparitiveGrossSale'][$x-1] / $allArray['comparitiveGrossSale'][$x];
                   if($x == $yearDifference-1) 
                   {
                       $allArray['variance'][$x] = 0;
                   }
              }
          }
          else 
          {
              $allArray['variance'][$x-1] = 0;
          }
       }
    }
   // echo '<pre>';print_r($allArray);exit;
    $smarty->assign("Page",$Page);
    $smarty->assign("allArray",$allArray);
    $smarty->display('average-records.tpl');
?>    
