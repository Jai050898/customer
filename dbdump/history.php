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
define ('CSVVEHICLES', '/home/automark/public_html/customer/files/his3.csv');
set_time_limit(0);
$items = array ();
$i = 0;
$c = 0;

//$con = mysql_connect("localhost","navigato_misuser","92L7N!MNl#q)");
$con = mysql_connect("localhost","automark_custusr","m#184DCuL~6e");
if (!$con)
  {
 	 die('Could not connect: ' . mysql_error());
  }

mysql_select_db("automark_mm_cust", $con);


//open file and begin
if (($handle = fopen(CSVVEHICLES, "r")) !== FALSE) { 
	while (($VEHICLES = fgetcsv($handle, 1000, ",")) !== FALSE) {
	$num=1;
		
		//print_r($VEHICLES);
		//die();
		
		array_walk($VEHICLES, 'reslash_multi');

		//Automobile values
		$values=array($VEHICLES[0], $VEHICLES[1], $VEHICLES[2], $VEHICLES[3], $VEHICLES[4], $VEHICLES[5], $VEHICLES[6], $VEHICLES[7], $VEHICLES[8], $VEHICLES[9], $VEHICLES[10], $VEHICLES[11], $VEHICLES[12], $VEHICLES[13], $VEHICLES[14], $VEHICLES[15], $VEHICLES[16], $VEHICLES[17], $VEHICLES[18],$VEHICLES[19],$VEHICLES[20],$VEHICLES[21],$VEHICLES[22],$VEHICLES[23],$VEHICLES[24],$VEHICLES[25],$VEHICLES[26],$VEHICLES[27],$VEHICLES[28],$VEHICLES[29],$VEHICLES[30],$VEHICLES[31],$VEHICLES[32],$VEHICLES[33],$VEHICLES[34],$VEHICLES[35],$VEHICLES[36],$VEHICLES[37],$VEHICLES[38],$VEHICLES[39],$VEHICLES[40],$VEHICLES[41],$VEHICLES[42],$VEHICLES[43],$VEHICLES[44],$VEHICLES[45],$VEHICLES[46],$VEHICLES[47],$VEHICLES[48],$VEHICLES[49],$VEHICLES[50],$VEHICLES[51],$VEHICLES[52],$VEHICLES[53],$VEHICLES[54],$VEHICLES[55],$VEHICLES[56],$VEHICLES[57],$VEHICLES[58],$VEHICLES[59],$VEHICLES[60],$VEHICLES[61],$VEHICLES[62],$VEHICLES[63],$VEHICLES[64],$VEHICLES[65]);
			
		
		unset($VEHICLES);
		
		//store sql into block for larger statements
		$ia = pre_insert_array($values, 66);
		
		if($c) 
			$ALL[] = $ia;
		
		if (($c+1) % 500 == 0) {
				
			//----------------------------------AUTOMOBILE				
			$t = "INSERT INTO MIS_history (MIS_type, MIS_lineno, MIS_license, MIS_cust_ID, MIS_sched, MIS_promised, MIS_RO_prn, MIS_inv_prn, MIS_status, MIS_timein, MIS_timeout, MIS_location, MIS_custname, MIS_ymm, MIS_recno, MIS_hat, MIS_dateposted, MIS_lastitemused, MIS_vehicle_ID, MIS_writer, MIS_odom_in, MIS_odom_out, MIS_balancedue, MIS_writernum, MIS_refno, MIS_estlaboramt, MIS_estpartsamt, MIS_esthours, MIS_laboramt, MIS_partsamt, MIS_taxamt, MIS_defaultTech, MIS_defaultTechParts, MIS_hazwaste, MIS_shopsupplies, MIS_hazwasteamt, MIS_shopsuppliesamt, MIS_versionstring, MIS_taxversion, MIS_taxamtmat1, MIS_taxamtmat2, MIS_taxamtmat3, MIS_taxamtmat4, MIS_taxamtmat5, MIS_taxamtmat6, MIS_taxamtmat7, MIS_taxamtmat8, MIS_taxamtmat9, MIS_taxamtlab1, MIS_taxamtlab2, MIS_taxamtlab3, MIS_taxamtlab4, MIS_taxamtlab5, MIS_taxamtlab6, MIS_taxamtlab7, MIS_taxamthazmat, MIS_taxamtshopsupplies, MIS_PrintedDate, MIS_discountamt, MIS_estdiscountamt, MIS_EstimateTax, MIS_EstimateHazmat, MIS_EstimateShopSupplies, MIS_CreatedAsEstimate, MIS_ReasonForVisit, market_cust_id) VALUES ";
			
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
			ON DUPLICATE KEY UPDATE MIS_type=VALUES(MIS_type), MIS_lineno=VALUES(MIS_lineno), MIS_license=VALUES(MIS_license), MIS_cust_ID=VALUES(MIS_cust_ID), MIS_sched=VALUES(MIS_sched), MIS_promised=VALUES(MIS_promised), MIS_RO_prn=VALUES(MIS_RO_prn), MIS_inv_prn=VALUES(MIS_inv_prn), MIS_status=VALUES(MIS_status), MIS_timein=VALUES(MIS_timein), MIS_timeout=VALUES(MIS_timeout),  MIS_location=VALUES(MIS_location), MIS_custname=VALUES(MIS_custname), MIS_ymm=VALUES(MIS_ymm), MIS_recno=VALUES(MIS_recno), MIS_hat=VALUES(MIS_hat), MIS_dateposted=VALUES(MIS_dateposted), MIS_lastitemused=VALUES(MIS_lastitemused), MIS_vehicle_ID=VALUES(MIS_vehicle_ID), MIS_writer=VALUES(MIS_writer), MIS_odom_in=VALUES(MIS_odom_in), MIS_odom_out=VALUES(MIS_odom_out), MIS_balancedue=VALUES(MIS_balancedue), MIS_writernum=VALUES(MIS_writernum), MIS_refno=VALUES(MIS_refno), MIS_estlaboramt=VALUES(MIS_estlaboramt), MIS_estpartsamt=VALUES(MIS_estpartsamt), MIS_esthours=VALUES(MIS_esthours), MIS_laboramt=VALUES(MIS_laboramt), MIS_partsamt=VALUES(MIS_partsamt), MIS_taxamt=VALUES(MIS_taxamt), MIS_defaultTech=VALUES(MIS_defaultTech), MIS_defaultTechParts=VALUES(MIS_defaultTechParts), MIS_hazwaste=VALUES(MIS_hazwaste), MIS_shopsupplies=VALUES(MIS_shopsupplies), MIS_hazwasteamt=VALUES(MIS_hazwasteamt), MIS_shopsuppliesamt=VALUES(MIS_shopsuppliesamt), MIS_versionstring=VALUES(MIS_versionstring), MIS_taxversion=VALUES(MIS_taxversion), MIS_taxamtmat1=VALUES(MIS_taxamtmat1), MIS_taxamtmat2=VALUES(MIS_taxamtmat2), MIS_taxamtmat3=VALUES(MIS_taxamtmat3), MIS_taxamtmat4=VALUES(MIS_taxamtmat4), MIS_taxamtmat5=VALUES(MIS_taxamtmat5), MIS_taxamtmat6=VALUES(MIS_taxamtmat6), MIS_taxamtmat7=VALUES(MIS_taxamtmat7), MIS_taxamtmat8=VALUES(MIS_taxamtmat8), MIS_taxamtmat9=VALUES(MIS_taxamtmat9), MIS_taxamtlab1=VALUES(MIS_taxamtlab1), MIS_taxamtlab2=VALUES(MIS_taxamtlab2), MIS_taxamtlab3=VALUES(MIS_taxamtlab3), MIS_taxamtlab4=VALUES(MIS_taxamtlab4), MIS_taxamtlab5=VALUES(MIS_taxamtlab5), MIS_taxamtlab6=VALUES(MIS_taxamtlab6), MIS_taxamtlab7=VALUES(MIS_taxamtlab7), MIS_taxamthazmat=VALUES(MIS_taxamthazmat), MIS_taxamtshopsupplies=VALUES(MIS_taxamtshopsupplies), MIS_PrintedDate=VALUES(MIS_PrintedDate), MIS_discountamt=VALUES(MIS_discountamt), MIS_estdiscountamt=VALUES(MIS_estdiscountamt), MIS_EstimateTax=VALUES(MIS_EstimateTax), MIS_EstimateHazmat=VALUES(MIS_EstimateHazmat), MIS_EstimateShopSupplies=VALUES(MIS_EstimateShopSupplies), MIS_CreatedAsEstimate=VALUES(MIS_CreatedAsEstimate), MIS_ReasonForVisit=VALUES(MIS_ReasonForVisit), market_cust_id=VALUES(market_cust_id);"; 
			
			//----------------------------------SEARCH				
			
																																																																						 			
			mysql_query($t) or die('Invalid query: ' . mysql_error());
																																																																																																																																																							
			unset($ALL);
		}
		
		//increment after db stuff
		$c++;
		//if($c == 1001) break
		$num++;
    }
    fclose($handle);
}


//run one last time!!!
if(isset($ALL)){								
$t = "INSERT INTO MIS_history (MIS_type, MIS_lineno, MIS_license, MIS_cust_ID, MIS_sched, MIS_promised, MIS_RO_prn, MIS_inv_prn, MIS_status, MIS_timein, MIS_timeout, MIS_location, MIS_custname, MIS_ymm, MIS_recno, MIS_hat, MIS_dateposted, MIS_lastitemused, MIS_vehicle_ID, MIS_writer, MIS_odom_in, MIS_odom_out, MIS_balancedue, MIS_writernum, MIS_refno, MIS_estlaboramt, MIS_estpartsamt, MIS_esthours, MIS_laboramt, MIS_partsamt, MIS_taxamt, MIS_defaultTech, MIS_defaultTechParts, MIS_hazwaste, MIS_shopsupplies, MIS_hazwasteamt, MIS_shopsuppliesamt, MIS_versionstring, MIS_taxversion, MIS_taxamtmat1, MIS_taxamtmat2, MIS_taxamtmat3, MIS_taxamtmat4, MIS_taxamtmat5, MIS_taxamtmat6, MIS_taxamtmat7, MIS_taxamtmat8, MIS_taxamtmat9, MIS_taxamtlab1, MIS_taxamtlab2, MIS_taxamtlab3, MIS_taxamtlab4, MIS_taxamtlab5, MIS_taxamtlab6, MIS_taxamtlab7, MIS_taxamthazmat, MIS_taxamtshopsupplies, MIS_PrintedDate, MIS_discountamt, MIS_estdiscountamt, MIS_EstimateTax, MIS_EstimateHazmat, MIS_EstimateShopSupplies, MIS_CreatedAsEstimate, MIS_ReasonForVisit,market_cust_id) VALUES ";

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
ON DUPLICATE KEY UPDATE MIS_type=VALUES(MIS_type), MIS_lineno=VALUES(MIS_lineno), MIS_license=VALUES(MIS_license), MIS_cust_ID=VALUES(MIS_cust_ID), MIS_sched=VALUES(MIS_sched), MIS_promised=VALUES(MIS_promised), MIS_RO_prn=VALUES(MIS_RO_prn), MIS_inv_prn=VALUES(MIS_inv_prn), MIS_status=VALUES(MIS_status), MIS_timein=VALUES(MIS_timein), MIS_timeout=VALUES(MIS_timeout),  MIS_location=VALUES(MIS_location), MIS_custname=VALUES(MIS_custname), MIS_ymm=VALUES(MIS_ymm), MIS_recno=VALUES(MIS_recno), MIS_hat=VALUES(MIS_hat), MIS_dateposted=VALUES(MIS_dateposted), MIS_lastitemused=VALUES(MIS_lastitemused), MIS_vehicle_ID=VALUES(MIS_vehicle_ID), MIS_writer=VALUES(MIS_writer), MIS_odom_in=VALUES(MIS_odom_in), MIS_odom_out=VALUES(MIS_odom_out), MIS_balancedue=VALUES(MIS_balancedue), MIS_writernum=VALUES(MIS_writernum), MIS_refno=VALUES(MIS_refno), MIS_estlaboramt=VALUES(MIS_estlaboramt), MIS_estpartsamt=VALUES(MIS_estpartsamt), MIS_esthours=VALUES(MIS_esthours), MIS_laboramt=VALUES(MIS_laboramt), MIS_partsamt=VALUES(MIS_partsamt), MIS_taxamt=VALUES(MIS_taxamt), MIS_defaultTech=VALUES(MIS_defaultTech), MIS_defaultTechParts=VALUES(MIS_defaultTechParts), MIS_hazwaste=VALUES(MIS_hazwaste), MIS_shopsupplies=VALUES(MIS_shopsupplies), MIS_hazwasteamt=VALUES(MIS_hazwasteamt), MIS_shopsuppliesamt=VALUES(MIS_shopsuppliesamt), MIS_versionstring=VALUES(MIS_versionstring), MIS_taxversion=VALUES(MIS_taxversion), MIS_taxamtmat1=VALUES(MIS_taxamtmat1), MIS_taxamtmat2=VALUES(MIS_taxamtmat2), MIS_taxamtmat3=VALUES(MIS_taxamtmat3), MIS_taxamtmat4=VALUES(MIS_taxamtmat4), MIS_taxamtmat5=VALUES(MIS_taxamtmat5), MIS_taxamtmat6=VALUES(MIS_taxamtmat6), MIS_taxamtmat7=VALUES(MIS_taxamtmat7), MIS_taxamtmat8=VALUES(MIS_taxamtmat8), MIS_taxamtmat9=VALUES(MIS_taxamtmat9), MIS_taxamtlab1=VALUES(MIS_taxamtlab1), MIS_taxamtlab2=VALUES(MIS_taxamtlab2), MIS_taxamtlab3=VALUES(MIS_taxamtlab3), MIS_taxamtlab4=VALUES(MIS_taxamtlab4), MIS_taxamtlab5=VALUES(MIS_taxamtlab5), MIS_taxamtlab6=VALUES(MIS_taxamtlab6), MIS_taxamtlab7=VALUES(MIS_taxamtlab7), MIS_taxamthazmat=VALUES(MIS_taxamthazmat), MIS_taxamtshopsupplies=VALUES(MIS_taxamtshopsupplies), MIS_PrintedDate=VALUES(MIS_PrintedDate), MIS_discountamt=VALUES(MIS_discountamt), MIS_estdiscountamt=VALUES(MIS_estdiscountamt), MIS_EstimateTax=VALUES(MIS_EstimateTax), MIS_EstimateHazmat=VALUES(MIS_EstimateHazmat), MIS_EstimateShopSupplies=VALUES(MIS_EstimateShopSupplies), MIS_CreatedAsEstimate=VALUES(MIS_CreatedAsEstimate), MIS_ReasonForVisit=VALUES(MIS_ReasonForVisit), market_cust_id=VALUES(market_cust_id);";

			
																																																																				
	mysql_query($t) or die('Invalid query: ' . mysql_error());

	unset($ALL);
}

?>