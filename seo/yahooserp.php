<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$smarty->assign('Page','Home');
$usr 		= new General;
$CustInfo = $Gen->GetInfoBy("tbl_users","user_id",$_REQUEST['user_id']); 
$state = $Gen->GetAllWhere("tbl_states","Country_Code = '".$CustInfo['country']."' AND State_ID = '".$CustInfo['state']."'"); 
$CustInfo['state'] = $state[0]['State_Name'];
$Images = $Gen->GetSelWhere("tbl_thumbnails","date"," customer_id = '".$_REQUEST['user_id']."' AND type= 'Y' GROUP BY date ORDER BY date DESC");
for($i=0;$i<count($Images);$i++)
{
	$items = $Gen->GetSelWhere("tbl_thumbnails","image"," customer_id = '".$_REQUEST['user_id']."'  AND type= 'Y' AND date = '".$Images[$i]['date']."'");
	$Images[$i]['Items'] = $items;
}
//echo "<pre>";print_r($Images);exit;
$smarty->assign("Images",$Images);
$smarty->assign('Page',$Page);
$smarty->assign('CustInfo',$CustInfo);
$smarty->display('yahooserp.tpl');
?>