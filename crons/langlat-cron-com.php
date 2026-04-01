<?php
require_once("/home/automark/public_html/customer/includes/application_start.php");
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
$MapWhere		= "1=1  AND coordinates = '' LIMIT 0,100";
$MapTable		= "tbl_competitors";
$MApFields		= "*";
$MapRes 	= $usr->GetSelWhere($MapTable,$MApFields,$MapWhere);
//echo "<prE>";print_r($MapRes);exit;
for($i=0;$i<count($MapRes);$i++)
{
	if($MapRes[$i]['city'] != "" && $MapRes[$i]['address'] != "" && $MapRes[$i]['zip'] != "")
	{
	
		$city = str_replace(" ","+",$MapRes[$i]['city']);
		$city = str_replace(",","+",$city);
		$address = str_replace(" ","+",$MapRes[$i]['address']);
		$address = str_replace(",","+",$address);
		$zip = str_replace(" ","+",$MapRes[$i]['zip']);
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
			$ins_Ary['coordinates'] = $arrayresult['result'][0]['geometry']['location']['lat']." ".$arrayresult['result'][0]['geometry']['location']['lng'];
		}
		else
		{
			$ins_Ary['coordinates'] = $arrayresult['result']['geometry']['location']['lat']." ".$arrayresult['result']['geometry']['location']['lng'];
		}
		$Result 			= $Gen->UpdateQry('tbl_competitors',$ins_Ary," id = ".$MapRes[$i]['id']);
	}
}
?>