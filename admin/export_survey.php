<?php
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
require_once("../class/export_excel_class.php");
//Code to get User Details
$UsernameArr = $Gen->GetSelWhere('tbl_users','user_name',"user_id = '".$_REQUEST['uid']."'");
$username = $UsernameArr[0]['user_name'];
//Code to Get Survey Details
$SurveyArr = $Gen->GetSelWhere('tbl_categories','cat_name',"cat_id = '".$_REQUEST['sid']."'");
$surveyname = str_replace(" ","",$SurveyArr[0]['cat_name']);

$fn=$username."-".$surveyname."-".time().".xls";
$excel_obj=new ExportExcel("$fn");	
//$usr 		= new General;

$catid = $_REQUEST['sid'];

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
if($Quest)
{
	$Ans = array();
	for($i=0;$i<count($Quest);$i++)
	{
		//Code to get answers
		if($Quest[$i]['quest_type'] == "T" || $Quest[$i]['quest_type'] == "B")
		{
			 $Answer = $Gen->GetSelWhere('tbl_answers','answer',"user_id = '".$_REQUEST['uid']."' AND quest_id = '".$Quest[$i]['quest_id']."'");
			 $Ans[$i] = $Answer[0]['answer'];
		}
		else
		{
			$Answer = $Gen->GetSelWhere('tbl_answers','option_id',"user_id = '".$_REQUEST['uid']."' AND quest_id = '".$Quest[$i]['quest_id']."'");
			if($Quest[$i]['quest_type'] == "R")
			{
				$ans = $Gen->GetSelWhere('tbl_options','option_name',"option_id = '".$Answer[0]['option_id']."'");
				$Ans[$i] = $ans[0]['option_name'];
			}
			else
			{
				$ans = $Gen->GetSelWhere('tbl_options','option_name',"option_id IN(".$Answer[0]['option_id'].")");
				$answer = array();
				for($ansloop=0;$ansloop<count($ans);$ansloop++)
				{
					$answer[] = $ans[$ansloop]['option_name'];
				}
				//echo "<prE>";print_r($answer);exit;
				$Ans[$i]  = @implode(",",$answer);
			}
		}
	}
}
//echo "<pre>";print_r($Ans);exit;
$Arr = array();
for($i=0;$i<count($Quest);$i++)
{
	$Arr['report_header'][$i] = stripslashes($Quest[$i]['question']);
}
$k =0;
for($j=0;$j<count($Ans);$j++)
{
	$Arr['report_values'][$k][$j] = stripslashes($Ans[$j]);
}
//echo "<pre>";print_r($Arr);exit;
$excel_obj->setHeadersAndValues($Arr['report_header'],$Arr['report_values']); 
$excel_obj->GenerateExcelFile();
exit();
?>