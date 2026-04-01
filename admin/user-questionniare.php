<?php
require_once("../includes/application_start.php");

//$catid = $_REQUEST['cat'];

$Table		= "tbl_answers A LEFT JOIN tbl_questions B ON A.quest_id = B.quest_id";
$Fields		= "A.quest_id,A.option_id,A.answer,A.ans_type,B.quest_id,B.cat_id,B.quest_type,B.question,B.status,B.created_date";
$Where = "1=1 AND A.status = 'A' AND A.user_id = '".$_REQUEST['user_id']."'";
if(isset($_REQUEST['cat_id']) && $_REQUEST['cat_id'] != "")
{
	$Where		.= " AND A.cat_id = '".$_REQUEST['cat_id']."'";
}
$total		= $Gen->TotalRows($Table,$Where);
$limit		= 10;
$pageNum 	= 1; 					
if(isset($_REQUEST['page']) && $_REQUEST['page']!='')
   $pageNum = $_REQUEST['page'];
$offset 	= ($pageNum - 1) * $limit;

$SortBy		= " A.quest_id ASC";

$Where		.= " ORDER BY ".$SortBy." LIMIT ".$offset.",".$limit;

$Quest 	= $Gen->GetSelWhere($Table,$Fields,$Where);
if($Quest)
{
	for($i=0;$i<count($Quest);$i++)
	{
		if($Quest[$i]['quest_type'] != "T")
		{
			$OptFields 	= "option_id,option_name";
			$OptWhere 		= "quest_id = '".$Quest[$i]['quest_id']."' ORDER By option_id";
			$Options	= $Gen->GetSelWhere("tbl_options",$OptFields,$OptWhere);
			if($Options)
				$Quest[$i]['Options'] = $Options;
		}
		//Code to get answers
		if($Quest[$i]['quest_type'] == "T")
		{
			 $Quest[$i]['Ans'] = $Quest[$i]['answer'];
		}
		else
		{
			if($Quest[$i]['quest_type'] == "R")
				$Quest[$i]['Ans'] = $Quest[$i]['option_id'];
			else
				$Quest[$i]['Ans']  = @explode(",",$Quest[$i]['option_id']);
		}
	}
}
//echo "<pre>";print_r($Quest);exit;
$srcpath 	= "user_id=".$_REQUEST['user_id']."&cat_id=".$_REQUEST['cat_id']."&page=";
include('../includes/generate_pages.php');
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Quest',$Quest);
$smarty->assign('Page',$Page);
//Code to get Categories
$Cat	= $Gen->GetSelWhere('tbl_categories','cat_id,cat_name'," status = 'A' ORDER BY cat_name");
$smarty->assign('Cat',$Cat);
$smarty->display('user-questionnaire.tpl');
?>