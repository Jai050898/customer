<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","MyAccount");
$usr 		= new General;
$smarty->assign('id',$_REQUEST['id']);
$smarty->display('sharecalform.tpl');
?>