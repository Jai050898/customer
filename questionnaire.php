<?php
require_once("includes/application_start.php");
require_once("includes/login_check.php");
$smarty->assign('breadcrumb','Survey- Questionnaire');
$page = 'surveys';
$smarty->assign('Page',$page);
$catid = $_REQUEST['cat'];
if(isset($_REQUEST['submit']) && $_REQUEST['submit'] == "Submit Survey")
{
	$PostFields = array();
	$PostFields['sid'] = $_REQUEST['cat'];
	$PostFields['uid'] = $_SESSION['User']['UID'];
	$ins		= $Gen->InsertQry('completed_survey',$PostFields);
	if($ins)
	{
		header("Location: survey-success.php?id=".$_REQUEST['cat']);
		exit;	
	}
}

$Table		= "tbl_questions";
$Fields		= "quest_id,cat_id,quest_type,question,question_desc,status,created_date";
$Where = "1=1  AND status = 'A' AND cat_id = '".$catid."'";

$total		= $Gen->TotalRows($Table,$Where);
$limit		= 500000;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;

$SortBy		= " showorder ASC";

$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Quest 	= $Gen->GetSelWhere($Table,$Fields,$Where);
//echo "<prE>";print_r($Quest);exit;
if($Quest)
{
	for($i=0;$i<count($Quest);$i++)
	{
		if($Quest[$i]['quest_type'] != "T" && $Quest[$i]['quest_type'] != "B")
		{
			$OptFields 	= "option_id,option_name";
			$OptWhere 		= "quest_id = '".$Quest[$i]['quest_id']."' AND lid = 0 ORDER By option_id";
			$Options	= $Gen->GetSelWhere("tbl_options",$OptFields,$OptWhere);
			if($Options)
				$Quest[$i]['Options'] = $Options;
			//Code to get Categories
			$Lab	= $Gen->GetSelWhere('tbl_lables','*'," quest_id  = '".$Quest[$i]['quest_id']."' ORDER BY name");
			//echo count($Lab);
			for($l=0;$l<count($Lab);$l++)
			{
				$OptLabFields 	= "option_id,option_name";
				$OptLabWhere 		= "quest_id = '".$Quest[$i]['quest_id']."' AND lid = '".$Lab[$l]['lable_id']."'  ORDER By option_id";
				$OptionLab	= $Gen->GetSelWhere("tbl_options",$OptLabFields,$OptLabWhere);
				if($OptionLab)
				{
					$optindex = $Lab[$l]['name'];
					$Quest[$i]['OptionsLab'][$optindex] = $OptionLab;
				}
			}
		}
		//Code to get answers
		if($Quest[$i]['quest_type'] == "T" || $Quest[$i]['quest_type'] == "B")
		{
			 $Ans = $Gen->GetSelWhere('tbl_answers','answer',"user_id = '".$_SESSION['User']['UID']."' AND quest_id = '".$Quest[$i]['quest_id']."'");
			 $Quest[$i]['Ans'] = $Ans[0]['answer'];
		}
		else
		{
			$Ans = $Gen->GetSelWhere('tbl_answers','option_id',"user_id = '".$_SESSION['User']['UID']."' AND quest_id = '".$Quest[$i]['quest_id']."'");
			if($Quest[$i]['quest_type'] == "R")
				$Quest[$i]['Ans'] = $Ans[0]['option_id'];
			else
				$Quest[$i]['Ans']  = @explode(",",$Ans[0]['option_id']);
		}
	}
}
//echo "<pre>";print_r($Quest);exit;
$srcpath 	= "cat=".$_REQUEST['cat']."&page=";
include('includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Quest',$Quest);

$smarty->assign('Lab',$Lab);
//Get Survey Info
$TableSurvey		= "tbl_categories";
$FieldsSurvey		= "cat_name,cat_description,showorder";
$WhereSurvey = "1=1  AND status = 'A' AND cat_id = '".$catid."'";
$Survey 	= $Gen->GetSelWhere($TableSurvey,$FieldsSurvey,$WhereSurvey);
$smarty->assign('Survey',$Survey[0]);
//Code to get next seuvey
//echo "SELECT MIN(showorder) as minorder,cat_id FROM tbl_categories WHERE showorder > '".$Survey[0]['showorder']."' AND status = 'A'";exit;
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
//Code to cehck weather survey is already completed or not
$resrows = $Gen->TotalRows("completed_survey"," sid = '".$_REQUEST['cat']."'");
$smarty->assign('resrows',$resrows);
    
$smarty->display('questionnaire.tpl');
?>
