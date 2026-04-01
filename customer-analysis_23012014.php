<?php
	require_once("includes/application_start.php");
	require_once("includes/login_check.php");
	$smarty->assign('breadcrumb','Customer Analysis');
	$usr 		= new General;
	    $page = "customers";
    $page1 = "map";
        
    $customersArray=array();
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
            $Where1  = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(reg_date) = '".$i."' GROUP BY cust_id";
            $fields1 = "cust_id";
            $Table1  = "XML_customers";
            $custArray  = $usr->GetSelWhere($Table1, $fields1, $Where1);
            
            $totalCustArray = array();
            foreach($custArray as $key=>$cust){
              $totalCustArray[] = $cust['cust_id'];
            }
            //echo '<pre>'.count($allArray[$i]['customers']);//print_r($allArray);exit;
            $allArray['grossCustomers'][$j] = count($totalCustArray);
            
            // Total RO's
            $roArray	= array();
            $Where2	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
            $fields2    = "count(ro_id) as roCnt";
            $Table2	 = "XML_ro";
            $roArray = $usr->GetSelWhere($Table2,$fields2,$Where2);
            //echo '<pre>'.$i;print_r($roArray);exit;
            
            $allArray['grossRos'][$j] = $roArray['0']['roCnt'];
		
              //echo '<pre>'.$i;print_r($allArray);  
              
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
            $fields4 = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as grossSales, discountamount";
            $Table4	= "XML_ro ";
            $grossSaleArray	= $usr->GetSelWhere($Table4, $fields4, $Where4);
            $allArray['grossSales'][$j] = $grossSaleArray['0']['grossSales'];
            $allArray['discount'][$j] = $grossSaleArray['0']['discountamount'];
            $allArray['netSale'][$j]    = $allArray['grossSales'][$j] - $allArray['discount'][$j];

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
                $allArray['percentagePartsSales'][$j]   = $allArray['grosspartsSales'][$j] / $allArray['netSale'][$j];
            } else {
                $allArray['percentagePartsSales'][$j]   = 0;
            }

           //Labor Sales as a % of Sales - (HIHTIC): Gross Labor Sales / Row 9
            if($allArray['netSale'][$j] != 0) {
            $allArray['percentageLaborSales'][$j]   = $allArray['grosslaborSales'][$j]/ $allArray['netSale'][$j];
            } else {
            $allArray['percentageLaborSales'][$j]   = 0;
            }

            //Average Discount Per RO - (HIHTIC): Row 8 / Row 2
            if($allArray['grossRos'][$j] != 0) {
                    $allArray['AverageDiscountRO'][$j]  = $allArray['discount'][$j] / $allArray['grossRos'][$j];
                     } else {
                $allArray['AverageDiscountRO'][$j]   = 0;
            }
            
            /*
            //Comparitive Gross Sale
            if($j == 0){
                $comaGrossSale  = 0;
                $variance   = 0;
                $allArray['comparitiveGrossSale'][$j]   = 0;
            } elseif($j < $yearDifference) {
                $comaGrossSale  = 0;    
                if($allArray['grossSales'][$j-1] != 0){
                    $k  = $j-1;
                    $comaGrossSale  = $allArray['grossSales'][$j] / $allArray['grossSales'][$j-1];
                    $allArray['comparitiveGrossSale'][$k]   = $comaGrossSale;
                }
            } elseif($j == $yearDifference) {
                $allArray['comparitiveGrossSale'][$j]   = 0;
            }
 	 }
         
         for($x =0; $x<$yearDifference; $x++){
             if($x == 0){
                 echo "<br>first".$x;
                 $allArray['variance'][$x]  = 0;
             } elseif($x < $yearDifference){
                 echo "<br>middle".$x;
                if($allArray['comparitiveGrossSale'][$x] != 0) {
                    $allArray['variance'][$x-1]  = $allArray['comparitiveGrossSale'][$x] / $allArray['comparitiveGrossSale'][$x-1];
                } else {
                    $allArray['variance'][$x-1] = 0;
                }
             } elseif($x == $yearDifference){
                 echo "<br>last".$x;
                 $allArray['variance'][$x]  = 0;
             }
             * */
         }
         
         echo '<pre>';print_r($allArray);exit;
         
         
         
         
        $smarty->assign("allArray",$allArray);
        $smarty->display('customer-analysis.tpl');
         
          /*
                 
		echo $allArray[$key]['Parts Sales '] = $allArray[$i]['grosspartsSales']/$allArray[$key]['netSale'];
                
		//echo '<pre>'.$i;print_r($grossSaleArray);exit;
                
                           
               	
		 
		
		
		
		//Gross Parts Sales 
		$partsArray    = array();
		$Where6	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
		$fields6 = "sum(partsamount) as partsamount";
		$Table6	= "XML_ro";
		$partsArray = $usr->GetSelWhere($Table6, $fields6, $Where6);
		$allArray[$i]['grosspartsSales'] = $laborArray['0']['partsamount'];
		echo '<pre>'.$i;print_r($partsArray); 	
		 
		
		  /*
		
		
		
		
		
		// Parts of labor ratio 
		$partslaborArray    = array();
		$Where7	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
		echo $fields7 = "$partsArray/$laborArray ";
		$Table7	= "XML_ro";
		$partslaborArray = $usr->GetSelWhere($Table7, $fields7, $Where7);
		
		echo '<pre>'.$i;print_r($partslaborArray);	
		
		
		 
		
		//Labor Sales as a % of Sales - (HIHTIC): Gross Labor Sales / Row 9
		
		$laborsalesArray    = array();
		$Where9 = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
		$fields9 = "$laborArray /$netSaleArray";
		$Table9	= "XML_ro";
		$laborsalesArray = $usr->GetSelWhere($Table9, $fields9, $Where9);
		
		echo '<pre>'.$i;print_r($laborsalesArray); 
		
		//Average Discount Per RO - (HIHTIC): Row 8 / Row 2	
	
		$discountRoArray    = array();
		$Where10 = "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
		$fields10 = " discountamount /$roArray";
		$Table10	= "XML_ro";
		$discountRoArray = $usr->GetSelWhere($Table10, $fields10, $Where10);
		echo '<pre>'.$i;print_r($discountRoArray);exit; 
		
		
		// To Calculate Comparative Gross Sale
		$comparativeArray    = array();
		$Where7	= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date)= '".$i."'";
		$fields7 = "sum(cust_id)";
		$Table7	= "XML_ro";
		$comparativeArray = $usr->GetSelWhere($Table7, $fields7, $Where7);
		
		echo '<pre>'.$i;print_r($comparativeArray); 
		 
		if($i == $lastYear || $dataArray[$i]['custTotal'] == 0 || $i == $currentYear) {
		    $dataArray[$i]['comparativeGrossSale'] = 0;
		} else {
		    $dataArray[$i+1]['comparativeGrossSale'] = $dataArray[$i+1]['grossSale'] - $dataArray[$i]['grossSale'];
		}

		if($dataArray[$i+1]['comparativeGrossSale'] < 0) {
		    $dataArray[$i+1]['comparativeGrossSale'] = abs($dataArray[$i+1]['comparativeGrossSale']);
		    $dataArray[$i+1]['absComparativeGrossSaleExp'] = "-";
		}

		// To Calculate Customer Variance
		$custVariance   = 0;
		if($i < $currentYear && $dataArray[$i]['custTotal'] != 0){
		$custVariance    = abs($dataArray[$i+1]['custTotal'] / $dataArray[$i]['custTotal']);
		//echo "<prE>";print_r($custVarianceAry);
		}
		$custVariance   = abs($custVariance)*100;
		$dataArray[$i+1]['custVariance']   = $custVariance;
				
		  /*  foreach($custArray as $key=>$cust){
                        $allArray[$i]['customers'][$key] = $cust['cust_id'];
                        $allArray[$i]['ros'][$key] = $ro['ro_id'];
                        $allArray[$i]['vehicles'][$key] = $ro['vehicle_id'];
                        $allArray[$i]['sales'][$key] = $ro['gross'];
                        $allArray[$i]['discountamount'][$key] = $ro['discountamount'];
                        $allArray[$key]['netSale']= $allArray[$i]['sales'][$key] - $allArray[$i]['discountamount'][$key];        
                        echo '<pre>';print_r($allArray);exit;

                    } */
                 
                 
            //$allArray[$i]['grossCustomers'] = count($allArray[$i]['customers']);
            //$allArray[$i]['grossRepairOrders'] = count($allArray[$i]['ros']);
            //$allArray[$i]['grossVehicles'] = count($allArray[$i]['vehicles']);
           // $allArray[$i]['grosSales'] = count($allArray[$i]['sales']);
           // $allArray[$i]['grossdiscountAmount'] = count($allArray[$i]['discountamount']);
           
	            //INS IN
            
       
        //echo '<pre>';print_r($allArray);exit;

	
        
      
	/*
	
	

	
 

	
	 
        
        

        // TO  Calculate Variance
        if($i == $currentYear){
            $dataArray[$i+1]['variance']   = 0;
        } else {
            if($dataArray[$i+1]['comparativeGrossSale'] != 0){
                $variance = ($dataArray[$i+2]['comparativeGrossSale']/$dataArray[$i+1]['comparativeGrossSale']);
                $variance1 = (abs($variance))*100;
                $dataArray[$i+2]['variance']   = $variance1;
                
                $avgVariance+= abs($variance);
                
            } else {
                $variance   = 0;
                $dataArray[$i+2]['variance']   = 0;
            }
        }
        

        
        // To Calculate Customer Variance
        $custVariance   = 0;
        if($i < $currentYear && $dataArray[$i]['custTotal'] != 0){
            $custVariance    = abs($dataArray[$i+1]['custTotal'] / $dataArray[$i]['custTotal']);
            //echo "<prE>";print_r($custVarianceAry);exit;
        }
        $custVariance   = abs($custVariance)*100;
        $dataArray[$i+1]['custVariance']   = $custVariance;
        
        
        
        
        
       
        
        
        
        
        // To Calculate RO's Variance
        $roVariance   = 0;
        if($i < $currentYear && $dataArray[$i]['roTotal'] != 0){
            $roVariance    = abs($dataArray[$i+1]['roTotal'] / $dataArray[$i]['roTotal']);
        }
        $roVariance   = abs($roVariance)*100;
        echo $dataArray[$i+1]['roVariance']   = $roVariance;
        
        
       
        
        
        // To Calculate Vehicle's Variance
        $vehicleVariance   = 0;
        if($i < $currentYear && $dataArray[$i]['vehicleTotal'] != 0){
            $vehicleVariance    = abs($dataArray[$i+1]['vehicleTotal'] / $dataArray[$i]['vehicleTotal']);
        }
        $vehicleVariance   = abs($vehicleVariance)*100;
        echo $dataArray[$i+1]['vehicleVariance']   = $vehicleVariance;
        
        
        
        
        // To Calculate Current Vs Prior Year To Date in $'s
        $grossSaleArrayCy2Py    = array();
        $WhereCy2Py		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND transaction_date BETWEEN '".$i."-01-01'  AND '".date($i.'-m-d')."'";
        $fieldsCy2Py            = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $TableCy2Py		= "XML_ro ";
        $grossSaleArrayCy2Py	= $usr->GetSelWhere($TableCy2Py, $fieldsCy2Py, $WhereCy2Py);
        
        if(!empty($grossSaleArrayCy2Py) && $grossSaleArrayCy2Py[0]['gross'] != '') {
            $dataArray[$i]['grossSaleCy2Py']   = $grossSaleArrayCy2Py[0]['gross'];
        } else {
            $dataArray[$i]['grossSaleCy2Py']   = 0;
        }
        
        
        
        
        // To CAlculate Current Vs Prior Year To Date in %'s
        if($dataArray[$i]['grossSaleCy2Py'] != 0) {
            $grossSaleCy2PyPercentage   = $dataArray[$i+1]['grossSaleCy2Py']/$dataArray[$i]['grossSaleCy2Py'];
        echo     $dataArray[$i+1]['grossSaleCy2PyPercentage'] = abs($grossSaleCy2PyPercentage)*100;
        } else {
            $dataArray[$i+1]['grossSaleCy2PyPercentage']   = 0;
        }
        
        
        
        
        // To calculate Gross Sales
        $grossSaleArray = array();
        $Where3		= "1=1 AND company_id = '".$_SESSION['User']['xml_id']."' AND YEAR(transaction_date) = '".$i."'";
        $fields         = "sum(laboramount+partsamount+taxamount+hazardwasteamount+shopsuppliesamount) as gross";
        $Table3		= "XML_ro ";
        $grossSaleArray	= $usr->GetSelWhere($Table3, $fields, $Where3);
        
        if(!empty($grossSaleArray) && $grossSaleArray[0]['gross'] != '') {
            $dataArray[$i]['grossSale']   = $grossSaleArray[0]['gross'];
        } else {
            $dataArray[$i]['grossSale']   = 0;
        }
        
        
      
        
        // To Calculate Comparative Gross Sale
        if($i == $lastYear || $dataArray[$i]['custTotal'] == 0 || $i == $currentYear) {
             echo $dataArray[$i]['comparativeGrossSale'] = 0;
        } else {
            $dataArray[$i+1]['comparativeGrossSale'] = $dataArray[$i+1]['grossSale'] - $dataArray[$i]['grossSale'];
        }
        
        if($dataArray[$i+1]['comparativeGrossSale'] < 0) {
            $dataArray[$i+1]['comparativeGrossSale'] = abs($dataArray[$i+1]['comparativeGrossSale']);
            $dataArray[$i+1]['absComparativeGrossSaleExp'] = "-";
        }
     
    */
    
 
    


    
?>            	   
