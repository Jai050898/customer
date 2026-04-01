<?php

require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
$CustInfo = $Gen->GetInfoBy("tbl_users","user_id",$_REQUEST['id']); 
$state = $Gen->GetAllWhere("tbl_states","Country_Code = '".$CustInfo['country']."' AND State_ID = '".$CustInfo['state']."'"); 
$CustInfo['state'] = $state[0]['State_Name'];

/*****section to get the details from data base*********************/
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
{
	$Fields 	= "*";
	$Where 		= "sid = ".$_REQUEST['id'];
	$Cat	= $usr->GetSelWhere("tbl_site_inspection",$Fields,$Where);
	$smarty->assign('Cat',$Cat[0]);
	if($Cat[0]['keywords'] != "")
		$KEYarray = explode(",",$Cat[0]['keywords']);
	else
		$KEYarray = explode(",",$CustInfo['services']);
	//echo "<prE>";print_r($KEYarray);
	$smarty->assign('KEYarray',$KEYarray);
	
	if($Cat[0]['brands'] != "")
		$Brandsarray = explode(",",$Cat[0]['brands']);
	else
		$Brandsarray = explode(",",$CustInfo['brands']);
	//echo "<prE>";print_r($Brandsarray);exit;
	$smarty->assign('Brandsarray',$Brandsarray);
}
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "" && $_REQUEST['hid_key']=='Post' && !empty($Cat)) 
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	if(!isset($PrFields['ga_verified']))
		$PrFields['ga_verified'] = "N";
	if(!isset($PrFields['gw_verified']))
		$PrFields['gw_verified'] = "N";
	if(!isset($PrFields['galerts']))
		$PrFields['galerts'] = "N";
	if(!isset($PrFields['gadwords']))
		$PrFields['gadwords'] = "N";	
	if(!isset($PrFields['youtubepage']))
		$PrFields['youtubepage'] = "N";
		
	if(!isset($PrFields['ep_301']))
		$PrFields['ep_301'] = "N";
	if(!isset($PrFields['ep_400']))
		$PrFields['ep_400'] = "N";
	if(!isset($PrFields['ep_401']))
		$PrFields['ep_401'] = "N";
	if(!isset($PrFields['ep_403']))
		$PrFields['ep_403'] = "N";
	if(!isset($PrFields['ep_404']))
		$PrFields['ep_404'] = "N";
	if(!isset($PrFields['ep_500']))
		$PrFields['ep_500'] = "N";
	if(!isset($PrFields['privacy']))
		$PrFields['privacy'] = "N";
	if(!isset($PrFields['tos']))
		$PrFields['tos'] = "N";
	if(!isset($PrFields['disclaimer']))
		$PrFields['disclaimer'] = "N";
	if(!isset($PrFields['copyright']))
		$PrFields['copyright'] = "N";
	if(!isset($PrFields['robots']))
		$PrFields['robots'] = "N";
	if(!isset($PrFields['ico_icon']))
		$PrFields['ico_icon'] = "N";
	if(!isset($PrFields['hcard']))
		$PrFields['hcard'] = "N";
	if(!isset($PrFields['raven_setup']))
		$PrFields['raven_setup'] = "N";
	if(!isset($PrFields['ga_linked']))
		$PrFields['ga_linked'] = "N";
	if(!isset($PrFields['gwt_linked']))
		$PrFields['gwt_linked'] = "N";
	if(!isset($PrFields['fb_linked']))
		$PrFields['fb_linked'] = "N";
	if(!isset($PrFields['t_linked']))
		$PrFields['t_linked'] = "N";
	for($i=0;$i<count($_REQUEST['services']);$i++)
		$sarray[] = $_REQUEST['services'][$i];
	for($i=0;$i<count($_REQUEST['brands']);$i++)
		$barray[] = $_REQUEST['brands'][$i];

	$PrFields['keywords'] = implode(",",$sarray);
	$PrFields['brands'] = implode(",",$barray);
	//echo "<prE>";print_r($PrFields);exit;
	$UpOverview 				= $Gen->UpdateQry("tbl_site_inspection",$PrFields,"sid = ".$_REQUEST['id']);
	header("Location:".SITEURL.'/admin/manage-users.php');
	exit;
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$PrFields['sid'] = $_REQUEST['id'];
	for($i=0;$i<count($_REQUEST['services']);$i++)
		$sarray[] = $_REQUEST['services'][$i];
	for($i=0;$i<count($_REQUEST['brands']);$i++)
		$barray[] = $_REQUEST['brands'][$i];
	$PrFields['keywords'] = implode(",",$sarray);
	$PrFields['brands'] = implode(",",$barray);

	$ins 						= $Gen->InsertQry('tbl_site_inspection',$PrFields);
	header("Location:".SITEURL.'/admin/manage-users.php');
}
$smarty->assign('CustInfo',$CustInfo);
$KEY = $usr->GetSelWhere("tbl_keywords","key_id,key_name","1=1 AND status = 'A'");
$smarty->assign('KEY',$KEY);

$BrandsCat = $Gen->GetSelWhere("tbl_brand_categories","id,name","1=1 AND status = 'A' ORDER BY name");
for($i=0;$i<count($BrandsCat);$i++)
{
	$brands = $Gen->GetSelWhere("tbl_brands","brand_id,brand_name","1=1 AND cid = '".$BrandsCat[$i]['id']."' AND status = 'A' ORDER BY brand_name");
	if(count($brands) > 0)
		$BrandsCat[$i]['Brands'] = $brands;
}
$smarty->assign('Brands',$BrandsCat);

$Rbrands = $Gen->GetSelWhere("tbl_brands","brand_id,brand_name","1=1 AND cid = '0' AND status = 'A' ORDER BY brand_name");
$smarty->assign('Rbrands',$Rbrands);

$smarty->display('site-inspection.tpl');
?>