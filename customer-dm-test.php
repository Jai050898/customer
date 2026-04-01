<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
$page = "customers";
$page1 = "map";
//Shop Details
$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code
							LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= 'A.first_name,A.last_name,A.email,A.user_name,A.company_name,A.phone,A.fax,A.address,A.city,A.country,A.state,A.zip_code,A.website,A.coordinates,B.Country_Name,C.State_Name';
$AccDetarr	= $Gen->GetSelWhere($Table,$Fields," user_id = ".$_SESSION['User']['UID']);
for($i=0;$i<count($AccDetarr);$i++)
{
	if($AccDetarr[$i]['coordinates'] != "")
		list($lat,$lang) = explode(" ",$AccDetarr[$i]['coordinates']);

	$AccDetarr[$i]['coordinates'] = $lat.",".$lang;
}
$AccDet	 = $AccDetarr;
$smarty->assign("AccDet",$AccDet);
$smarty->assign("AccDetcnt",count($AccDet));
$Table		= "MIS_customers ";

//Map data
$MapWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_coordinates != '' ORDER BY MIS_FirstVisited DESC LIMIT 0,1000";
$MapTable		= "MIS_customers ";
$MApFields		= "*";
$MapRes 	= $usr->GetSelWhere($MapTable,$MApFields,$MapWhere);
$maptotal = count($MapRes);
$lat_tot = 0;
$lang_tot = 0;
/*if($AccDet[0]['coordinates'] != "")
	list($lat_tot,$lang_tot) = explode(" ",$AccDet[0]['coordinates']);*/

for($i=0;$i<count($MapRes);$i++)
{
	if($MapRes[$i]['MIS_coordinates'] != "")
	{
		list($lat,$lang) = explode(" ",$MapRes[$i]['MIS_coordinates']);
		$lat_tot = $lat_tot+$lat;
		$lang_tot = $lang_tot+$lang;
	}
	$MapRes[$i]['MIS_coordinates'] = $lat.",".$lang;
}
if($maptotal >0 )
{
	$lat_avg = $lat_tot/($maptotal);
	$lang_avg = $lang_tot/($maptotal);
}
//echo "<pre>";print_r($MapRes);exit;
$smarty->assign("MapRes",$MapRes);
$smarty->assign("MapRescnt",count($MapRes));

//Total Records
$year = date('Y') - 1;
$last = date("Y-m-d", mktime(0, 0, 0, 1, 1, $year));
$MapTWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited < '".$last."' AND MIS_coordinates != '' ORDER BY MIS_FirstVisited DESC LIMIT 0,1000";
$MapTFields		= "*";
$MapTRes		= $usr->GetSelWhere($Table,$MapTFields,$MapTWhere);
for($k=0;$k<count($MapTRes);$k++)
{
	list($latT,$langT) = explode(" ",$MapTRes[$k]['MIS_coordinates']);
	$MapTRes[$k]['MIS_coordinates'] = $latT.",".$langT;
}
$smarty->assign("MapTRes",$MapTRes);
$smarty->assign("MapTRescnt",count($MapTRes));

	
if($AccDetarr[0]['coordinates'] != "")
		list($latshop,$langshop) = explode(",",$AccDetarr[0]['coordinates']);
		
$lat_avg_shop = $latshop;
$lang_avg_shop = $langshop;

$smarty->assign("lat_avg_shop",$lat_avg_shop);
$smarty->assign("lang_avg_shop",$lang_avg_shop);

$smarty->assign("lat_avg",$lat_avg);
$smarty->assign("lang_avg",$lang_avg);
$smarty->assign("Page",$page);
$smarty->assign("Page1",$page1);
$smarty->display('customer-dm-test.tpl');
?>