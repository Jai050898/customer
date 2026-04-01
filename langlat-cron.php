<?php
require_once("/home/navigato/public_html/includes/application_start.php");
$usr 		= new General;
function objectToArray( $object )
{
	if( !is_object( $object ) && !is_array( $object ) )
	{
		return $object;
	}
	if( is_object( $object ) )
	{
		$object = get_object_vars( $object );
	}
	return array_map( 'objectToArray', $object );
}
//Map data
$MapWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND 	MIS_coordinates = ''  LIMIT 0,1000" ;
$MapTable		= "MIS_customers";
$MApFields		= "*";
$MapRes 	= $usr->GetSelWhere($MapTable,$MApFields,$MapWhere);
for($i=0;$i<count($MapRes);$i++)
{
	if($MapRes[$i]['MIS_city'] != "" && $MapRes[$i]['MIS_address'] != "" && $MapRes[$i]['MIS_zip'] != "")
	{
	
		$city = str_replace(" ","+",$MapRes[$i]['MIS_city']);
		$city = str_replace(",","+",$city);
		$address = str_replace(" ","+",$MapRes[$i]['MIS_address']);
		$address = str_replace(",","+",$address);
		$zip = str_replace(" ","+",$MapRes[$i]['MIS_zip']);
		$fulladdress = "US+".$city."+".$address."+".$zip;	
			
		$base_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$fulladdress."&sensor=true";
			
		//$request_url = $base_url . "&q=" . urlencode($address);
		$ch = curl_init($base_url);
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$xml_raw = curl_exec($ch);
		$xml = simplexml_load_string($xml_raw);
		//$xml = simplexml_load_file() or die("url not loading");	
		/*** convert the array to object ***/
		if($xml->status == 'OK')
		{
			$arrayresult = objectToArray($xml);		
		}
		else
		{
			$fulladdress = "US+".$city;
			
			$base_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$fulladdress."&sensor=true";		
			//$request_url = $base_url . "&q=" . urlencode($address);
			$ch = curl_init($base_url);
			curl_setopt($ch, CURLOPT_HEADER, false);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$xml_raw = curl_exec($ch);
			$xml = simplexml_load_string($xml_raw);
			//$xml = simplexml_load_file($base_url) or die("url not loading");
			/*** convert the array to object ***/
			if($xml->status == 'OK')
			{
				$arrayresult = objectToArray($xml);
				//echo print_r($xml->result);			
			}
		}
		$ins_Ary = array();
		if($arrayresult['result']['geometry']['location']['lat'] == '')
		{
			$ins_Ary['MIS_coordinates'] = $arrayresult['result'][0]['geometry']['location']['lat']." ".$arrayresult['result'][0]['geometry']['location']['lng'];
		}
		else
		{
			$ins_Ary['MIS_coordinates'] = $arrayresult['result']['geometry']['location']['lat']." ".$arrayresult['result']['geometry']['location']['lng'];
		}
		$Result 			= $Gen->UpdateQry('MIS_customers',$ins_Ary," MIS_cust_ID = ".$MapRes[$i]['MIS_cust_ID']);
	}
}
?>