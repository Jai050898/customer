<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'resources';
$smarty->assign('breadcrumb','Portfolio');
$Table		= "tbl_portfolio";
$Fields		= "*";
$Where		= " status  = 'A'";
$PDetails	= $Gen->GetSelWhere($Table,$Fields,$Where);
//echo "<pre>";print_r($PDetails);exit;
$smarty->assign('PDetails',$PDetails);
$smarty->assign('Page',$Page);
$smarty->display('portfolio.tpl');