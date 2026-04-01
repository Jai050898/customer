<?php
require_once("includes/application_start.php");
//require_once("includes/login_check.php");
$Page = 'resources';
$smarty->assign('breadcrumb','Portfolio');

/*******section to get portfolio categories***************/






//echo "<pre>";print_r($PDetails);exit;

//$smarty->display('portfolio-demo.tpl');
$smarty->display('index-18042014-ajb.tpl');



