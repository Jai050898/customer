<?php
require_once("/home/navigato/public_html/includes/application_start.php");
require_once("/home/navigato/public_html/apiwrapper/examples/Webthumb/usage.php");
$usr 		= new General;
$Users = $usr->GetSelWhere("tbl_users A LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID","A.*,C.State_Name","1=1 AND A.status = 'A'");
//echo date("Y-m-d H:i:s");exit;
//echo count($Users);exit;
//echo "<pre>";print_r($Users);exit;
for($i=0;$i<count($Users);$i++)
{
	$url1 = "http://www.google.com/#hl=en&q=auto+repair+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$res = usage($url1);
	$PrFields['customer_id'] = $Users[$i]['user_id'];
	$PrFields['date'] = date("Y-m-d");
	$PrFields['image'] = $res.".jpg";
	$PrFields['type'] = "G";
	$ins= $Gen->InsertQry('tbl_thumbnails',$PrFields);
	
	$url2 = "http://www.google.com/#hl=en&q=tires+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$res2 = usage($url2);
	$PrFields1['customer_id'] = $Users[$i]['user_id'];
	$PrFields1['date'] = date("Y-m-d");
	$PrFields1['image'] = $res2.".jpg";
	$PrFields1['type'] = "G";
	$ins= $Gen->InsertQry('tbl_thumbnails',$PrFields1);
	
	$url3 = "http://www.google.com/#hl=en&q=oil+change+".str_replace(" ","+",$Users[$i]['city'])."+".str_replace(" ","+",$Users[$i]['State_Name']);
	$res3 = usage($url3);
	$PrFields2['customer_id'] = $Users[$i]['user_id'];
	$PrFields2['date'] = date("Y-m-d");
	$PrFields2['image'] = $res3.".jpg";
	$PrFields2['type'] = "G";
	$ins= $Gen->InsertQry('tbl_thumbnails',$PrFields2);
}
?>