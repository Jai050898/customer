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
	if(isset($_REQUEST['Log1']) && $_REQUEST['Log1'] != "")
	{
		$PostFields = array();
		$PostFields['quest_id'] = $_REQUEST['qid'];
		for($i=0;$i<count($_REQUEST['Log1']);$i++)
		{
			if($_REQUEST['Log1'][$i] != "")
			{
				$PostFields['option_name'] = $_REQUEST['Log1'][$i];
				$Optionins		= $Gen->InsertQry('tbl_options',$PostFields);
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
	header("Location:".SITEURL.'/admin/manage-questions.php');
}
//Code to get Categories
$Cat	= $Gen->GetSelWhere('tbl_lables','*'," quest_id  = '".$_REQUEST['qid']."' ORDER BY name");
$smarty->assign('Cat',$Cat);


$smarty->display('addoptions.tpl');
?>