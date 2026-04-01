<?php
require_once("../includes/application_start.php");
$smarty->assign('PageName','Home');
$usr 		= new General;
if(isset($_SESSION['Manager']['ID']) && $_SESSION['Manager']['ID'] != "")
{
	header("Location:".SITEURL."/manager/dashboard.php");
	exit;
}
/******* To Check the Posted Values to insert into Companies Table in DB ****/ 
if(isset($_REQUEST['Reg']) && $_REQUEST['Reg']!='')
{
		$LogArr = $_REQUEST['Reg'];
		$smarty->assign('LogArr',$LogArr);
		/********* To Check Account Availability in DB ******/
		$Fields	= "Company_ID,username,name,status,lastlogin_date";
		$UsrDet	= $Gen->GetSelWhere('tbl_company',$Fields,"username = '".addslashes($LogArr['user_name'])."' AND password = '".base64_encode(addslashes($LogArr['Password']))."'");
		//echo "<pre>";print_r($UsrDet);exit;
		if(count($UsrDet) > 0)
		{
			if($UsrDet[0]['Status'] == 'I')
			{
				$ErrorMsg = "Inactive Account!";
				$smarty->assign('ErrorMsg',$ErrorMsg);
			}
			else
			{
				/********* Assigning the DB Values to Sessions *******/
				$_SESSION['Manager']['ID']				= $UsrDet[0]['Company_ID'];
				$_SESSION['Manager']['User_Name']				= $UsrDet[0]['username'];
				$_SESSION['Manager']['Name']				= $UsrDet[0]['name'];
				$_SESSION['Manager']['Lastlogin_Date']	= $UsrDet[0]['lastlogin_date'];
				header("Location:".SITEURL."/manager/dashboard.php");
				exit;
			}
		}
		else
		{
			$ErrorMsg = 'Invalid Login Details!';
			$smarty->assign('ErrorMsg',$ErrorMsg);
		}	
}
$smarty->display('index.tpl');
?>