<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","marketing");
$smarty->assign('breadcrumb','Show Marketing Calendar Item');
$usr 		= new General;
$smarty->display('show-cal.tpl');
?>