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
define ('CSVVEHICLES', '/home/navigato/public_html/files/OrderList.csv');
set_time_limit(0);
$items = array ();
$i = 0;
$c = 0;

$con = mysql_connect("localhost","navigato_misuser","92L7N!MNl#q)");
if (!$con)
  {
 	 die('Could not connect: ' . mysql_error());
  }

mysql_select_db("navigato_mis", $con);


//open file and begin
if (($handle = fopen(CSVVEHICLES, "r")) !== FALSE) { 
	while (($VEHICLES = fgetcsv($handle, 1000, ",")) !== FALSE) {
	$num=1;
		
		//print_r($VEHICLES);
		//die();
		
		array_walk($VEHICLES, 'reslash_multi');

		//Automobile values
		$values=array($VEHICLES[0], $VEHICLES[1], $VEHICLES[2], $VEHICLES[3], $VEHICLES[4], $VEHICLES[5], $VEHICLES[6], $VEHICLES[7], $VEHICLES[8], $VEHICLES[9], $VEHICLES[10], $VEHICLES[11], $VEHICLES[12], $VEHICLES[13], $VEHICLES[14], $VEHICLES[15], $VEHICLES[16], $VEHICLES[17], $VEHICLES[18],$VEHICLES[19],$VEHICLES[20],$VEHICLES[21],$VEHICLES[22],$VEHICLES[23],$VEHICLES[24],$VEHICLES[25],$VEHICLES[26],$VEHICLES[27],$VEHICLES[28],$VEHICLES[29],$VEHICLES[30],$VEHICLES[31],$VEHICLES[32],$VEHICLES[33],$VEHICLES[34],$VEHICLES[35],$VEHICLES[36],$VEHICLES[37],$VEHICLES[38],$VEHICLES[39],$VEHICLES[40],$VEHICLES[41],$VEHICLES[42],$VEHICLES[43],$VEHICLES[44],$VEHICLES[45],$VEHICLES[46],$VEHICLES[47],$VEHICLES[48],$VEHICLES[49],$VEHICLES[50],$VEHICLES[51],$VEHICLES[52],$VEHICLES[53],$VEHICLES[54],$VEHICLES[55]);
			
		
		unset($VEHICLES);
		
		//store sql into block for larger statements
		$ia = pre_insert_array($values, 56);
		
		if($c) 
			$ALL[] = $ia;
		
		if (($c+1) % 500 == 0) {
				
			//----------------------------------AUTOMOBILE				
			$t = "INSERT INTO MIS_order_list (MIS_keyid, MIS_workid, MIS_seqno, MIS_description, MIS_performed, MIS_qty, MIS_cost, MIS_price, MIS_sale, MIS_partno, MIS_hours_charged, MIS_hours_actual, MIS_hours_pay, MIS_version, MIS_taxdollars, MIS_part_labor, MIS_discountlevel, MIS_vendorcode, MIS_tax1, MIS_tax2, MIS_tax3, MIS_tax4, MIS_tax5, MIS_tax6, MIS_tax7, MIS_tax8, MIS_tax9, MIS_tax10, MIS_acctclass, MIS_category, MIS_staticamt, MIS_techsel, MIS_TechNum, MIS_partConfirm, MIS_partCommited, MIS_accessory, MIS_part_unique, MIS_Commission, MIS_package, MIS_Symptom, MIS_LongCode, MIS_ReqCode, MIS_sMfgCode, MIS_sTSBSymptom, MIS_sTSBCategory, MIS_sTSBSystem, MIS_sUpcCode, MIS_sPartsHier, MIS_QtyConfirmed, MIS_ConfirmNum, MIS_sTSBTitle, MIS_sWDLineCode, MIS_sAffGrpId, MIS_sCatPartType, MIS_fList, MIS_bPartOrdered) VALUES ";
			
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
			ON DUPLICATE KEY UPDATE MIS_keyid=VALUES(MIS_keyid), MIS_workid=VALUES(MIS_workid), MIS_seqno=VALUES(MIS_seqno), MIS_description=VALUES(MIS_description), MIS_performed=VALUES(MIS_performed), MIS_qty=VALUES(MIS_qty), MIS_cost=VALUES(MIS_cost), MIS_price=VALUES(MIS_price), MIS_sale=VALUES(MIS_sale), MIS_partno=VALUES(MIS_partno), MIS_hours_charged=VALUES(MIS_hours_charged),  MIS_hours_actual=VALUES(MIS_hours_actual), MIS_hours_pay=VALUES(MIS_hours_pay), MIS_version=VALUES(MIS_version), MIS_taxdollars=VALUES(MIS_taxdollars), MIS_part_labor=VALUES(MIS_part_labor), MIS_discountlevel=VALUES(MIS_discountlevel), MIS_vendorcode=VALUES(MIS_vendorcode), MIS_tax1=VALUES(MIS_tax1), MIS_tax2=VALUES(MIS_tax2), MIS_tax3=VALUES(MIS_tax3), MIS_tax4=VALUES(MIS_tax4), MIS_tax5=VALUES(MIS_tax5), MIS_tax6=VALUES(MIS_tax6), MIS_tax7=VALUES(MIS_tax7), MIS_tax8=VALUES(MIS_tax8), MIS_tax9=VALUES(MIS_tax9), MIS_tax10=VALUES(MIS_tax10), MIS_acctclass=VALUES(MIS_acctclass), MIS_category=VALUES(MIS_category), MIS_staticamt=VALUES(MIS_staticamt), MIS_techsel=VALUES(MIS_techsel), MIS_TechNum=VALUES(MIS_TechNum), MIS_partConfirm=VALUES(MIS_partConfirm), MIS_partCommited=VALUES(MIS_partCommited), MIS_accessory=VALUES(MIS_accessory), MIS_part_unique=VALUES(MIS_part_unique), MIS_Commission=VALUES(MIS_Commission), MIS_package=VALUES(MIS_package), MIS_Symptom=VALUES(MIS_Symptom), MIS_LongCode=VALUES(MIS_LongCode), MIS_ReqCode=VALUES(MIS_ReqCode), MIS_sMfgCode=VALUES(MIS_sMfgCode), MIS_sTSBSymptom=VALUES(MIS_sTSBSymptom), MIS_sTSBCategory=VALUES(MIS_sTSBCategory), MIS_sTSBSystem=VALUES(MIS_sTSBSystem), MIS_sUpcCode=VALUES(MIS_sUpcCode), MIS_sPartsHier=VALUES(MIS_sPartsHier), MIS_QtyConfirmed=VALUES(MIS_QtyConfirmed), MIS_ConfirmNum=VALUES(MIS_ConfirmNum), MIS_sTSBTitle=VALUES(MIS_sTSBTitle), MIS_sWDLineCode=VALUES(MIS_sWDLineCode), MIS_sAffGrpId=VALUES(MIS_sAffGrpId), MIS_sCatPartType=VALUES(MIS_sCatPartType), MIS_fList=VALUES(MIS_fList), MIS_bPartOrdered=VALUES(MIS_bPartOrdered);"; 
			
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
$t = "INSERT INTO MIS_order_list (MIS_keyid, MIS_workid, MIS_seqno, MIS_description, MIS_performed, MIS_qty, MIS_cost, MIS_price, MIS_sale, MIS_partno, MIS_hours_charged, MIS_hours_actual, MIS_hours_pay, MIS_version, MIS_taxdollars, MIS_part_labor, MIS_discountlevel, MIS_vendorcode, MIS_tax1, MIS_tax2, MIS_tax3, MIS_tax4, MIS_tax5, MIS_tax6, MIS_tax7, MIS_tax8, MIS_tax9, MIS_tax10, MIS_acctclass, MIS_category, MIS_staticamt, MIS_techsel, MIS_TechNum, MIS_partConfirm, MIS_partCommited, MIS_accessory, MIS_part_unique, MIS_Commission, MIS_package, MIS_Symptom, MIS_LongCode, MIS_ReqCode, MIS_sMfgCode, MIS_sTSBSymptom, MIS_sTSBCategory, MIS_sTSBSystem, MIS_sUpcCode, MIS_sPartsHier, MIS_QtyConfirmed, MIS_ConfirmNum, MIS_sTSBTitle, MIS_sWDLineCode, MIS_sAffGrpId, MIS_sCatPartType, MIS_fList, MIS_bPartOrdered) VALUES ";

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
ON DUPLICATE KEY UPDATE MIS_keyid=VALUES(MIS_keyid), MIS_workid=VALUES(MIS_workid), MIS_seqno=VALUES(MIS_seqno), MIS_description=VALUES(MIS_description), MIS_performed=VALUES(MIS_performed), MIS_qty=VALUES(MIS_qty), MIS_cost=VALUES(MIS_cost), MIS_price=VALUES(MIS_price), MIS_sale=VALUES(MIS_sale), MIS_partno=VALUES(MIS_partno), MIS_hours_charged=VALUES(MIS_hours_charged),  MIS_hours_actual=VALUES(MIS_hours_actual), MIS_hours_pay=VALUES(MIS_hours_pay), MIS_version=VALUES(MIS_version), MIS_taxdollars=VALUES(MIS_taxdollars), MIS_part_labor=VALUES(MIS_part_labor), MIS_discountlevel=VALUES(MIS_discountlevel), MIS_vendorcode=VALUES(MIS_vendorcode), MIS_tax1=VALUES(MIS_tax1), MIS_tax2=VALUES(MIS_tax2), MIS_tax3=VALUES(MIS_tax3), MIS_tax4=VALUES(MIS_tax4), MIS_tax5=VALUES(MIS_tax5), MIS_tax6=VALUES(MIS_tax6), MIS_tax7=VALUES(MIS_tax7), MIS_tax8=VALUES(MIS_tax8), MIS_tax9=VALUES(MIS_tax9), MIS_tax10=VALUES(MIS_tax10), MIS_acctclass=VALUES(MIS_acctclass), MIS_category=VALUES(MIS_category), MIS_staticamt=VALUES(MIS_staticamt), MIS_techsel=VALUES(MIS_techsel), MIS_TechNum=VALUES(MIS_TechNum), MIS_partConfirm=VALUES(MIS_partConfirm), MIS_partCommited=VALUES(MIS_partCommited), MIS_accessory=VALUES(MIS_accessory), MIS_part_unique=VALUES(MIS_part_unique), MIS_Commission=VALUES(MIS_Commission), MIS_package=VALUES(MIS_package), MIS_Symptom=VALUES(MIS_Symptom), MIS_LongCode=VALUES(MIS_LongCode), MIS_ReqCode=VALUES(MIS_ReqCode), MIS_sMfgCode=VALUES(MIS_sMfgCode), MIS_sTSBSymptom=VALUES(MIS_sTSBSymptom), MIS_sTSBCategory=VALUES(MIS_sTSBCategory), MIS_sTSBSystem=VALUES(MIS_sTSBSystem), MIS_sUpcCode=VALUES(MIS_sUpcCode), MIS_sPartsHier=VALUES(MIS_sPartsHier), MIS_QtyConfirmed=VALUES(MIS_QtyConfirmed), MIS_ConfirmNum=VALUES(MIS_ConfirmNum), MIS_sTSBTitle=VALUES(MIS_sTSBTitle), MIS_sWDLineCode=VALUES(MIS_sWDLineCode), MIS_sAffGrpId=VALUES(MIS_sAffGrpId), MIS_sCatPartType=VALUES(MIS_sCatPartType), MIS_fList=VALUES(MIS_fList), MIS_bPartOrdered=VALUES(MIS_bPartOrdered);";

			
																																																																				
	mysql_query($t) or die('Invalid query: ' . mysql_error());

	unset($ALL);
}

?>