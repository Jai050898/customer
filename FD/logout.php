<?php 
require_once("includes/application_start.php");
if(isset($_SESSION['User']['UID']) && $_SESSION['User']['UID']!='')
{
	$UpEmpLogin		= mysql_query("UPDATE tbl_shop SET Last_Login_Date  = '".date('Y-m-d H:i:s')."' WHERE Shop_ID	  = ".$_SESSION['User']['UID']);
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