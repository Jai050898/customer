<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign('Page','website');
$usr 		= new General;
$CustInfo = $Gen->GetInfoBy("tbl_users","user_id",$_REQUEST['user_id']); 
$state = $Gen->GetAllWhere("tbl_states","Country_Code = '".$CustInfo['country']."' AND State_ID = '".$CustInfo['state']."'"); 
$CustInfo['state'] = $state[0]['State_Name'];
/*****section to get the details from data base*********************/
	$Table		= "tbl_users A LEFT JOIN tbl_states C ON A.country = C.Country_Code AND A.state = C.State_ID";
	$Fields		= "A.*,C.State_Name";
	$Where 		= "user_id = ".$_REQUEST['user_id'];
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	//echo "<pre>";print_r($User);exit;
	$word1 = "auto+repair";
	$word2 = str_replace(" ","+",$User[0]['city']);
	$word3 = str_replace(" ","+",$User[0]['State_Name']);
	$dword = str_replace(" ","+",$User[0]['company_name']);
	$dword1 = str_replace(" ","-",$User[0]['company_name']);
	$sword = $word1."+".$word2."+".$word3;
	if(strstr("http://",$User[0]['website']))
		$do = $User[0]['website'];
	else
		$do = "http://".$User[0]['website'];
	$parse = parse_url($do);
	list($w,$path) = explode("www.",$parse['host']);
	$smarty->assign("host",$path);
	$smarty->assign("domain",$User[0]['website']);
	$smarty->assign("city",$word2);
	$smarty->assign("state",$word3);
	$smarty->assign("sword",$sword);
	$smarty->assign("dword",stripslashes($dword));
	$smarty->assign("dword1",stripslashes($dword1));
	$smarty->assign("do",$do);
	$smarty->assign("do1",urlencode($do));
	$smarty->assign("zip",$User[0]['zip_code']);
$smarty->assign('CustInfo',$CustInfo);
$smarty->display('online-tests.tpl');
?>