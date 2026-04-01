<?php
function reslash_multi(&$val,$key)
{
   if (is_array($val)) array_walk($val,'reslash_multi',$new);
   else {
      $val = reslash($val);
   }
}
function reslash($string)
{
   if (!get_magic_quotes_gpc())$string = addslashes($string);
   return $string;
}
function pre_insert_array($values, $x){
	
	$i=0;

	//print data for each value
	while ($i < $x){ 
		if($i == 0)
			$sql = $sql . "'" .  mysql_real_escape_string($values[$i]) . "'";
		else
			$sql = $sql . ", '" .  mysql_real_escape_string($values[$i]) . "'";
		$i++;
	}
	
	return $sql;
}
//echo getcwd();exit;
//vars and config
define ('CSVVEHICLES', '/home/automark/public_html/customer/files/cust-test.csv');
set_time_limit(0);
$items = array ();
$i = 0;
$c = 0;

$con = mysql_connect("localhost","automark_custusr","m#184DCuL~6e");
  
if (!$con)
  {
 	 die('Could not connect: ' . mysql_error());
  }

//mysql_select_db("navigato_mis", $con);
mysql_select_db("automark_mm_cust", $con);

//open file and begin
if (($handle = fopen(CSVVEHICLES, "r")) !== FALSE) { 
	while (($VEHICLES = fgetcsv($handle, 1000, ",")) !== FALSE) {
		
		//print_r($VEHICLES);
		//die();
		
		array_walk($VEHICLES, 'reslash_multi');

		//Automobile values
		$values=array($VEHICLES[0], $VEHICLES[1], $VEHICLES[2], $VEHICLES[3], $VEHICLES[4], $VEHICLES[5], $VEHICLES[6], $VEHICLES[7], $VEHICLES[8], $VEHICLES[9], $VEHICLES[10], $VEHICLES[11], $VEHICLES[12], $VEHICLES[13], $VEHICLES[14], $VEHICLES[15], $VEHICLES[16], $VEHICLES[17], $VEHICLES[18],$VEHICLES[19],$VEHICLES[20],$VEHICLES[21],$VEHICLES[22],$VEHICLES[23],$VEHICLES[24],$VEHICLES[25],$VEHICLES[26],$VEHICLES[27],$VEHICLES[28],$VEHICLES[29],$VEHICLES[30],$VEHICLES[31],$VEHICLES[32],$VEHICLES[33],$VEHICLES[34],$VEHICLES[35],$VEHICLES[36],$VEHICLES[37],$VEHICLES[38],$VEHICLES[39],$VEHICLES[40],$VEHICLES[41],$VEHICLES[42]);
			
		
		unset($VEHICLES);
		
		//store sql into block for larger statements
		$ia = pre_insert_array($values, 43);
		
		if($c) 
			$ALL[] = $ia;
		
		if (($c+1) % 500 == 0) {
				
			//----------------------------------AUTOMOBILE				
			$t = "INSERT INTO MIS_customers (MIS_cust_ID, MIS_mr_ms, MIS_firstname, MIS_lastname, MIS_spousename, MIS_company, MIS_address, MIS_city, MIS_state, MIS_zip, MIS_CustCategory, MIS_BalanceDue, MIS_CreditAmt, MIS_AverageRO, MIS_YTDTotal, MIS_LifeTotal, MIS_pricelevel, MIS_laborlevel, MIS_creditOK, MIS_chargeOK, MIS_remarks, MIS_ResaleNum, MIS_tax1, MIS_tax2, MIS_tax3, MIS_tax4, MIS_tax5, MIS_tax6, MIS_tax7, MIS_tax8, MIS_tax9, MIS_tax10, MIS_SpecialOrders, MIS_followUp, MIS_EmailAddress, MIS_FeeAssessmentDate, MIS_CurrentFeeAmount, MIS_NoLateFee, MIS_NewCustFollowUpDate, MIS_LastVisited, MIS_FirstVisited, MIS_LifetimeVisits, market_cust_id) VALUES ";
			
			$y=0;
			foreach($ALL as $row){
				
				if ($y)
					$t = $t . ", ($row)";
				else {
					$t = $t . "($row)";
					$y++;
				}
			}
			
			$t = $t . "
			ON DUPLICATE KEY UPDATE MIS_cust_ID=VALUES(MIS_cust_ID), MIS_mr_ms=VALUES(MIS_mr_ms), MIS_firstname=VALUES(MIS_firstname), MIS_lastname=VALUES(MIS_lastname), MIS_spousename=VALUES(MIS_spousename), MIS_company=VALUES(MIS_company), MIS_address=VALUES(MIS_address), MIS_city=VALUES(MIS_city), MIS_state=VALUES(MIS_state), MIS_zip=VALUES(MIS_zip), MIS_CustCategory=VALUES(MIS_CustCategory), MIS_BalanceDue=VALUES(MIS_BalanceDue), MIS_CreditAmt=VALUES(MIS_CreditAmt), MIS_AverageRO=VALUES(MIS_AverageRO), MIS_YTDTotal=VALUES(MIS_YTDTotal), MIS_LifeTotal=VALUES(MIS_LifeTotal), MIS_pricelevel=VALUES(MIS_pricelevel), MIS_laborlevel=VALUES(MIS_laborlevel), MIS_creditOK=VALUES(MIS_creditOK), MIS_chargeOK=VALUES(MIS_chargeOK), MIS_remarks=VALUES(MIS_remarks), MIS_ResaleNum=VALUES(MIS_ResaleNum), MIS_tax1=VALUES(MIS_tax1), MIS_tax2=VALUES(MIS_tax2), MIS_tax3=VALUES(MIS_tax3), MIS_tax4=VALUES(MIS_tax4), MIS_tax5=VALUES(MIS_tax5), MIS_tax6=VALUES(MIS_tax6), MIS_tax7=VALUES(MIS_tax7), MIS_tax8=VALUES(MIS_tax8), MIS_tax9=VALUES(MIS_tax9), MIS_tax10=VALUES(MIS_tax10), MIS_SpecialOrders=VALUES(MIS_SpecialOrders), MIS_followUp=VALUES(MIS_followUp), MIS_EmailAddress=VALUES(MIS_EmailAddress), MIS_FeeAssessmentDate=VALUES(MIS_FeeAssessmentDate), MIS_CurrentFeeAmount=VALUES(MIS_CurrentFeeAmount), MIS_NoLateFee=VALUES(MIS_NoLateFee), MIS_NewCustFollowUpDate=VALUES(MIS_NewCustFollowUpDate), MIS_LastVisited=VALUES(MIS_LastVisited), MIS_FirstVisited=VALUES(MIS_FirstVisited), MIS_LifetimeVisits=VALUES(MIS_LifetimeVisits), market_cust_id==VALUES(market_cust_id);"; 
			
			//----------------------------------SEARCH				
			
				//echo $t;exit;																																																																		 			
			mysql_query($t) or die('Invalid query: ' . mysql_error());
																																																																																																																																																							
			unset($ALL);
		}
		
		//increment after db stuff
		$c++;
		//if($c == 1001) break;
    }
    fclose($handle);
}


//run one last time!!!
if(isset($ALL)){								
$t = "INSERT INTO MIS_customers (MIS_cust_ID, MIS_mr_ms, MIS_firstname, MIS_lastname, MIS_spousename, MIS_company, MIS_address, MIS_city, MIS_state, MIS_zip, MIS_CustCategory, MIS_BalanceDue, MIS_CreditAmt, MIS_AverageRO, MIS_YTDTotal, MIS_LifeTotal, MIS_pricelevel, MIS_laborlevel, MIS_creditOK, MIS_chargeOK, MIS_remarks, MIS_ResaleNum, MIS_tax1, MIS_tax2, MIS_tax3, MIS_tax4, MIS_tax5, MIS_tax6, MIS_tax7, MIS_tax8, MIS_tax9, MIS_tax10, MIS_SpecialOrders, MIS_followUp, MIS_EmailAddress, MIS_FeeAssessmentDate, MIS_CurrentFeeAmount, MIS_NoLateFee, MIS_NewCustFollowUpDate, MIS_LastVisited, MIS_FirstVisited, MIS_LifetimeVisits, market_cust_id) VALUES ";

$y=0;
foreach($ALL as $row){
	
	if ($y)
		$t = $t . ", ($row)";
	else {
		$t = $t . "($row)";
		$y++;
	}
}

$t = $t . "
ON DUPLICATE KEY UPDATE MIS_cust_ID=VALUES(MIS_cust_ID), MIS_mr_ms=VALUES(MIS_mr_ms), MIS_firstname=VALUES(MIS_firstname), MIS_lastname=VALUES(MIS_lastname), MIS_spousename=VALUES(MIS_spousename), MIS_company=VALUES(MIS_company), MIS_address=VALUES(MIS_address), MIS_city=VALUES(MIS_city), MIS_state=VALUES(MIS_state), MIS_zip=VALUES(MIS_zip), MIS_CustCategory=VALUES(MIS_CustCategory), MIS_BalanceDue=VALUES(MIS_BalanceDue), MIS_CreditAmt=VALUES(MIS_CreditAmt), MIS_AverageRO=VALUES(MIS_AverageRO), MIS_YTDTotal=VALUES(MIS_YTDTotal), MIS_LifeTotal=VALUES(MIS_LifeTotal), MIS_pricelevel=VALUES(MIS_pricelevel), MIS_laborlevel=VALUES(MIS_laborlevel), MIS_creditOK=VALUES(MIS_creditOK), MIS_chargeOK=VALUES(MIS_chargeOK), MIS_remarks=VALUES(MIS_remarks), MIS_ResaleNum=VALUES(MIS_ResaleNum), MIS_tax1=VALUES(MIS_tax1), MIS_tax2=VALUES(MIS_tax2), MIS_tax3=VALUES(MIS_tax3), MIS_tax4=VALUES(MIS_tax4), MIS_tax5=VALUES(MIS_tax5), MIS_tax6=VALUES(MIS_tax6), MIS_tax7=VALUES(MIS_tax7), MIS_tax8=VALUES(MIS_tax8), MIS_tax9=VALUES(MIS_tax9), MIS_tax10=VALUES(MIS_tax10), MIS_SpecialOrders=VALUES(MIS_SpecialOrders), MIS_followUp=VALUES(MIS_followUp), MIS_EmailAddress=VALUES(MIS_EmailAddress), MIS_FeeAssessmentDate=VALUES(MIS_FeeAssessmentDate), MIS_CurrentFeeAmount=VALUES(MIS_CurrentFeeAmount), MIS_NoLateFee=VALUES(MIS_NoLateFee), MIS_NewCustFollowUpDate=VALUES(MIS_NewCustFollowUpDate), MIS_LastVisited=VALUES(MIS_LastVisited), MIS_FirstVisited=VALUES(MIS_FirstVisited), MIS_LifetimeVisits=VALUES(MIS_LifetimeVisits), market_cust_id=VALUES(market_cust_id);"; 

	//echo $t;exit;				
																																																																				
	mysql_query($t) or die('Invalid query: ' . mysql_error());

	unset($ALL);
}

?>