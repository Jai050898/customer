<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('Page','Home');
$usr 		= new General;

$smarty->display('dashboard.tpl');
?>