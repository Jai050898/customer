<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_manager.php");
$smarty->assign('PageName','Home');
$usr 		= new General;
//echo getcwd();exit; 

$smarty->display('dashboard.tpl');
?>