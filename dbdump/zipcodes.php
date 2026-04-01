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
define ('CSVVEHICLES', '/home/navigato/public_html/files/zip code.csv');
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
		$values=array($VEHICLES[0], $VEHICLES[1], $VEHICLES[2], $VEHICLES[3], $VEHICLES[4]);
			
		
		unset($VEHICLES);
		
		//store sql into block for larger statements
		$ia = pre_insert_array($values, 5);
		
		if($c) 
			$ALL[] = $ia;
		
		if (($c+1) % 500 == 0) {
				
			//----------------------------------AUTOMOBILE				
			$t = "INSERT INTO MIS_zipcode (MIS_AC, MIS_CITY, MIS_STATE, MIS_TotalCustomer_LifetimeValueCurrentYear, MIS_ZIPCODE) VALUES ";
			
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
			ON DUPLICATE KEY UPDATE MIS_AC=VALUES(MIS_AC), MIS_CITY=VALUES(MIS_CITY), MIS_STATE=VALUES(MIS_STATE), MIS_TotalCustomer_LifetimeValueCurrentYear=VALUES(MIS_TotalCustomer_LifetimeValueCurrentYear), MIS_ZIPCODE=VALUES(MIS_ZIPCODE);"; 
			
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
$t = "INSERT INTO MIS_zipcode (MIS_AC, MIS_CITY, MIS_STATE, MIS_TotalCustomer_LifetimeValueCurrentYear, MIS_ZIPCODE) VALUES ";

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
ON DUPLICATE KEY UPDATE MIS_AC=VALUES(MIS_AC), MIS_CITY=VALUES(MIS_CITY), MIS_STATE=VALUES(MIS_STATE), MIS_TotalCustomer_LifetimeValueCurrentYear=VALUES(MIS_TotalCustomer_LifetimeValueCurrentYear), MIS_ZIPCODE=VALUES(MIS_ZIPCODE);";

			
																																																																				
	mysql_query($t) or die('Invalid query: ' . mysql_error());

	unset($ALL);
}

?>