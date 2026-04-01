<?php
/*********************************************************************
* Description: Logout Page of the User for the Site.
* Author: primaccess
* Date: 03/25/2010 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx
**********************************************************************/
require_once("../includes/application_start.php");
/******** To Update the Last Login of User ********/
if(isset($_SESSION['Admin']['ID']) && $_SESSION['Admin']['ID']!='')
{
	//code to Logout WP
	require('../blog/wp-load.php');
	wp_logout();
	
	//Code to Logout WIKI
	setcookie(SITENAME.'_wikiUserName','',time() - 3600);
	setcookie(SITENAME.'_wikiUserID','',time() - 3600);
	unset($_SESSION['wsUserID']);
	unset($_SESSION['wsUserName']);
	unset($_SESSION['wsToken']);

	$UpVcnt			= mysql_query("UPDATE tbl_admins SET Lastlogin_Date = '".date('Y-m-d H:i:s')."' WHERE Admin_ID = '".$_SESSION['Admin']['ID']."'");
	/********* To Clear the Session Values & Destory ***********/
	unset($_SESSION['Admin']['ID']);
	unset($_SESSION['Admin']['Name']);
	unset($_SESSION['Admin']['Lastlogin_Date']);
	session_destroy();
	if(isset($_REQUEST['cp']) && $_REQUEST['cp'] == 'Change')
		header("Location:".SITEURL."/admin/pwd_chngd_successfully.php");
	else
		header("Location:".SITEURL."/admin/index.php");
	exit(0);
}else{
/********* To Clear the Session Values & Destory ***********/
	unset($_SESSION['Admin']['ID']);
	unset($_SESSION['Admin']['Name']);
	unset($_SESSION['Admin']['Lastlogin_Date']);
	session_destroy();
	if(isset($_REQUEST['cp']) && $_REQUEST['cp'] == 'Change')
		header("Location:".SITEURL."/admin/pwd_chngd_successfully.php");
	else
		header("Location:".SITEURL."/admin/index.php");
	exit(0);
}
?>
