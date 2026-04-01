<?php 
require_once("includes/application_start.php");
if(isset($_SESSION['User']['UID']) && $_SESSION['User']['UID']!='')
{
	$UpEmpLogin		= mysql_query("UPDATE shops SET Last_Login_Date  = '".date('Y-m-d H:i:s')."' WHERE shop_id 	  = ".$_SESSION['User']['UID']);
	
	unset($_SESSION['User']['UID']);
	unset($_SESSION['User']['Email']);
	unset($_SESSION['User']['Last_Login_Date']);
	header("Location:".SITEURL."/index.php");
	exit;
}
/*if(isset($_SESSION['Admin']['Admin_ID']) && $_SESSION['Admin']['Admin_ID']!='')
{
	$UpEmpLogin		= mysql_query("UPDATE tbl_admin SET Last_Login_Date  = '".date('Y-m-d H:i:s')."' WHERE Admin_ID  = ".$_SESSION['Admin']['Admin_ID']);
	unset($_SESSION['Admin']['Admin_ID']);
	unset($_SESSION['Admin']['First_Name']);
	unset($_SESSION['Admin']['Last_Name']);
	unset($_SESSION['Admin']['Last_Login_Date']);
	unset($_SESSION['Admin']['Email']);
	header("Location:".SITEURL."/admin/index.php");
	exit;
}*/
?>