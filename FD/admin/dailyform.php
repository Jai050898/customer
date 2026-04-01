<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign('Page','Home');
$usr 		= new General;
$smarty->display('dailyform.tpl');
?>