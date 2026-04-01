<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign('Page','Home');
$usr 		= new General;
$y=date('Y');
$m=date('m');
$Result['disDate']=date('Y',mktime(0,0,0,$m,1,$y));
$smarty->assign('m',$m);
$smarty->assign('disDate',$Result['disDate']);
$smarty->display('add-monthly-sales.tpl');
?>