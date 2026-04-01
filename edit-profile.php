<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','Edit Profile');
$Page = 'account';
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Edit')
{
	$InsArr				= $_REQUEST['Log'];
	$InsArr['state']	= $_REQUEST['state'][0];
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
		
	$InsArr['payment_type'] = implode(",",$parray);
	$InsArr['language'] = implode(",",$larray);
	$InsArr['services'] = implode(",",$sarray);
	$InsArr['brands'] = implode(",",$barray);
	
	list($m,$d,$y) = explode("-",$InsArr['dob']);
	$InsArr['dob'] = $y."-".$m."-".$d;
	//echo "<pre>";print_r($InsArr);exit;
	$Result 			= $Gen->UpdateQry('tbl_users',$InsArr," user_id = ".$_SESSION['User']['UID']);
	if(count($hourLog) == 0){
					$insarr = array();
					$insarr = $_REQUEST['Log1'];
					$insarr['user_id'] = $_SESSION['User']['UID'];
					$insHourLog = $Gen->InsertQry('tbl_user_hour_log',$insarr);
			}
	if(count($hourLog) > 0){
		$UpArr = array();
		$UpArr = $_REQUEST['Log1'];
		$UpHourLog	= $Gen->UpdateQry("tbl_user_hour_log",$UpArr,"user_id = ".$_SESSION['User']['UID']);
	}
	if($Result)
	{	$Gen->DeleteQry('tbl_shops_cites',"sid = '".$_SESSION['User']['UID']."'");
		for($i=0;$i<count($_REQUEST['taget_citiesold']);$i++)
		{
			if($_REQUEST['taget_citiesold'][$i] != "")
			{
				$insarr = array();
				$insarr['sid'] = $_SESSION['User']['UID'];
				$insarr['city_name'] = $_REQUEST['taget_citiesold'][$i];
				$ins11 						= $Gen->InsertQry('tbl_shops_cites',$insarr);
			}
		}
		for($i=0;$i<count($_REQUEST['taget_cities']);$i++)
		{
			if($_REQUEST['taget_cities'][$i] != "")
			{
				$insarr1 = array();
				$insarr1['sid'] = $_SESSION['User']['UID'];
				$insarr1['city_name'] = $_REQUEST['taget_cities'][$i];
				$ins12 		= $Gen->InsertQry('tbl_shops_cites',$insarr1);
			}
		}		
	}
	header('Location:'.SITEURL.'/myaccount.php');
}
$Table		= "tbl_users A LEFT JOIN tbl_country B ON A.country = B.Country_Code
							LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
$Fields		= 'A.*,B.Country_Name,C.State_Name,C.State_Code';
$AccDet		= $Gen->GetSelWhere($Table,$Fields," user_id = ".$_SESSION['User']['UID']);
$Country			= $Gen->GetSelWhere('tbl_country','Country_ID,Country_Code,Country_Name'," Country_ID != '' ORDER BY Country_Name ASC");
$smarty->assign('country',$Country);
$State			= $Gen->GetSelWhere('tbl_states','State_ID,State_Name,State_Code'," Country_Code = '".$AccDet[0]['country']."' ORDER BY State_ID ASC");
$smarty->assign('State',$State);
$smarty->assign('AccDet',$AccDet[0]);
$PTarray = explode(",",$AccDet[0]['payment_type']);
$smarty->assign('PTarray',$PTarray);
$LGarray = explode(",",$AccDet[0]['language']);
$smarty->assign('LGarray',$LGarray);
$KEYarray = explode(",",$AccDet[0]['services']);
$smarty->assign('KEYarray',$KEYarray);
$Brandsarray = explode(",",$AccDet[0]['brands']);
$smarty->assign('Brandsarray',$Brandsarray);
$hourLog = array();
$hourLog	= $Gen->GetSelWhere('tbl_user_hour_log','*'," user_id = '".$_SESSION['User']['UID']."'");
$Cities	= $Gen->GetSelWhere('tbl_shops_cites','*'," sid = '".$AccDet[0]['user_id']."' ORDER BY id");
$smarty->assign('Cities',$Cities);
$smarty->assign('hourLog',$hourLog[0]);
$hrs = array("00:00 AM", "00:30 AM", "01:00 AM", "01:30 AM", "02:00 AM", "02:30 AM", "03:00 AM", "03:30 AM", "04:00 AM", "04:30 AM", "05:00 AM", "05:30 AM", "06:00 AM", "06:30 AM", "07:00 AM", "07:30 AM", "08:00 AM", "08:30 AM", "09:00 AM", "09:30 AM", "10:00 AM", "10:30 AM", "11:00 AM", "11:30 AM", "12:00 PM", "12:30 PM", "01:00 PM", "01:30 PM", "02:00 PM", "02:30 PM", "03:00 PM", "03:30 PM", "04:00 PM", "04:30 PM", "05:00 PM", "05:30 PM", "06:00 PM", "06:30 PM", "07:00 PM", "07:30 PM", "08:00 PM", "08:30 PM", "09:00 PM", "09:30 PM", "10:00 PM", "10:30 PM", "11:00 PM", "11:30 PM", );
$smarty->assign('hrs',$hrs);
//Code to Get Keywords
$KEY = $Gen->GetSelWhere("tbl_keywords","key_id,key_name","1=1 AND status = 'A'");
$smarty->assign('KEY',$KEY);
//echo "<pre>";print_r($KEY);exit;
//Code to Get Brands
$BrandsCat = $Gen->GetSelWhere("tbl_brand_categories","id,name","1=1 AND status = 'A' ORDER BY name");
for($i=0;$i<count($BrandsCat);$i++)
{
	$brands = $Gen->GetSelWhere("tbl_brands","brand_id,brand_name","1=1 AND cid = '".$BrandsCat[$i]['id']."' AND status = 'A' ORDER BY brand_name");
	if(count($brands) > 0)
		$BrandsCat[$i]['Brands'] = $brands;
}
//echo "<pre>";print_r($BrandsCat);exit;
$smarty->assign('Brands',$BrandsCat);
$Rbrands = $Gen->GetSelWhere("tbl_brands","brand_id,brand_name","1=1 AND cid = '0' AND status = 'A' ORDER BY brand_name");
$smarty->assign('Rbrands',$Rbrands);
//Code to get Payment Types
$PT = $Gen->GetSelWhere("tbl_payment_types","id,payment_type","1=1 AND status = 'A'");
$smarty->assign('PT',$PT);
//Code to get Language
$LG = $Gen->GetSelWhere("tbl_languages","id,languages","1=1 AND status = 'A'");
$smarty->assign('LG',$LG);
//Code to get Annua Sales
$AS = $Gen->GetSelWhere("tbl_annual_revenue","id,annual_revenue","1=1 AND status = 'A'");
$smarty->assign('AS',$AS);
$smarty->assign('Page',$Page);
$smarty->display('edit-profile.tpl');
?>