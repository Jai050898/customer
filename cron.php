<?php
require_once("/home/automark/public_html/MM/customer/includes/application_start.php");
require_once("/home/automark/public_html/MM/customer/apiwrapper/examples/Webthumb/usage.php");
$usr 		= new General;
$Users = $usr->GetSelWhere("tbl_users A LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID","A.*,C.State_Name","1=1 AND A.status = 'A'");
//echo date("Y-m-d H:i:s");exit;
//echo count($Users);exit;
//echo "<pre>";print_r($Users);exit;
for($i=0;$i<count($Users);$i++)
{
	
	//Code for google
	$url1 = "http://www.google.com/#hl=en&q=auto+repair+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$res = usage($url1,"G");
	$PrFields['customer_id'] = $Users[$i]['user_id'];
	$PrFields['date'] = date("Y-m-d");
	$PrFields['image'] = $res.".jpg";
	$PrFields['type'] = "G";
	$ins= $Gen->InsertQry('tbl_thumbnails',$PrFields);
	sleep(12);
	$url2 = "http://www.google.com/#hl=en&q=tires+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$res2 = usage($url2,"G");
	$PrFields1['customer_id'] = $Users[$i]['user_id'];
	$PrFields1['date'] = date("Y-m-d");
	$PrFields1['image'] = $res2.".jpg";
	$PrFields1['type'] = "G";
	$ins= $Gen->InsertQry('tbl_thumbnails',$PrFields1);
	sleep(12);
	$url3 = "http://www.google.com/#hl=en&q=oil+change+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$res3 = usage($url3,"G");
	$PrFields2['customer_id'] = $Users[$i]['user_id'];
	$PrFields2['date'] = date("Y-m-d");
	$PrFields2['image'] = $res3.".jpg";
	$PrFields2['type'] = "G";
	$ins= $Gen->InsertQry('tbl_thumbnails',$PrFields2);
	sleep(12);
	//Code For Bing
	$burl1 = "http://www.bing.com/search?q=auto+repair+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$bres = usage($burl1,"B");
	$bPrFields['customer_id'] = $Users[$i]['user_id'];
	$bPrFields['date'] = date("Y-m-d");
	$bPrFields['image'] = $bres.".jpg";
	$bPrFields['type'] = "B";
	$bins= $Gen->InsertQry('tbl_thumbnails',$bPrFields);
	sleep(12);
	$burl2 = "http://www.bing.com/search?q=tires+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$bres2 = usage($burl2,"B");
	$bPrFields1['customer_id'] = $Users[$i]['user_id'];
	$bPrFields1['date'] = date("Y-m-d");
	$bPrFields1['image'] = $bres2.".jpg";
	$bPrFields1['type'] = "B";
	$bins= $Gen->InsertQry('tbl_thumbnails',$bPrFields1);
	sleep(12);
	$burl3 = "http://www.bing.com/search?q=oil+change+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$bres3 = usage($burl3,"B");
	$bPrFields2['customer_id'] = $Users[$i]['user_id'];
	$bPrFields2['date'] = date("Y-m-d");
	$bPrFields2['image'] = $bres3.".jpg";
	$bPrFields2['type'] = "B";
	$bins= $Gen->InsertQry('tbl_thumbnails',$bPrFields2);
	sleep(12);
	//Code For yahoo
	$yurl1 = "http://search.yahoo.com/search;_ylt=Am0Hhr3k1tUR6maq1mU8Cr6bvZx4?p=auto+repair+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$yres = usage($yurl1,"Y");
	$yPrFields['customer_id'] = $Users[$i]['user_id'];
	$yPrFields['date'] = date("Y-m-d");
	$yPrFields['image'] = $yres.".jpg";
	$yPrFields['type'] = "Y";
	$yins= $Gen->InsertQry('tbl_thumbnails',$yPrFields);
	sleep(12);
	$yurl2 = "http://search.yahoo.com/search;_ylt=Am0Hhr3k1tUR6maq1mU8Cr6bvZx4?p=tires+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$yres2 = usage($yurl2,"Y");
	$yPrFields1['customer_id'] = $Users[$i]['user_id'];
	$yPrFields1['date'] = date("Y-m-d");
	$yPrFields1['image'] = $yres2.".jpg";
	$yPrFields1['type'] = "Y";
	$yins= $Gen->InsertQry('tbl_thumbnails',$yPrFields1);
	sleep(12);
	$yurl3 = "http://search.yahoo.com/search;_ylt=Am0Hhr3k1tUR6maq1mU8Cr6bvZx4?p=oil+change+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$yres3 = usage($yurl3,"Y");
	$yPrFields2['customer_id'] = $Users[$i]['user_id'];
	$yPrFields2['date'] = date("Y-m-d");
	$yPrFields2['image'] = $yres3.".jpg";
	$yPrFields2['type'] = "Y";
	$yins= $Gen->InsertQry('tbl_thumbnails',$yPrFields2);
	
}
?>