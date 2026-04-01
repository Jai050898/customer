<?php
require_once("../includes/application_start.php");
/******** To Update the Last Login of User ********/
if(isset($_SESSION['WRITER']['ID']) && $_SESSION['WRITER']['ID']!='')
{
	$UpVcnt			= mysql_query("UPDATE tbl_writer_users SET Lastlogin_Date = '".date('Y-m-d H:i:s')."' WHERE user_id = '".$_SESSION['WRITER']['ID']."'");
	/********* To Clear the Session Values & Destory ***********/
	unset($_SESSION['WRITER']['ID']);
	unset($_SESSION['WRITER']['Name']);
	unset($_SESSION['WRITER']['Lastlogin_Date']);
	session_destroy();
	if(isset($_REQUEST['cp']) && $_REQUEST['cp'] == 'Change')
		header("Location:".SITEURL."/writer/pwd_chngd_successfully.php");
	else
		header("Location:".SITEURL."/writer/index.php");
	exit(0);
}
?>