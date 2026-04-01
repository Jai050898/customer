<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'MyAccount';
$Table		= "shops";
$AccDet		= $Gen->GetSelWhere($Table,'*'," shop_id = ".$_SESSION['User']['UID']);
//echo "<pre>";print_r($AccDet);exit;
$smarty->assign('AccDet',$AccDet[0]);
$smarty->assign('Page',$Page);
$smarty->display('myaccount.tpl');
?>