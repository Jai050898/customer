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
define ('CSVVEHICLES', '/home/automark/public_html/customer/files/veh2.csv');
set_time_limit(0);
$items = array ();
$i = 0;
$c = 0;

//$con = mysql_connect("localhost","navigato_misuser","92L7N!MNl#q)");
//$con = mysql_connect("localhost","navigato_user","gzDblc&89Voq");
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
		$values=array($VEHICLES[0], $VEHICLES[1], $VEHICLES[2], $VEHICLES[3], $VEHICLES[4], $VEHICLES[5], $VEHICLES[6], $VEHICLES[7], $VEHICLES[8], $VEHICLES[9], $VEHICLES[10], $VEHICLES[11], $VEHICLES[12], $VEHICLES[13], $VEHICLES[14], $VEHICLES[15], $VEHICLES[16], $VEHICLES[17], $VEHICLES[18],$VEHICLES[19],$VEHICLES[20],$VEHICLES[21],$VEHICLES[22],$VEHICLES[23],$VEHICLES[24],$VEHICLES[25],$VEHICLES[26],$VEHICLES[27],$VEHICLES[28],$VEHICLES[29],$VEHICLES[30],$VEHICLES[31],$VEHICLES[32],$VEHICLES[33],$VEHICLES[34],$VEHICLES[35],$VEHICLES[36],$VEHICLES[37],$VEHICLES[38],$VEHICLES[39],$VEHICLES[40],$VEHICLES[41],$VEHICLES[42],$VEHICLES[43],$VEHICLES[44],$VEHICLES[45],$VEHICLES[46],$VEHICLES[47],$VEHICLES[48],$VEHICLES[49],$VEHICLES[50],$VEHICLES[51],$VEHICLES[52]);
			
		
		unset($VEHICLES);
		
		//store sql into block for larger statements
		$ia = pre_insert_array($values, 53);
		
		if($c) 
			$ALL[] = $ia;
		
		if (($c+1) % 500 == 0) {
				
			//----------------------------------AUTOMOBILE				
			$t = "INSERT INTO MIS_vehicle (MIS_Vehicle_ID, MIS_Cust_ID, MIS_Year, MIS_Make, MIS_Model, MIS_SubModel, MIS_YearNum, MIS_MakeNum, MIS_ModelNum, MIS_EngineNum, MIS_TransNum, MIS_BrakeNum, MIS_Odometer1, MIS_Odometer2, MIS_MilesPerDay, MIS_Vin, MIS_MfgDate, MIS_InspDate, MIS_LastinDate, MIS_Mfg, MIS_tax1, MIS_tax2, MIS_tax3, MIS_tax4, MIS_tax5, MIS_tax6, MIS_tax7, MIS_tax8, MIS_tax9, MIS_tax10, MIS_lastrevision, MIS_UnitNo, MIS_DriveType, MIS_GVW, MIS_Engine, MIS_TransDesc, MIS_Brake, MIS_Body, MIS_BodyNum, MIS_APAANum, MIS_License, MIS_CatalogEngine, MIS_SpecificConditions, MIS_pricelevel, MIS_laborlevel, MIS_UseVehicleLevels, MIS_CatalogID, MIS_vehicleMemo, MIS_vehicleMemoPrintOnOrder, MIS_ACLVehicleID, MIS_napaVehicle, MIS_vFollowup, market_cust_id) VALUES ";
			
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
			ON DUPLICATE KEY UPDATE MIS_Vehicle_ID=VALUES(MIS_Vehicle_ID), MIS_Cust_ID=VALUES(MIS_Cust_ID), MIS_Year=VALUES(MIS_Year), MIS_Make=VALUES(MIS_Make), MIS_Model=VALUES(MIS_Model), MIS_SubModel=VALUES(MIS_SubModel), MIS_YearNum=VALUES(MIS_YearNum), MIS_MakeNum=VALUES(MIS_MakeNum), MIS_ModelNum=VALUES(MIS_ModelNum), MIS_EngineNum=VALUES(MIS_EngineNum), MIS_TransNum=VALUES(MIS_TransNum),  MIS_BrakeNum=VALUES(MIS_BrakeNum), MIS_Odometer1=VALUES(MIS_Odometer1), MIS_Odometer2=VALUES(MIS_Odometer2), MIS_MilesPerDay=VALUES(MIS_MilesPerDay), MIS_Vin=VALUES(MIS_Vin), MIS_MfgDate=VALUES(MIS_MfgDate), MIS_InspDate=VALUES(MIS_InspDate), MIS_LastinDate=VALUES(MIS_LastinDate), MIS_Mfg=VALUES(MIS_Mfg), MIS_tax1=VALUES(MIS_tax1), MIS_tax2=VALUES(MIS_tax2), MIS_tax3=VALUES(MIS_tax3), MIS_tax4=VALUES(MIS_tax4), MIS_tax5=VALUES(MIS_tax5), MIS_tax6=VALUES(MIS_tax6), MIS_tax7=VALUES(MIS_tax7), MIS_tax8=VALUES(MIS_tax8), MIS_tax9=VALUES(MIS_tax9), MIS_tax10=VALUES(MIS_tax10), MIS_lastrevision=VALUES(MIS_lastrevision), MIS_UnitNo=VALUES(MIS_UnitNo), MIS_DriveType=VALUES(MIS_DriveType), MIS_GVW=VALUES(MIS_GVW), MIS_Engine=VALUES(MIS_Engine), MIS_TransDesc=VALUES(MIS_TransDesc), MIS_Brake=VALUES(MIS_Brake), MIS_Body=VALUES(MIS_Body), MIS_BodyNum=VALUES(MIS_BodyNum), MIS_APAANum=VALUES(MIS_APAANum), MIS_License=VALUES(MIS_License), MIS_CatalogEngine=VALUES(MIS_CatalogEngine), MIS_SpecificConditions=VALUES(MIS_SpecificConditions), MIS_pricelevel=VALUES(MIS_pricelevel), MIS_laborlevel=VALUES(MIS_laborlevel), MIS_UseVehicleLevels=VALUES(MIS_UseVehicleLevels), MIS_CatalogID=VALUES(MIS_CatalogID), MIS_vehicleMemo=VALUES(MIS_vehicleMemo), MIS_vehicleMemoPrintOnOrder=VALUES(MIS_vehicleMemoPrintOnOrder), MIS_ACLVehicleID=VALUES(MIS_ACLVehicleID), MIS_napaVehicle=VALUES(MIS_napaVehicle), MIS_vFollowup=VALUES(MIS_vFollowup), market_cust_id=VALUES(market_cust_id);"; 
			
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
$t = "INSERT INTO MIS_vehicle (MIS_Vehicle_ID, MIS_Cust_ID, MIS_Year, MIS_Make, MIS_Model, MIS_SubModel, MIS_YearNum, MIS_MakeNum, MIS_ModelNum, MIS_EngineNum, MIS_TransNum, MIS_BrakeNum, MIS_Odometer1, MIS_Odometer2, MIS_MilesPerDay, MIS_Vin, MIS_MfgDate, MIS_InspDate, MIS_LastinDate, MIS_Mfg, MIS_tax1, MIS_tax2, MIS_tax3, MIS_tax4, MIS_tax5, MIS_tax6, MIS_tax7, MIS_tax8, MIS_tax9, MIS_tax10, MIS_lastrevision, MIS_UnitNo, MIS_DriveType, MIS_GVW, MIS_Engine, MIS_TransDesc, MIS_Brake, MIS_Body, MIS_BodyNum, MIS_APAANum, MIS_License, MIS_CatalogEngine, MIS_SpecificConditions, MIS_pricelevel, MIS_laborlevel, MIS_UseVehicleLevels, MIS_CatalogID, MIS_vehicleMemo, MIS_vehicleMemoPrintOnOrder, MIS_ACLVehicleID, MIS_napaVehicle, MIS_vFollowup,market_cust_id) VALUES ";

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
ON DUPLICATE KEY UPDATE MIS_Vehicle_ID=VALUES(MIS_Vehicle_ID), MIS_Cust_ID=VALUES(MIS_Cust_ID), MIS_Year=VALUES(MIS_Year), MIS_Make=VALUES(MIS_Make), MIS_Model=VALUES(MIS_Model), MIS_SubModel=VALUES(MIS_SubModel), MIS_YearNum=VALUES(MIS_YearNum), MIS_MakeNum=VALUES(MIS_MakeNum), MIS_ModelNum=VALUES(MIS_ModelNum), MIS_EngineNum=VALUES(MIS_EngineNum), MIS_TransNum=VALUES(MIS_TransNum),  MIS_BrakeNum=VALUES(MIS_BrakeNum), MIS_Odometer1=VALUES(MIS_Odometer1), MIS_Odometer2=VALUES(MIS_Odometer2), MIS_MilesPerDay=VALUES(MIS_MilesPerDay), MIS_Vin=VALUES(MIS_Vin), MIS_MfgDate=VALUES(MIS_MfgDate), MIS_InspDate=VALUES(MIS_InspDate), MIS_LastinDate=VALUES(MIS_LastinDate), MIS_Mfg=VALUES(MIS_Mfg), MIS_tax1=VALUES(MIS_tax1), MIS_tax2=VALUES(MIS_tax2), MIS_tax3=VALUES(MIS_tax3), MIS_tax4=VALUES(MIS_tax4), MIS_tax5=VALUES(MIS_tax5), MIS_tax6=VALUES(MIS_tax6), MIS_tax7=VALUES(MIS_tax7), MIS_tax8=VALUES(MIS_tax8), MIS_tax9=VALUES(MIS_tax9), MIS_tax10=VALUES(MIS_tax10), MIS_lastrevision=VALUES(MIS_lastrevision), MIS_UnitNo=VALUES(MIS_UnitNo), MIS_DriveType=VALUES(MIS_DriveType), MIS_GVW=VALUES(MIS_GVW), MIS_Engine=VALUES(MIS_Engine), MIS_TransDesc=VALUES(MIS_TransDesc), MIS_Brake=VALUES(MIS_Brake), MIS_Body=VALUES(MIS_Body), MIS_BodyNum=VALUES(MIS_BodyNum), MIS_APAANum=VALUES(MIS_APAANum), MIS_License=VALUES(MIS_License), MIS_CatalogEngine=VALUES(MIS_CatalogEngine), MIS_SpecificConditions=VALUES(MIS_SpecificConditions), MIS_pricelevel=VALUES(MIS_pricelevel), MIS_laborlevel=VALUES(MIS_laborlevel), MIS_UseVehicleLevels=VALUES(MIS_UseVehicleLevels), MIS_CatalogID=VALUES(MIS_CatalogID), MIS_vehicleMemo=VALUES(MIS_vehicleMemo), MIS_vehicleMemoPrintOnOrder=VALUES(MIS_vehicleMemoPrintOnOrder), MIS_ACLVehicleID=VALUES(MIS_ACLVehicleID), MIS_napaVehicle=VALUES(MIS_napaVehicle), MIS_vFollowup=VALUES(MIS_vFollowup), market_cust_id=VALUES(market_cust_id);";

			
																																																																				
	mysql_query($t) or die('Invalid query: ' . mysql_error());

	unset($ALL);
}

?>