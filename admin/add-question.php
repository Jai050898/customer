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
	$Fields 	= "quest_id,cat_id,quest_type,question,question_desc,status";
	$Where 		= "quest_id = ".$_REQUEST['quest_id'];
	$Quest	= $usr->GetSelWhere("tbl_questions",$Fields,$Where);
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
if(isset($_REQUEST['quest_id']) && $_REQUEST['quest_id'] != "" && $_REQUEST['hid_key']=='Post')
{
	//echo '<pre>';print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$UpOverview 				= $usr->UpdateQry("tbl_questions",$PrFields,"quest_id = ".$_REQUEST['quest_id']);
	
	/*if($UpOverview)
	{
		if(isset($_REQUEST['Log1']) && $_REQUEST['Log1'] != "")
		{
			$PostFields = array();
			$PostFields['quest_id'] = $_REQUEST['quest_id'];
			if($_REQUEST['Log1'][0] != "")
				$del = $Gen->DeleteQry('tbl_options',"quest_id = '".$_REQUEST['quest_id']."'");
			
			for($i=0;$i<count($_REQUEST['Log1']);$i++)
			{
				if($_REQUEST['Log1'][$i] != "")
				{
					$PostFields['option_name'] = $_REQUEST['Log1'][$i];
					$Optionins		= $usr->InsertQry('tbl_options',$PostFields);
				}
			}
		}
	} */
	//header("Location:".SITEURL.'/admin/manage-questions.php');
	if($_REQUEST['Log']['quest_type'] !="B" && $_REQUEST['Log']['quest_type'] !="T")
	{
		header("Location:".SITEURL.'/admin/editoptions.php?qid='.$_REQUEST['quest_id'].'&cat_id='.$_REQUEST['Log']['cat_id']);
		exit;
	}
	else
	{
		header("Location:".SITEURL.'/admin/manage-questions.php?cat_id='.$_REQUEST['Log']['cat_id']);
		exit;
	}
}
/*****section to insert the data*****/
if(isset($_REQUEST['hid_key']) && $_REQUEST['hid_key']=='Post')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$PrFields = $_REQUEST['Log'];
	$res = $usr->SelectQuery("SELECT max(showorder) as maxid FROM tbl_questions WHERE cat_id = '".$_REQUEST['Log']['cat_id']."'");
	if($res)
		$PrFields['showorder'] = $res[0]['maxid']+1;
	else
		$PrFields['showorder'] = "1";
	//echo "<pre>";print_r($PrFields);exit;
	$ins 						= $Gen->InsertQry('tbl_questions',$PrFields);
	if($ins)
	{
		if($_REQUEST['Log']['lable'] == "Y")
		{
			$PostFields = array();
			$PostFields['quest_id'] = $ins;
			for($i=0;$i<count($_REQUEST['Lable']);$i++)
			{
				if($_REQUEST['Lable'][$i] != "")
				{
					$PostFields['name'] = $_REQUEST['Lable'][$i];
					$Optionins		= $Gen->InsertQry('tbl_lables',$PostFields);
				}
			}
			header("Location:".SITEURL.'/admin/addoptions.php?qid='.$ins);
			exit;
		}
		else
		{
			if(isset($_REQUEST['Log1']) && $_REQUEST['Log1'] != "")
			{
				$PostFields = array();
				$PostFields['quest_id'] = $ins;
				for($i=0;$i<count($_REQUEST['Log1']);$i++)
				{
					if($_REQUEST['Log1'][$i] != "")
					{
						$PostFields['option_name'] = $_REQUEST['Log1'][$i];
						$Optionins		= $Gen->InsertQry('tbl_options',$PostFields);
					}
				}
			}
		}
	}
	header("Location:".SITEURL.'/admin/manage-questions.php?cat_id='.$_REQUEST['Log']['cat_id']);
}
//Code to get Categories
$Cat	= $Gen->GetSelWhere('tbl_categories','cat_id,cat_name'," status = 'A' ORDER BY cat_name");
$smarty->assign('Cat',$Cat);


$smarty->display('add-question.tpl');
?>