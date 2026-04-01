<?php
require_once("../includes/application_start.php");
/******** To Update the Last Login of User ********/
if(isset($_SESSION['Manager']['ID']) && $_SESSION['Manager']['ID']!='')
{
	$UpVcnt			= mysql_query("UPDATE tbl_company SET lastlogin_date = '".date('Y-m-d H:i:s')."' WHERE Company_ID = '".$_SESSION['Manager']['ID']."'");
	/********* To Clear the Session Values & Destory ***********/
	unset($_SESSION['Manager']['ID']);
	unset($_SESSION['Manager']['Name']);
	unset($_SESSION['Manager']['Lastlogin_Date']);
	session_destroy();
	if(isset($_REQUEST['cp']) && $_REQUEST['cp'] == 'Change')
		header("Location:".SITEURL."/manager/pwd_chngd_successfully.php");
	else
		header("Location:".SITEURL."/manager/index.php");
	exit(0);
}
?>