<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$usr 		= new General;

/*****section to get the details from data base*********************/
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "")
{
	$Fields 	= "*";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$user	= $usr->GetSelWhere("tbl_users",$Fields,$Where);
	//echo '<pre>';print_r($user);exit;
	$smarty->assign('User',$user[0]);
	//Code to get Countries
	$States	= $Gen->GetSelWhere('tbl_states','State_ID,State_Name'," Country_Code = '".$user[0]['country']."' ORDER BY State_ID");
	$smarty->assign('States',$States);
	
	$PTarray = explode(",",$user[0]['payment_type']);
	$smarty->assign('PTarray',$PTarray);
	$LGarray = explode(",",$user[0]['language']);
	$smarty->assign('LGarray',$LGarray);
	$KEYarray = explode(",",$user[0]['services']);
	$smarty->assign('KEYarray',$KEYarray);
	$Brandsarray = explode(",",$user[0]['brands']);
	$smarty->assign('Brandsarray',$Brandsarray);
	$Cities	= $Gen->GetSelWhere('tbl_shops_cites','*'," sid = '".$user[0]['user_id']."' ORDER BY id");
	$smarty->assign('Cities',$Cities);
}
if(isset($_REQUEST['user_id']) && $_REQUEST['user_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['state'] = $_REQUEST['state'][0];
	if(!isset($PrFields['access_to_mark_survey']) )
		$PrFields['access_to_mark_survey'] = "N";
	if(!isset($PrFields['access_to_site_survey']) )
		$PrFields['access_to_site_survey'] = "N";
	if(!isset($PrFields['access_to_integrated_survey']) )
		$PrFields['access_to_integrated_survey'] = "N";
	for($i=0;$i<count($_REQUEST['payment_type']);$i++)
		$parray[] = $_REQUEST['payment_type'][$i];
	for($i=0;$i<count($_REQUEST['language']);$i++)
		$larray[] = $_REQUEST['language'][$i];
	for($i=0;$i<count($_REQUEST['services']);$i++)
		$sarray[] = $_REQUEST['services'][$i];
	for($i=0;$i<count($_REQUEST['brands']);$i++)
		$barray[] = $_REQUEST['brands'][$i];
		
	$PrFields['payment_type'] = implode(",",$parray);
	$PrFields['language'] = implode(",",$larray);
	$PrFields['services'] = implode(",",$sarray);
	$PrFields['brands'] = implode(",",$barray);
		
	$UpOverview 				= $Gen->UpdateQry("tbl_users",$PrFields,"user_id = ".$_REQUEST['user_id']);
	if($UpOverview)
	{
		$Gen->DeleteQry('tbl_shops_cites',"sid = '".$_REQUEST['user_id']."'");
		for($i=0;$i<count($_REQUEST['taget_citiesold']);$i++)
		{
			if($_REQUEST['taget_citiesold'][$i] != "")
			{
				$insarr = array();
				$insarr['sid'] = $_REQUEST['user_id'];
				$insarr['city_name'] = $_REQUEST['taget_citiesold'][$i];
				$ins11 						= $Gen->InsertQry('tbl_shops_cites',$insarr);
			}
		}
		for($i=0;$i<count($_REQUEST['taget_cities']);$i++)
		{
			if($_REQUEST['taget_cities'][$i] != "")
			{
				$insarr1 = array();
				$insarr1['sid'] = $_REQUEST['user_id'];
				$insarr1['city_name'] = $_REQUEST['taget_cities'][$i];
				$ins12 						= $Gen->InsertQry('tbl_shops_cites',$insarr1);
			}
		}		
	}
	header("Location:".SITEURL.'/seo/manage-users.php');
	exit;
}
//Code to get Countries
$Country	= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_ID");
$smarty->assign('country',$Country);
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

$smarty->display('add-user.tpl');
?>