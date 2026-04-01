<?php
require_once("includes/application_start.php");
$Page	= 'Home';

$smarty->assign('Page',$Page);
$smarty->display('loginrequire.tpl');
?>