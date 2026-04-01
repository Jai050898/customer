<?php
require_once("/home/automark/public_html/customer/includes/application_start.php");
require_once("/home/automark/public_html/crons/xmlparsenew.php");
$usr 		= new General;
$url = "http://www.autorepairmarketing.com/xml/UPDATEFT_YOUR_EXTERNALID_HERE_2013-01-07-13-26-33.xml";
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
		$PrFieldsContact = array();
		//$PrFieldsContact['cust_id'] = $array[$i]['Contact']['lCandidateExtID'];
		$PrFieldsContact['fname'] = $array[$i]['Contact']['strCandidateFirstName'];
		$PrFieldsContact['lname'] = $array[$i]['Contact']['strCandidateLastName'];
		$PrFieldsContact['fullname'] = $array[$i]['Contact']['strCandidateFullName'];
		$PrFieldsContact['address1'] = $array[$i]['Contact']['strHouseholdAddressOne'];	
		$PrFieldsContact['address2'] = $array[$i]['Contact']['strHouseholdAddressTwo'];
		$PrFieldsContact['city'] = $array[$i]['Contact']['strHouseholdCity'];
		$PrFieldsContact['state'] = $array[$i]['Contact']['strHouseholdState'];
		$PrFieldsContact['zip'] = $array[$i]['Contact']['strHouseholdPostalCode'];
		$PrFieldsContact['email'] = $array[$i]['Contact']['strCandidateEmail'];	
		$PrFieldsContact['homephone'] = $array[$i]['Contact']['strCandidateHomePhone'];
		$PrFieldsContact['workphone'] = $array[$i]['Contact']['strCandidateWorkPhone'];
		$PrFieldsContact['fax'] = $array[$i]['Contact']['strCandidateFAX'];
		$PrFieldsContact['cell'] = $array[$i]['Contact']['strCandidateCellPhone'];
		$PrFieldsContact['dob'] = $array[$i]['Contact']['dtCandidateDOB'];	
		$PrFieldsContact['phone1'] = $array[$i]['Contact']['strPhone1'];
		$PrFieldsContact['phone2'] = $array[$i]['Contact']['strPhone2'];
		$PrFieldsContact['company_id'] = $array[$i]['Contact']['strPhone3'];
		
		$insContact= $Gen->UpdateQry('XML_customers',$PrFieldsContact," cust_id = '".$array[$i]['Contact']['lCandidateExtID']."'");
	}
	//Code to Insert Vehicle
	for($v=0;$v<count($array[$i]['Vehicle']);$v++)
	{
		$PrFieldsVehicle = array();
		//$PrFieldsVehicle['vehicle_id'] = $array[$i]['Vehicle']['lVehicleExtID'];
		$PrFieldsVehicle['cust_id'] = $array[$i]['Vehicle']['lCandidateExtID'];
		$PrFieldsVehicle['company_id'] = $array[$i]['Vehicle']['CompanyID'];
		$PrFieldsVehicle['name'] = $array[$i]['Vehicle']['strVehicleName'];
		$PrFieldsVehicle['year'] = $array[$i]['Vehicle']['nVehicleYear'];	
		$PrFieldsVehicle['make'] = $array[$i]['Vehicle']['strVehicleMake'];
		$PrFieldsVehicle['model'] = $array[$i]['Vehicle']['strVehicleModel'];
		$PrFieldsVehicle['vin'] = $array[$i]['Vehicle']['strVehicleVIN'];
		$PrFieldsVehicle['license'] = $array[$i]['Vehicle']['strVehicleLicense'];
		$PrFieldsVehicle['odometer'] = $array[$i]['Vehicle']['nOdometer'];	
		$PrFieldsVehicle['engine'] = $array[$i]['Vehicle']['strEngine'];
		$PrFieldsVehicle['regdate'] = $array[$i]['Vehicle']['dtRegistration'];
		
		$insVehicle = $Gen->UpdateQry('XML_vehicle',$PrFieldsVehicle," vehicle_id = '".$array[$i]['Vehicle']['lVehicleExtID']."'");
	}
	//Code to Insert ROHeader
	for($v=0;$v<count($array[$i]['ROHeader']);$v++)
	{
		$PrFieldsROHeader = array();
		//$PrFieldsROHeader['ro_id'] = $array[$i]['ROHeader']['RONumber'];
		$PrFieldsROHeader['cust_id'] = $array[$i]['ROHeader']['lCandidateExtID'];
		$PrFieldsROHeader['vehicle_id'] = $array[$i]['ROHeader']['lVehicleExtID'];
		$PrFieldsROHeader['company_id'] = $array[$i]['ROHeader']['CompanyID'];
		$PrFieldsROHeader['transaction_date'] = $array[$i]['ROHeader']['dtTransactionDate'];	
		$PrFieldsROHeader['odometerin'] = $array[$i]['ROHeader']['nOdometer'];
		$PrFieldsROHeader['odometerout'] = $array[$i]['ROHeader']['nOdometerOut'];
		$PrFieldsROHeader['transactiontotal'] = $array[$i]['ROHeader']['fTransactionTotal'];
		$PrFieldsROHeader['enteredby'] = $array[$i]['ROHeader']['strEnteredBy'];
		$PrFieldsROHeader['balancedue'] = $array[$i]['ROHeader']['fBalanceDue'];	
		$PrFieldsROHeader['laboramount'] = $array[$i]['ROHeader']['fLaborAmount'];
		$PrFieldsROHeader['partsamount'] = $array[$i]['ROHeader']['fPartsAmount'];
		$PrFieldsROHeader['taxamount'] = $array[$i]['ROHeader']['fTaxAmount'];
		$PrFieldsROHeader['hazardwasteamount'] = $array[$i]['ROHeader']['fHazardWasteAmount'];
		$PrFieldsROHeader['shopsuppliesamount'] = $array[$i]['ROHeader']['fShopSuppliesAmount'];
		
		$insROHeader = $Gen->UpdateQry('XML_ro',$PrFieldsROHeader," ro_id = '".$array[$i]['ROHeader']['lCandidateExtID']."'");
	}
	//Code to insert RODetail
	for($v=0;$v<count($array[$i]['RODetail']);$v++)
	{
		$PrFieldsRODetail = array();
		$PrFieldsRODetail['ro_id'] = $array[$i]['RODetail']['RONumber'];
		//$PrFieldsRODetail['transactiondetailextid'] = $array[$i]['RODetail']['lCandidateExtID'];
		$PrFieldsRODetail['lineitemsortorder'] = $array[$i]['RODetail']['lVehicleExtID'];
		$PrFieldsRODetail['company_id'] = $array[$i]['RODetail']['CompanyID'];
		$PrFieldsRODetail['unitquantity'] = $array[$i]['RODetail']['dtTransactionDate'];	
		$PrFieldsRODetail['unitcost'] = $array[$i]['RODetail']['nOdometer'];
		$PrFieldsRODetail['unitsale'] = $array[$i]['RODetail']['nOdometerOut'];
		$PrFieldsRODetail['extendedcost'] = $array[$i]['RODetail']['fTransactionTotal'];
		$PrFieldsRODetail['extendedsale'] = $array[$i]['RODetail']['strEnteredBy'];
		$PrFieldsRODetail['detaildescription'] = $array[$i]['RODetail']['fBalanceDue'];	
		$PrFieldsRODetail['technician'] = $array[$i]['RODetail']['fLaborAmount'];
		$PrFieldsRODetail['materialsupplier'] = $array[$i]['RODetail']['fPartsAmount'];
		$PrFieldsRODetail['materialmanufacturer'] = $array[$i]['RODetail']['fTaxAmount'];
		$PrFieldsRODetail['partnumber'] = $array[$i]['RODetail']['fHazardWasteAmount'];
		$PrFieldsRODetail['laborhours'] = $array[$i]['RODetail']['fShopSuppliesAmount'];
		$PrFieldsRODetail['laborrate'] = $array[$i]['RODetail']['fShopSuppliesAmount'];
		
		$insRODetail = $Gen->UpdateQry('XML_ro_details',$PrFieldsRODetail," transactiondetailextid = '".$array[$i]['RODetail']['lCandidateExtID']."'");
	}
	//Code to insert into Schedule
	for($v=0;$v<count($array[$i]['Schedule']);$v++)
	{
		$PrFieldsSchedule = array();
		//$PrFieldsSchedule['scheduleextid'] = $array[$i]['Schedule']['lScheduleExtID'];
		$PrFieldsSchedule['ro_id'] = $array[$i]['Schedule']['RONumber'];
		$PrFieldsSchedule['company_id'] = $array[$i]['Schedule']['CompanyID'];
		$PrFieldsSchedule['cust_id'] = $array[$i]['Schedule']['lCandidateExtID'];
		$PrFieldsSchedule['vehicle_id'] = $array[$i]['Schedule']['lVehicleExtID'];	
		$PrFieldsSchedule['scheduledate'] = $array[$i]['Schedule']['dtScheduleDate'];
		$PrFieldsSchedule['schedulecustomer'] = $array[$i]['Schedule']['strScheduleCustomer'];
		$PrFieldsSchedule['estimatedhours'] = $array[$i]['Schedule']['fEstimatedHours'];
		$PrFieldsSchedule['schedulenote'] = $array[$i]['Schedule']['strScheduleNote'];
		
		$insSchedule = $Gen->UpdateQry('XML_schedule',$PrFieldsSchedule," scheduleextid = '".$array[$i]['Schedule']['lScheduleExtID']."'");
	}
}
?>