<?php
require_once("../includes/application_start.php");
/******** To Update the Last Login of User ********/
if(isset($_SESSION['SEO']['ID']) && $_SESSION['SEO']['ID']!='')
{
	$UpVcnt			= mysql_query("UPDATE tbl_admins SET Lastlogin_Date = '".date('Y-m-d H:i:s')."' WHERE Admin_ID = '".$_SESSION['Admin']['ID']."'");
	/********* To Clear the Session Values & Destory ***********/
	unset($_SESSION['SEO']['ID']);
	unset($_SESSION['SEO']['Name']);
	unset($_SESSION['SEO']['Lastlogin_Date']);
	session_destroy();
	if(isset($_REQUEST['cp']) && $_REQUEST['cp'] == 'Change')
		header("Location:".SITEURL."/seo/pwd_chngd_successfully.php");
	else
		header("Location:".SITEURL."/seo/index.php");
	exit(0);
}
?>