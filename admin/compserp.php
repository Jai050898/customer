<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign('Page','Home');
$usr 		= new General;

$CustInfo = $Gen->GetInfoBy("tbl_competitors","id",$_REQUEST['user_id']); 
//echo "<pre>";print_r($CustInfo);exit;

$Images = $Gen->GetSelWhere("tbl_thumbnails_comp","date"," customer_id = '".$_REQUEST['user_id']."' GROUP BY date ORDER BY date DESC");
for($i=0;$i<count($Images);$i++)
{
	$items = $Gen->GetSelWhere("tbl_thumbnails_comp","image"," customer_id = '".$_REQUEST['user_id']."' date = '".$Images[$i]['date']."'");
	$Images[$i]['Items'] = $items;
}
//echo "<pre>";print_r($Images);exit;
$smarty->assign("Images",$Images);
$smarty->assign('Page',$Page);
$smarty->assign('CustInfo',$CustInfo);
//echo "<pre>";print_r($CustInfo);exit;
$smarty->display('compserp.tpl');
?>