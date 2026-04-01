<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
$Where		= "1=1 ";
$Table		= "tbl_categories";
$Fields		= "cat_id,cat_name,cat_description,status,created_date";
$Where		.= " ORDER BY showorder";
$Cat 	= $usr->GetSelWhere($Table,$Fields,$Where);
$smarty->assign('Cat',$Cat);
$smarty->display('manage-survey-questions.tpl');
?>