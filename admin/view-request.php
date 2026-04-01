<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['id']) && $_REQUEST['id'] != "")
{
	$Table		= "tbl_requests";
	$Fields		= "*";
	$Where 		= "id = ".$_REQUEST['id'];
	$User	= $usr->GetSelWhere($Table,$Fields,$Where);
	
	$word1 = str_replace(" ","+",$User[0]['keyword']);
	$word2 = str_replace(" ","+",$User[0]['city']);
	$word3 = str_replace(" ","+",$User[0]['state']);
	$dword = str_replace(" ","+",$User[0]['bname']);
	$dword1 = str_replace(" ","-",$User[0]['bname']);
	$sword = $word1."+".$word2."+".$word3;
	if(strstr("http://",$User[0]['domain']))
		$do = $User[0]['domain'];
	else
		$do = "http://".$User[0]['domain'];
	$parse = parse_url($do);
	list($w,$path) = explode("www.",$parse['host']);
	$smarty->assign("host",$path);
	$smarty->assign("domain",$User[0]['domain']);
	$smarty->assign("city",$word2);
	$smarty->assign("state",$word3);
	$smarty->assign("sword",$sword);
	$smarty->assign("dword",stripslashes($dword));
	$smarty->assign("dword1",stripslashes($dword1));
	$smarty->assign("do",$do);
	$smarty->assign("do1",urlencode($do));
	$smarty->assign("zip",$User[0]['zip_code']);
	$smarty->assign('User',$User[0]);
}
$smarty->display('view-request.tpl');
?>