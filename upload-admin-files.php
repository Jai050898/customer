<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign("Page","projects");
$smarty->assign('breadcrumb','Upload Projects Large Files');

$usr 		= new General;
$smarty->display('upload-admin-files.tpl');
?>