<?php
//echo "<pre>";print_r($_REQUEST);exit;
require_once("includes/application_start.php");
$Page = 'Login';
if(isset($_SESSION['User']['UID']))
{
	header("Location:".SITEURL."/dashboard.php");
	exit(0);
}
if(isset($_REQUEST['hid_type']) && $_REQUEST['hid_type'] == 'Reg')
{
	//echo "<pre>";print_r($_REQUEST);exit;
	$UsrDet				= $Gen->GetSelWhere('tbl_users','user_id,email,user_name,password,Last_Login_Date,status,login_status,access_to_mark_survey,access_to_site_survey,access_to_integrated_survey,ismarketingsurveycompleted,iswebsurveycompleted,issurveycompleted,created_date,attempts'," user_name = '".$_REQUEST['Log']['user_name']."' AND password = '".base64_encode($_REQUEST['Log']['password'])."'");
	$cnt			= count($UsrDet);
	if($cnt != 0)
	{
		if($UsrDet[0]['login_status'] == 'A' && $UsrDet[0]['attempts'] < 5)
		{
			$_SESSION['User']['UID']				= $UsrDet[0]['user_id'];
			$_SESSION['User']['Email']				= $UsrDet[0]['email'];
			$_SESSION['User']['user_name']			= $UsrDet[0]['user_name'];
			$_SESSION['User']['Last_Login_Date']	= $UsrDet[0]['Last_Login_Date'];
			$_SESSION['User']['access_to_mark_survey'] = $UsrDet[0]['access_to_mark_survey'];
			$_SESSION['User']['access_to_site_survey'] = $UsrDet[0]['access_to_site_survey'];
			$_SESSION['User']['access_to_integrated_survey'] = $UsrDet[0]['access_to_integrated_survey'];
			$_SESSION['User']['ismarketingsurveycompleted'] = $UsrDet[0]['ismarketingsurveycompleted'];
			$_SESSION['User']['iswebsurveycompleted'] = $UsrDet[0]['iswebsurveycompleted'];
			$_SESSION['User']['issurveycompleted'] = $UsrDet[0]['issurveycompleted'];
			
			$date1 = $UsrDet[0]['created_date']; 
			$date2 = date("Y-m-d H:i:s"); 	
			$diff = abs(strtotime($date2) - strtotime($date1)); 
			$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
			//echo $months;exit;
			//Setting WP Cookie
			$WPUsrDet				= $Gen->GetSelWhere('wp_users','user_pass'," user_login = '".$UsrDet[0]['user_name']."'");
			//Setting Wiki Cookie
			$WIKIUsrDet				= $Gen->GetSelWhere('wikiuser','user_id,user_name,user_token'," user_name = '".ucfirst($UsrDet[0]['user_name'])."'");
			
			setcookie(SITENAME.'_wikiUserName',$WIKIUsrDet[0]['user_name']);
			setcookie(SITENAME.'_wikiUserID',$WIKIUsrDet[0]['user_id']);
			$_SESSION['wsUserID'] = $WIKIUsrDet[0]['user_id'];
			$_SESSION['wsUserName'] = $WIKIUsrDet[0]['user_name'];
			$_SESSION['wsToken'] = $WIKIUsrDet[0]['user_token'];
			
			header('Location:'.SITEURL.'/blog/wp-login.php?u='.$UsrDet[0]['user_name'].'&p='.base64_encode($WPUsrDet[0]['user_pass']));
			//header('Location:'.SITEURL.'/dashboard.php');
		}
		else if($UsrDet[0]['attempts'] >= 5)
			$Responce	= 'Account Locked, Pleas Try again After 10 hours.';
		else
		{
			$Responce	= 'Inactive Account';
			$d = date("Y-m-d H:i:s");
			$UpLogin		= mysql_query("UPDATE tbl_users SET attempts  = attempts+1, locked_date = '".$d."' WHERE user_name = '".$_REQUEST['Log']['user_name']."'");		
		}
	}
	else
	{
		$Responce	= 'Invalid login Details';
		$d = date("Y-m-d H:i:s");
		$UpLogin		= mysql_query("UPDATE tbl_users SET attempts  = attempts+1, locked_date = '".$d."' WHERE user_name = '".$_REQUEST['Log']['user_name']."'");		
	}
}
$smarty->assign('Responce',$Responce);
$smarty->assign('Page',$Page);
$smarty->display('login.tpl');
?>