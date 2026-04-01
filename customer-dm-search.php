<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$usr 		= new General;
function lastday($month = '', $year = '') {
   if (empty($month)) {
      $month = date('m');
   }
   if (empty($year)) {
      $year = date('Y');
   }
   $result = strtotime("{$year}-{$month}-01");
   $result = strtotime('-1 second', strtotime('+1 month', $result));
   return date('Y-m-d', $result);
}
function firstDay($month = '', $year = '')
{
    if (empty($month)) {
      $month = date('m');
   }
   if (empty($year)) {
      $year = date('Y');
   }
   $result = strtotime("{$year}-{$month}-01");
   return date('Y-m-d', $result);
} 
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
$search = "No";
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key'] != "")
{
	//echo "<pre>";print_r($_REQUEST);exit;
	//Map data
	if($_REQUEST['type'] == "months")
	{
		$Results = array();
		for($i=1;$i<=12;$i++)
		{
			$MapLRes = array();
			$Mapyear = $_REQUEST['year'];
			//$Mapstart = date("Y-m-d", mktime(0, 0, 0, 1, $i, $Mapyear));
			$Mapstart = firstDay($i,$_REQUEST['year']);
			$Maplast = lastday($i,$_REQUEST['year']);
			$MapLWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$Mapstart."' AND MIS_FirstVisited < '".$Maplast."' AND MIS_coordinates != '' ORDER BY MIS_FirstVisited DESC LIMIT 0,1000";
			//echo "<br>";
			$MapLFields		= "*";
			$MapLRes		= $usr->GetSelWhere($Table,$MapLFields,$MapLWhere);
			//echo "<pre>";print_r($MapLRes);exit;
			for($j=0;$j<count($MapLRes);$j++)
			{
				$MapLRes[$j]['MIS_firstname'] = str_replace("'","",$MapLRes[$j]['MIS_firstname']);
				$MapLRes[$j]['MIS_lastname'] = str_replace("'","",$MapLRes[$j]['MIS_lastname']);
				$MapLRes[$j]['MIS_address'] = str_replace("'","",$MapLRes[$j]['MIS_address']);
				$MapLRes[$j]['MIS_city'] = str_replace("'","",$MapLRes[$j]['MIS_city']);
				$MapLRes[$j]['MIS_state'] = str_replace("'","",$MapLRes[$j]['MIS_state']);
				list($latL,$langL) = explode(" ",$MapLRes[$j]['MIS_coordinates']);
				$MapLRes[$j]['lat'] = $latL;
				$MapLRes[$j]['lan'] = $langL;
			}
			$Results[$i]['MapLRes'] = $MapLRes;
			unset($MapLRes);
		}
		//echo "<pre>";print_r($Results);exit;
		$smarty->assign("Results",$Results);
		//$smarty->assign("MapLRescnt",count($MapLRes));
	}
	else
	{
		$Results = array();
		for($i=0;$i<10;$i++)
		{
			$MapLRes = array();
			$Mapyear = $_REQUEST['year']-$i;
			$Mapstart = firstDay("1",$Mapyear);
			$Maplast = lastday("12",$Mapyear);
			$MapTWhere		= "1=1 AND market_cust_id = '".$_SESSION['User']['UID']."' AND MIS_FirstVisited > '".$Mapstart."' AND MIS_FirstVisited < '".$Maplast."'  AND MIS_coordinates != '' ORDER BY MIS_FirstVisited DESC LIMIT 0,100";
			$MapTFields		= "*";
			$MapLRes		= $usr->GetSelWhere($Table,$MapTFields,$MapTWhere);
			for($k=0;$k<count($MapLRes);$k++)
			{
				$MapLRes[$k]['MIS_firstname'] = str_replace("'","",$MapLRes[$k]['MIS_firstname']);
				$MapLRes[$k]['MIS_lastname'] = str_replace("'","",$MapLRes[$k]['MIS_lastname']);
				$MapLRes[$k]['MIS_address'] = str_replace("'","",$MapLRes[$k]['MIS_address']);
				$MapLRes[$k]['MIS_city'] = str_replace("'","",$MapLRes[$k]['MIS_city']);
				$MapLRes[$k]['MIS_state'] = str_replace("'","",$MapLRes[$k]['MIS_state']);
				list($latT,$langT) = explode(" ",$MapLRes[$k]['MIS_coordinates']);
				//$MapLRes[$k]['MIS_coordinates'] = $latT.",".$langT;
				$MapLRes[$k]['lat'] = $latT;
				$MapLRes[$k]['lan'] = $langT;
			}
			$Results[$i]['MapLRes'] = $MapLRes;
			unset($MapLRes);
		}
		//echo "<prE>";print_r($Results);exit;
		$smarty->assign("Results",$Results);
	}
	$search = "Yes";
}
$smarty->assign("search",$search);
$smarty->assign("Page",$page);
$smarty->assign("Page1",$page1);
$smarty->display('customer-dm-search.tpl');
?>