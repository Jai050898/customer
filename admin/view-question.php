<?php
/*********************************************************************
* Description: Change Password Page for the User who logged in.
* Author: Venu Gopal	
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$usr 		= new General;
/*****section to get the details from data base*********************/
if(isset($_REQUEST['quest_id']) && $_REQUEST['quest_id'] != "")
{
	$Table		= "tbl_questions A LEFT JOIN tbl_categories B ON A.cat_id = B.cat_id";
	$Fields 	= "A.quest_id,A.cat_id,A.quest_type,A.question,A.status,B.cat_name";
	$Where 		= "A.quest_id = ".$_REQUEST['quest_id'];
	$Quest	= $usr->GetSelWhere($Table,$Fields,$Where);
	//Code to get Options
	if($Quest[0]['quest_type'] != "T")
	{
		$OptFields 	= "option_id,option_name";
		$OptWhere 		= "quest_id = '".$Quest[0]['quest_id']."' ORDER By option_id";
		$Options	= $usr->GetSelWhere("tbl_options",$OptFields,$OptWhere);
		if($Options)
			$Quest[0]['Options'] = $Options;
	}
	//echo "<pre>";print_r($Quest[0]);exit;
	$smarty->assign('Quest',$Quest[0]);
}
$smarty->display('view-question.tpl');
?>