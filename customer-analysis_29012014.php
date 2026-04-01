<?php
    require_once("includes/application_start.php");
    require_once("includes/login_check.php");
    $smarty->assign('breadcrumb','Customer Analysis');
    
    $usr    = new General;
    $Page   = "customers";
    $page1  = "map";
        
    $customersArray = array();
    $totalROB4Discount      =   0;
    $totalROAfterDiscount   =   0;
    $averageROB4Discount    =   0;
    $averageROAfterDiscount =   0;
    $fields	= " id,cust_id,fullname";
    $Table	= "XML_customers ";
    $customersArray		= $usr->GetSelWhere($Table,$fields,$Where);
    $allArray       = array();
    $currentYear    = date('Y');
    $lastYear       = $currentYear - 4;
    $yearDifference = $currentYear - $lastYear;
    $allArray       = array();
    for($i=$currentYear, $j =0; $i > $lastYear; $i--,$j++){
        $allArray['years'][$j] = $i;

         // No. of customers by YEAR
        $custTotalClass = '';
        $custArray  = array();
        $Where1  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(reg_date) = '".$i."'";
        $fields1 = "cust_id";
        $Table1  = "XML_customers";
        $custArray  = $usr->GetSelWhere($Table1, $fields1, $Where1);

        $totalCustArray = array();
        foreach($custArray as $key=>$cust){
          $totalCustArray[] = $cust['cust_id'];
        }
        $allArray['grossCustomers'][$j] = count($totalCustArray);

        // Total RO's
        $roArray	= array();
        $Where2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
        $fields2    = "count(ro_id) as roCnt";
        $Table2	 = "XML_ro";
        $roArray = $usr->GetSelWhere($Table2,$fields2,$Where2);
        $allArray['grossRos'][$j] = $roArray['0']['roCnt'];

        // Gross Vehicles by YEAR
        $vehicleArray    = array();
        $Where3	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(vreg_date)= '".$i."'";
        $fields3 = "count(vehicle_id) as Vehicles ";
        $Table3	= "XML_vehicle";
        $vehicleArray = $usr->GetSelWhere($Table3,$fields3,$Where3);

        $allArray['grossVehicles'][$j] = $vehicleArray['0']['Vehicles'];

        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where4	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
        $fields4 = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales, sum(discountamount) as discountamount";
        $Table4	= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table4, $fields4, $Where4);

        //echo "<pre>".$i;print_r($grossSaleArray);

        $allArray['grossSales'][$j] = $grossSaleArray['0']['grossSales'];
        $allArray['discount'][$j] = $grossSaleArray['0']['discountamount'];
        $allArray['netSale'][$j]    = $allArray['grossSales'][$j] - $allArray['discount'][$j];

        // Total RO Before Discount
       // $totalROB4Discount  = $totalROB4Discount + $allArray['grossSales'][$j];
        $averageROB4Discount    = $grossSaleArray['0']['grossSales'] / $allArray['grossRos'][$j];
        $allArray['averageROB4Discount'][$j] = $averageROB4Discount;


        // Total RO After Discount
        $roAfterDiscount    = $grossSaleArray['0']['grossSales'] - $allArray['discount'][$j];
        //$totalROAfterDiscount  = $totalROAfterDiscount + $roAfterDiscount;
        $averageROAfterDiscount = $roAfterDiscount / $allArray['grossRos'][$j];
        $allArray['averageROAfterDiscount'][$j] = $averageROAfterDiscount;

        //echo "<br>".$totalROB4Discount."--->".$totalROAfterDiscount."<br>";
        //echo "<br>".$allArray['averageROB4Discount'][$j]."--->".$allArray['averageROAfterDiscount'][$j]."<br>";

        //Gross Parts Sales 
        $partsArray    = array();
        $Where6 = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
        $fields6 = "sum(partsamount) as partsamount";
        $Table6	= "XML_ro";
        $partsArray = $usr->GetSelWhere($Table6, $fields6, $Where6);
        $allArray['grosspartsSales'][$j] = $partsArray['0']['partsamount'];


        // Gross Labor Sales
        $laborArray    = array();
        $Where5	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
        $fields5 = "sum(laboramount) as labor";
        $Table5	= "XML_ro";
        $laborArray = $usr->GetSelWhere($Table5, $fields5, $Where5);
        $allArray['grosslaborSales'][$j] = $laborArray['0']['labor'];

        if($allArray['grosslaborSales'][$j] != 0){
            $allArray['PartsToLaborRatio'][$j]  = $allArray['grosspartsSales'][$j]/$allArray['grosslaborSales'][$j];
        } else {
            $allArray['PartsToLaborRatio'][$j]  = 0;
        }

        //Parts Sales as % of Sales (Gross Parts Sales / Net Sales)
        if($allArray['netSale'][$j] != 0) {
            $allArray['percentagePartsSales'][$j]   = ($allArray['grosspartsSales'][$j] / $allArray['netSale'][$j])*100;
        } else {
            $allArray['percentagePartsSales'][$j]   = 0;
        }

       //Labor Sales as a % of Sales - (HIHTIC): Gross Labor Sales / Row 9
        if($allArray['netSale'][$j] != 0) {
        $allArray['percentageLaborSales'][$j]   = ($allArray['grosslaborSales'][$j]/ $allArray['netSale'][$j])*100;
        } else {
        $allArray['percentageLaborSales'][$j]   = 0;
        }

        //Average Discount Per RO - (HIHTIC): Row 8 / Row 2
        if($allArray['grossRos'][$j] != 0) {
                $allArray['AverageDiscountRO'][$j]  = $allArray['discount'][$j] / $allArray['grossRos'][$j];
                 } else {
            $allArray['AverageDiscountRO'][$j]   = 0;
        }


        //Comparitive Gross Sale
        if($j == 0){
            $allArray['comparitiveGrossSale'][$j]   = 0;
        } elseif($j < $yearDifference) {

            if($allArray['grossSales'][$j] != 0){
                if($j <= $yearDifference-1) {
                    $allArray['comparitiveGrossSale'][$j-1]   = $allArray['grossSales'][$j-1] - $allArray['grossSales'][$j];
                    if($j == $yearDifference-1) {
                        $allArray['comparitiveGrossSale'][$j]   = 0;
                    }
                }
            }

        }
    }
         
         
    for($x =0; $x<=$yearDifference; $x++){
       if($x == 0){
           $allArray['variance'][$x]  = 0;
       } elseif($x <= $yearDifference){
          if($allArray['comparitiveGrossSale'][$x] != 0) {
              if($x <= $yearDifference-1){
                   $allArray['variance'][$x-1]  = $allArray['comparitiveGrossSale'][$x-1] / $allArray['comparitiveGrossSale'][$x];
                   if($x == $yearDifference-1) {
                       $allArray['variance'][$x] = 0;
                   }
              }
          } else {
              $allArray['variance'][$x-1] = 0;
          }
       }
    }
    //echo '<pre>';print_r($allArray);exit;
    $smarty->assign("Page",$Page);
    $smarty->assign("allArray",$allArray);
    $smarty->display('customer-analysis.tpl');
