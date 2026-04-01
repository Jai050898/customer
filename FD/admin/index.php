<?php
/*********************************************************************
* Description: Registration Page of Buyers & Suppliers for the Site.
* Author: primaccess
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
$smarty->assign('PageName','Home');
//require_once("../class/user_class.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
//echo "<pre>";print_r($_SESSION);exit;
if(isset($_SESSION['Admin']['ID']) && $_SESSION['Admin']['ID'] != "")
{
	header("Location:".SITEURL."/admin/dashboard.php");
	exit;
}
//echo "<pre>";print_r($_REQUEST);exit;
/******* To Check the Posted Values to insert into Companies Table in DB ****/ 
if(isset($_REQUEST['Reg']) && $_REQUEST['Reg']!='')
{
	//echo $_REQUEST['randomcode']."-----".$_SESSION['image_value'];exit;
	//if($_REQUEST['randomcode'] == $_SESSION['image_value'])
	//{
		$LogArr = $_REQUEST['Reg'];
		$smarty->assign('LogArr',$LogArr);
		/********* To Check Account Availability in DB ******/
		$Fields	= "Admin_ID,user_name,First_Name,Status,Lastlogin_Date";
		$UsrDet	= $Gen->GetSelWhere('tbl_admins',$Fields,"user_name = '".addslashes($LogArr['user_name'])."' AND Password = '".base64_encode(addslashes($LogArr['Password']))."'");
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
				$_SESSION['Admin']['ID']				= $UsrDet[0]['Admin_ID'];
				$_SESSION['Admin']['User_Name']				= $UsrDet[0]['user_name'];
				$_SESSION['Admin']['Name']				= $UsrDet[0]['First_Name'];
				$_SESSION['Admin']['Lastlogin_Date']	= $UsrDet[0]['Lastlogin_Date'];
				header("Location:".SITEURL."/admin/dashboard.php");
				exit;
			}
		}
		else
		{
			$ErrorMsg = 'Invalid Login Details!';
			$smarty->assign('ErrorMsg',$ErrorMsg);
		}	
	/*}
	else
	{
		$ErrorMsg = 'Invalid Security Code!';
		$smarty->assign('ErrorMsg',$ErrorMsg);
	}*/
}
$smarty->display('index.tpl');
?>