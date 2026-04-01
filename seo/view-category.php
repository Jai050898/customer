<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_seo.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != "")
{
	$Fields 	= "cat_id,cat_name,cat_description,status";
	$Where 		= "cat_id = ".$_REQUEST['cat_id'];
	$Cat	= $usr->GetSelWhere("tbl_categories",$Fields,$Where);
	//echo '<pre>';print_r($product);exit;
	$smarty->assign('Cat',$Cat[0]);
}
$smarty->display('view-category.tpl');
?>