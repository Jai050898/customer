<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$smarty->assign('PageName','Home');
$usr 		= new General;
$CustInfo = $Gen->GetInfoBy("tbl_users","user_id",$_REQUEST['id']); 
$state = $Gen->GetAllWhere("tbl_states","Country_Code = '".$CustInfo['country']."' AND State_ID = '".$CustInfo['state']."'"); 
$CustInfo['state'] = $state[0]['State_Name'];
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
{
	$CD	= $Gen->GetSelWhere("tbl_confirmed_directories",array("id","name"),"status = 'A'");
	for($j=0;$j<count($CD);$j++)
	{
		$tot		= $Gen->TotalRows("tbl_cd_shop"," sid='".$_REQUEST['id']."' AND cdid = '".$CD[$j]['id']."'");
		if($tot > 0)
			$Customers[$CD[$j]['id']] = "Y";
		else
			$Customers[$CD[$j]['id']] = "N";
	}
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$del = $Gen->DeleteQry('tbl_cd_shop'," sid = '".$_REQUEST['id']."'");
	$PrFields = $_REQUEST['Log'];
	for($i=0;$i<count($PrFields);$i++)
	{
		$insarr['sid'] = $_REQUEST['id'];
		$insarr['cdid'] = $PrFields[$i];
		$ins 						= $Gen->InsertQry('tbl_cd_shop',$insarr);
	}
	header("Location:".SITEURL.'/seo/manage-users.php');
}

$CD_array	= $Gen->GetSelWhere("tbl_confirmed_directories",array("id","name"),"status = 'A'");
$smarty->assign("CD_array",$CD_array);
$smarty->assign("Customers",$Customers);
//echo "<pre>";print_r($Customers);exit;
$smarty->assign('CustInfo',$CustInfo);
$smarty->display('confirmed-directories.tpl');
?>