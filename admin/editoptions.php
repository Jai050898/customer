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
//echo "<pre>";print_r($_REQUEST);exit;
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	if(isset($_REQUEST['Log_new']) && $_REQUEST['Log_new'] != "")
	{
		$PostFields = array();
		$PostFields['quest_id'] = $_REQUEST['qid'];
		for($i=0;$i<count($_REQUEST['Log_new']);$i++)
		{
			if($_REQUEST['Log_new'][$i] != "")
			{
				$PostFields['option_name'] = $_REQUEST['Log_new'][$i];
				$Optionins		= $Gen->InsertQry('tbl_options',$PostFields);
			}
		}
	}
	if(isset($_REQUEST['Log1']) && $_REQUEST['Log1'] != "")
	{
		foreach($_REQUEST['Log1'] as $k=>$v)
		{
			$PostFields['option_name'] = $v;
			$UpOverview = $Gen->UpdateQry("tbl_options",$PostFields,"option_id = '".$k."'");
			if($v == "")
			{
				$del = $Gen->DeleteQry('tbl_options',"option_id = '".$k."'");
			}
		}
	}
	if(isset($_REQUEST['Log']) && $_REQUEST['Log'] != "")
	{
		$result = $_REQUEST['Log'];
		foreach($result as $key => $value)
		{
			$PostFields = array();
			$PostFields['quest_id'] = $_REQUEST['qid'];
			$PostFields['lid'] = $key;
			for($i=0;$i<count($value);$i++)
			{
				if($value[$i] != "")
				{
					$PostFields['option_name'] = $value[$i];
					$Optionins		= $Gen->InsertQry('tbl_options',$PostFields);
				}
			}
		}
	}
	header("Location:".SITEURL.'/admin/manage-questions.php?cat_id='.$_REQUEST['cat_id']);
	exit;
}
$OptFields 	= "option_id,option_name";
$OptWhere 		= "lid = 0 AND quest_id = '".$_REQUEST['qid']."' ORDER By option_id";
$Options	= $usr->GetSelWhere("tbl_options",$OptFields,$OptWhere);
if($Options)
	$Quest['Options'] = $Options;
	
//Code to get Categories
$Lab	= $Gen->GetSelWhere('tbl_lables','*'," quest_id  = '".$_REQUEST['qid']."' ORDER BY name");
for($l=0;$l<count($Lab);$l++)
{
	$OptLabFields 	= "option_id,option_name";
	$OptLabWhere 		= "quest_id = '".$_REQUEST['qid']."' AND lid = '".$Lab[$l]['lable_id']."'  ORDER By option_id";
	$OptionLab	= $Gen->GetSelWhere("tbl_options",$OptLabFields,$OptLabWhere);
	if($OptionLab)
	{
		$optindex = $Lab[$l]['name'];
		$optindex1 = $Lab[$l]['lable_id'];
		$Quest['OptionsLab'][$optindex][$optindex1] = $OptionLab;
	}
}
$smarty->assign('Cat',$Cat);
$smarty->assign('Quest',$Quest);
//echo "<pre>";print_r($Quest['OptionsLab']);exit;
$smarty->display('editoptions.tpl');
?>