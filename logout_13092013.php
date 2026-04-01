<?php 
require_once("includes/application_start.php");
if(isset($_SESSION['User']['UID']) && $_SESSION['User']['UID']!='')
{
	//code to Logout WP
	require('blog/wp-load.php' );
	wp_logout();
	
	//Code to Logout WIKI
	setcookie(SITENAME.'_wikiUserName','',time() - 3600);
	setcookie(SITENAME.'_wikiUserID','',time() - 3600);
	unset($_SESSION['wsUserID']);
	unset($_SESSION['wsUserName']);
	unset($_SESSION['wsToken']);
	
	$UpEmpLogin		= mysql_query("UPDATE tbl_users SET Last_Login_Date  = '".date('Y-m-d H:i:s')."' WHERE user_id 	  = ".$_SESSION['User']['UID']);
	unset($_SESSION['User']['UID']);
	unset($_SESSION['User']['Email']);
	unset($_SESSION['User']['user_name']);
	unset($_SESSION['User']['Last_Login_Date']);
}
if(isset($_REQUEST['cp']) && $_REQUEST['cp'] == 'Change')
	header("Location:".SITEURL."/pwd_chngd_successfully.php");
else
	header("Location:".SITEURL."/index.php");
exit;
?>