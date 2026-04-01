<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$Page = 'Questionnaire';
$catid = $_REQUEST['id'];
//Get Survey Info
$TableSurvey		= "tbl_categories";
$FieldsSurvey		= "cat_name,cat_description,showorder";
$WhereSurvey = "1=1  AND status = 'A' AND cat_id = '".$catid."'";
$Survey 	= $Gen->GetSelWhere($TableSurvey,$FieldsSurvey,$WhereSurvey);

//Code to get next seuvey
$nsurvey = $Gen->SelectQuery("SELECT MIN(showorder) as minorder,cat_id FROM tbl_categories WHERE showorder > '".$Survey[0]['showorder']."' AND status = 'A'");
$nsurveyid = $nsurvey[0]['minorder'];
$ncat = $nsurvey[0]['cat_id'];
if($_SESSION['User']['sueveycnt'] >= $nsurveyid)
{
	$nextsurvey = $nsurveyid;
	$ncat = $ncat;
	$smarty->assign('ncat',$ncat);
}
else
	$nextsurvey = "0";

$smarty->assign('nextsurvey',$nextsurvey);

$smarty->display('survey-success.tpl');
?>