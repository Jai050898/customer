<?php

require_once("../includes/application_start.php");
$smarty->assign('PageName','Home');
//require_once("../class/user_class.php");
$usr 		= new General;
//echo "<pre>";print_r($_REQUEST);exit;
//echo "<pre>";print_r($_SESSION);exit;

if(isset($_SESSION['SEO']['ID']) && $_SESSION['SEO']['ID'] != "")
{
	header("Location:".SITEURL."/seo/dashboard.php");
	exit;
}
//echo "heeei";exit;
//echo "<pre>";print_r($_REQUEST);exit;
/******* To Check the Posted Values to insert into Companies Table in DB ****/ 
if(isset($_REQUEST['Reg']) && $_REQUEST['Reg']!='')
{
	//if($_REQUEST['randomcode'] == $_SESSION['image_value'])
	//{
		$LogArr = $_REQUEST['Reg'];
		$smarty->assign('LogArr',$LogArr);
		/********* To Check Account Availability in DB ******/
		$Fields	= "user_id,user_name,first_name,status,Last_Login_Date";
		$UsrDet	= $Gen->GetSelWhere('tbl_seo_users',$Fields,"user_name = '".addslashes($LogArr['user_name'])."' AND password = '".base64_encode(addslashes($LogArr['Password']))."'");
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
				$_SESSION['SEO']['ID']				= $UsrDet[0]['user_id'];
				$_SESSION['SEO']['User_Name']				= $UsrDet[0]['user_name'];
				$_SESSION['SEO']['Name']				= $UsrDet[0]['first_name'];
				$_SESSION['SEO']['Lastlogin_Date']	= $UsrDet[0]['Lastlogin_Date'];
				
				header("Location:".SITEURL."/seo/dashboard.php");
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