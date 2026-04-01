<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
//$usr 		= new General;

$catid = $_REQUEST['survey_id'];

$Table		= "tbl_questions";
$Fields		= "quest_id,cat_id,quest_type,question,status,created_date";
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
			 $Ans = $Gen->GetSelWhere('tbl_answers','answer',"user_id = '".$_REQUEST['user_id']."' AND quest_id = '".$Quest[$i]['quest_id']."'");
			 $Quest[$i]['Ans'] = $Ans[0]['answer'];
		}
		else
		{
			$Ans = $Gen->GetSelWhere('tbl_answers','option_id',"user_id = '".$_REQUEST['user_id']."' AND quest_id = '".$Quest[$i]['quest_id']."'");
			if($Quest[$i]['quest_type'] == "R")
				$Quest[$i]['Ans'] = $Ans[0]['option_id'];
			else
				$Quest[$i]['Ans']  = @explode(",",$Ans[0]['option_id']);
		}
	}
}
$smarty->assign("sortioption",$sortioption);
$smarty->assign("sortimoption",$sortimoption);
$smarty->assign('Quest',$Quest);
$smarty->assign('Page',$Page);

$smarty->assign('Lab',$Lab);
//Survey Info
$TableS		= "tbl_categories";
$FieldsS		= "cat_name,created_date";
$WhereS = "1=1  AND status = 'A' AND cat_id = '".$catid."'";
$Survey 	= $Gen->GetSelWhere($TableS,$FieldsS,$WhereS);
$smarty->assign('Survey',$Survey[0]);
$smarty->display('view-survey.tpl');
?>