<?php
require_once("/home/automark/public_html/customer/includes/application_start.php");
require_once("/home/automark/public_html/crons/xmlparsenew.php");
$usr 		= new General;
$url = "http://www.autorepairmarketing.com/xml/DELETEFT_YOUR_EXTERNALID_HERE_2013-01-07-13-26-33.xml";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$xmldata = curl_exec($ch);
curl_close($ch); 

$array = XmlParser($xmldata);
echo "<prE>";print_r($array);exit;
for($i=0;$i<count($array);$i++)
{
	//Code to Insert XML Customers
	for($c=0;$c<count($array[$i]['Contact']);$c++)
	{
		$delContact= $Gen->DeleteQry('XML_customers'," cust_id = '".$array[$i]['Contact']['lCandidateExtID']."'");
	}
	//Code to Insert Vehicle
	for($v=0;$v<count($array[$i]['Vehicle']);$v++)
	{
		$delVehicle = $Gen->UpdateQry('XML_vehicle'," vehicle_id = '".$array[$i]['Vehicle']['lVehicleExtID']."'");
	}
	//Code to Insert ROHeader
	for($v=0;$v<count($array[$i]['ROHeader']);$v++)
	{
		$delROHeader = $Gen->UpdateQry('XML_ro'," ro_id = '".$array[$i]['ROHeader']['lCandidateExtID']."'");
	}
	//Code to insert RODetail
	for($v=0;$v<count($array[$i]['RODetail']);$v++)
	{
		$delRODetail = $Gen->UpdateQry('XML_ro_details'," transactiondetailextid = '".$array[$i]['RODetail']['lCandidateExtID']."'");
	}
	//Code to insert into Schedule
	for($v=0;$v<count($array[$i]['Schedule']);$v++)
	{
		$delSchedule = $Gen->UpdateQry('XML_schedule'," scheduleextid = '".$array[$i]['Schedule']['lScheduleExtID']."'");
	}
}
?>