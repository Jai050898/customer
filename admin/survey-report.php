<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
$Where		= "1=1 ";
$Table		= "tbl_categories";
$Fields		= "cat_id,cat_name,cat_description,status,created_date";
$Where		.= " AND status = 'A'  ORDER BY cat_id";
$Cat 	= $usr->GetSelWhere($Table,$Fields,$Where);
for($i=0;$i<count($Cat);$i++)
{
	$rows = $usr->TotalRows("completed_survey","sid = '".$Cat[$i]['cat_id']."' AND uid = '".$_REQUEST['user_id']."'");
	if($rows > 0)
		$Cat[$i]['completed'] = "Y";
	else
		$Cat[$i]['completed'] = "N";
}
$smarty->assign('Cat',$Cat);
$smarty->display('survey-report.tpl');
?>