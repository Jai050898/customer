<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
function format_phone($phone)
{
	$phone = preg_replace("/[^0-9]/", "", $phone);

	if(strlen($phone) == 7)
		return preg_replace("/([0-9]{3})([0-9]{4})/", "$1-$2", $phone);
	elseif(strlen($phone) == 10)
		return preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "$1-$2-$3", $phone);
	else
		return $phone;
}
/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
	$Fields		= "A.*,B.Country_Name,C.State_Name,C.State_Code";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	$User[0]['phone'] = format_phone($User[0]['phone']);
	$User[0]['fax'] = format_phone($User[0]['fax']);
	$smarty->assign('User',$User[0]);
	//Payment Type Arr
	if($User[0]['payment_type'] != "")
	{
		$PT	= $Gen->GetSelWhere('tbl_payment_types','*'," id IN(".$User[0]['payment_type'].")");
		$PTarr = array();
		for($c=0;$c<count($PT);$c++)
		{
			$PTarr[] = $PT[$c]['payment_type'];
		}
		$PTNames = implode(",",$PTarr);
	}
	else
		$PTNames = "";
	$smarty->assign('PTNames',$PTNames);
	//$PTarray = explode(",",$User[0]['payment_type']);
	//$smarty->assign('PTarray',$PTarray);
	//LAnguages
	if($User[0]['language'] != "")
	{
		$LG	= $Gen->GetSelWhere('tbl_languages','*'," id IN(".$User[0]['language'].")");
		$LGarr = array();
		for($c=0;$c<count($LG);$c++)
		{
			$LGarr[] = $LG[$c]['languages'];
		}
		$LGNames = implode(",",$LGarr);
	}
	else
		$LGNames = "";
		
	$smarty->assign('LGNames',$LGNames);
	//$LGarray = explode(",",$User[0]['language']);
	//$smarty->assign('LGarray',$LGarray);
	//Annual Revenue
	if($User[0]['gross_revenue'] != "")
		$AR	= $Gen->GetInfoBy('tbl_annual_revenue','id',$User[0]['gross_revenue']);
	else
		$AR['annual_revenue'] = "";
		
	$smarty->assign("AR",$AR['annual_revenue']);
	
	//Primary Automative Services
	if($User[0]['services'] != "")
	{
		$PA	= $Gen->GetSelWhere('tbl_keywords','*'," key_id IN(".$User[0]['services'].")");
	
		$PAarr = array();
		for($c=0;$c<count($PA);$c++)
		{
			$PAarr[] = $PA[$c]['key_name'];
		}
		$PANames = implode(",",$PAarr);
	}
	else
		$PANames = "";
	$smarty->assign('PANames',$PANames);
		
	//$KEYarray = explode(",",$User[0]['services']);
	//$smarty->assign('KEYarray',$KEYarray);
	if($User[0]['brands'] != "")
	{
		$Brand	= $Gen->GetSelWhere('tbl_brands','*'," brand_id IN(".$User[0]['brands'].")");
	
		$Brandarr = array();
		for($c=0;$c<count($Brand);$c++)
		{
			$Brandarr[] = $Brand[$c]['brand_name'];
		}
		$BrandNames = implode(",",$Brandarr);
	}
	else
		$BrandNames = "";
	$smarty->assign('BrandNames',$BrandNames);
	
	//$Brandsarray = explode(",",$User[0]['brands']);
	//$smarty->assign('Brandsarray',$Brandsarray);
	
	$Cities	= $Gen->GetSelWhere('tbl_shops_cites','*'," sid = '".$User[0]['user_id']."' ORDER BY id");
	$cityarr = array();
	for($c=0;$c<count($Cities);$c++)
	{
		$cityarr[] = $Cities[$c]['city_name'];
	}
	$CitiesNames = implode(",",$cityarr);
	$smarty->assign('Cities',$CitiesNames);
	//echo "<prE>";print_r($CitiesNames);exit;
	$hourLog	= $Gen->GetSelWhere('tbl_user_hour_log','*'," user_id = '".$_REQUEST['user_id']."'");
	$smarty->assign('hourLog',$hourLog[0]);
}
//Code to Get Keywords
$KEY = $usr->GetSelWhere("tbl_keywords","key_id,key_name","1=1 AND status = 'A'");
$smarty->assign('KEY',$KEY);
//Code to Get Brands
$Brands = $usr->GetSelWhere("tbl_brands","brand_id,brand_name","1=1 AND status = 'A'");
$smarty->assign('Brands',$Brands);
//Code to get Payment Types
$PT = $usr->GetSelWhere("tbl_payment_types","id,payment_type","1=1 AND status = 'A'");
$smarty->assign('PT',$PT);
//Code to get Language
$LG = $usr->GetSelWhere("tbl_languages","id,languages","1=1 AND status = 'A'");
$smarty->assign('LG',$LG);
//Code to get Annua Sales
$AS = $usr->GetSelWhere("tbl_annual_revenue","id,annual_revenue","1=1 AND status = 'A'");
$smarty->assign('AS',$AS);
$smarty->display('view-user.tpl');
?>