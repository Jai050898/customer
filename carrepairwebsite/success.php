<?php
require_once("includes/application_start.php");
//echo "<pre>";print_r($_SESSION);exit;
$word1 = str_replace(" ","+",$_SESSION['Items']['keyword']);
$word2 = str_replace(" ","+",$_SESSION['Items']['city']);
$word3 = str_replace(" ","+",$_SESSION['Items']['state']);
$dword = str_replace(" ","+",$_SESSION['Items']['bname']);
$dword1 = str_replace(" ","-",$_SESSION['Items']['bname']);
$sword = $word1."+".$word2."+".$word3;
if(strstr("http://",$_SESSION['Items']['domain']))
	$do = $_SESSION['Items']['domain'];
else
	$do = "http://".$_SESSION['Items']['domain'];
$parse = parse_url($do);
list($w,$path) = explode("www.",$parse['host']);
$smarty->assign("host",$path);
$smarty->assign("sword",$sword);
$smarty->assign("dword",stripslashes($dword));
$smarty->assign("dword1",stripslashes($dword1));
$smarty->assign("do",$do);
$smarty->assign("do1",urlencode($do));
$smarty->assign("zip",$_SESSION['Items']['zip_code']);
$smarty->display('success.tpl');
?>