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
//echo "<pre>";print_r($_REQUEST);exit;
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] != "")
{
	$where = "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_coordinates != ''";
	if(isset($_REQUEST['sdate']) && $_REQUEST['sdate'] != "" && isset($_REQUEST['edate']) && $_REQUEST['edate'] != "")
	{
		$sdate = $Gen->Date_Format($_REQUEST['sdate']);
		$edate = $Gen->Date_Format($_REQUEST['edate']);
		$where .= "AND MIS_FirstVisited >= '".$sdate."' AND MIS_FirstVisited <= '".$edate."'";
	}
	if(isset($_REQUEST['minamt']) && $_REQUEST['minamt'] != "" && isset($_REQUEST['maxamt']) && $_REQUEST['maxamt'] != "")
	{
		$where .= "AND MIS_LifeTotal >= '".$_REQUEST['minamt']."' AND MIS_LifeTotal <= '".$_REQUEST['maxamt']."'";
	}
	if(isset($_REQUEST['state']) && $_REQUEST['state'] != "")
	{
		$where .= "AND MIS_state LIKE '%".$_REQUEST['state']."%'";
	}
	if(isset($_REQUEST['city']) && $_REQUEST['city'] != "")
	{
		$where .= "AND MIS_city LIKE '%".$_REQUEST['city']."%'";
	}
	if(isset($_REQUEST['zipcode']) && $_REQUEST['zipcode'] != "")
	{
		$where .= "AND MIS_zip = '".$_REQUEST['zipcode']."'";
	}
	$MapTWhere		= $where." LIMIT 0,1000";
	$MapTFields		= "*";
	$MapTRes		= $usr->GetSelWhere($Table,$MapTFields,$MapTWhere);
	$maptotal = count($MapTRes);
	$lat_tot = 0;
	$lang_tot = 0;
	for($k=0;$k<count($MapTRes);$k++)
	{
		list($latT,$langT) = explode(" ",$MapTRes[$k]['MIS_coordinates']);
		$MapTRes[$k]['MIS_coordinates'] = $latT.",".$langT;
		$lat_tot = $lat_tot+$latT;
		$lang_tot = $lang_tot+$langT;
	}
	if($maptotal >0 )
	{
		$lat_avg = $lat_tot/($maptotal);
		$lang_avg = $lang_tot/($maptotal);
	}
	/*echo $maptotal;
	echo "<br>";
	echo $lat_tot."----".$lang_tot;
	echo "<br>";
	echo $lat_avg."----".$lang_avg;
	exit();*/
	//echo "<pre>"; print_r($MapTRes);exit;
	$smarty->assign("MapRes",$MapTRes);
	$smarty->assign("MapTRes",$MapTRes);
	$smarty->assign("MapTRescnt",count($MapTRes));
	$smarty->assign("Search","YES");
}
else
{
	/*if(isset($_REQUEST['hid_key1']) && $_REQUEST['hid_key1'] != "")
	{
		echo "<pre>";print_r($_REQUEST);exit;
	}*/
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
	
	if($_REQUEST['lastyear'] == "")
	{
		//Last Year Records
		$Mapyear = date('Y') - 1;
		$Maplast = date("Y-m-d", mktime(0, 0, 0, 1, 1, $Mapyear));
		$Map3month = date('m') - 3;
		$Maplast3month = date("Y-m-d", mktime(0, 0, 0, 1, $Map3month, date('Y')));
		$MapLWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$Maplast."' AND MIS_FirstVisited < '".$Maplast3month."' AND MIS_coordinates != '' ORDER BY MIS_FirstVisited DESC LIMIT 0,1000";
		$MapLFields		= "*";
		$MapLRes		= $usr->GetSelWhere($Table,$MapLFields,$MapLWhere);
		//echo "<pre>";print_r($MapLRes);exit;
		for($j=0;$j<count($MapLRes);$j++)
		{
			list($latL,$langL) = explode(" ",$MapLRes[$j]['MIS_coordinates']);
			$MapLRes[$j]['MIS_coordinates'] = $latL.",".$langL;
		}
		$smarty->assign("MapLRes",$MapLRes);
		$smarty->assign("MapLRescnt",count($MapLRes));
	}
	if($_REQUEST['lastm'] == "")
	{
		//Last Month Records
		$Mapyear = date('Y') ;
		$Mapmonth = date('m') -1 ;
		$Maplastmonth = date("Y-m-d", mktime(0, 0, 0, 1, $Mapmonth, $Mapyear));
		$MapLMWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$Maplastmonth."' AND MIS_coordinates != '' ORDER BY MIS_FirstVisited DESC LIMIT 0,1000";
		$MapLMFields		= "*";
		$MapLMRes		= $usr->GetSelWhere($Table,$MapLMFields,$MapLMWhere);
		for($k=0;$k<count($MapLMRes);$k++)
		{
			list($latLM,$langLM) = explode(" ",$MapLMRes[$k]['MIS_coordinates']);
			$MapLMRes[$k]['MIS_coordinates'] = $latLM.",".$langLM;
		}
		$smarty->assign("MapLMRes",$MapLMRes);
		$smarty->assign("MapLMRescnt",count($MapLMRes));
	}
	if($_REQUEST['last3m'] == "")
	{
		//Last 3 Months Records
		$Mapyear = date('Y') ;
		$Map3month = date('m') - 3;
		$Maplast3month = date("Y-m-d", mktime(0, 0, 0, 1, $Map3month, $Mapyear));
		$Mapmonth = date('m') -1 ;
		$Maplastmonth = date("Y-m-d", mktime(0, 0, 0, 1, $Mapmonth, $Mapyear));
		$MapL3MWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$Maplast3month."' AND MIS_FirstVisited < '".$Maplastmonth."' AND MIS_coordinates != '' ORDER BY MIS_FirstVisited DESC LIMIT 0,1000";
		$MapL3MFields		= "*";
		$MapL3MRes		= $usr->GetSelWhere($Table,$MapL3MFields,$MapL3MWhere);
		for($l=0;$l<count($MapL3MRes);$l++)
		{
			list($latL3M,$langL3M) = explode(" ",$MapL3MRes[$l]['MIS_coordinates']);
			$MapL3MRes[$l]['MIS_coordinates'] = $latL3M.",".$langL3M;
		}
		$smarty->assign("MapL3MRes",$MapL3MRes);
		$smarty->assign("MapL3MRescnt",count($MapL3MRes));
	}
	if($_REQUEST['totcust'] == "")
	{
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
	}
	if($_REQUEST['comphid'] == "all")
	{
		$lat_tot = 0;
		$lang_tot = 0;
		//Competitor Records
		$Table = "tbl_competitors";
		$MapTWhere		= "1=1 AND user_id = '".$_SESSION['User']['UID']."' AND status = 'A'";
		$MapTFields		= "*";
		$MapTRes		= $usr->GetSelWhere($Table,$MapTFields,$MapTWhere);
		for($k=0;$k<count($MapTRes);$k++)
		{
			list($latT,$langT) = explode(" ",$MapTRes[$k]['coordinates']);
			$MapTRes[$k]['coordinates'] = $latT.",".$langT;
			$lat_tot = $lat_tot+$latT;
			$lang_tot = $lang_tot+$langT;
		}
		$lat_avg = $lat_tot/count($MapTRes);
		$lang_avg = $lang_tot/count($MapTRes);
		$smarty->assign("MapCRes",$MapTRes);
		$smarty->assign("MapCRescnt",count($MapTRes));
		//echo count($MapTRes);exit;
	}
	//echo "<pre>";print_r($MapTRes);exit;
	$smarty->assign("Search","NO");
}

if($AccDetarr[0]['coordinates'] != "")
		list($latshop,$langshop) = explode(" ",$AccDetarr[0]['coordinates']);
		
$lat_avg_shop = $latshop;
$lang_avg_shop = $langshop;
$smarty->assign("lat_avg_shop",$lat_avg_shop);
$smarty->assign("lang_avg_shop",$lang_avg_shop);

$smarty->assign("lat_avg",$lat_avg);
$smarty->assign("lang_avg",$lang_avg);
$smarty->assign("Page",$page);
$smarty->assign("Page1",$page1);
$smarty->display('customer-dm1.tpl');
?>