<?php 
require_once("../includes/application_start.php");
if(isset($_SESSION['Client']['CID']) && $_SESSION['Client']['CID']!='')
{
	$UpEmpLogin		= mysql_query("UPDATE tbl_clients SET Last_Login_Date  = '".date('Y-m-d H:i:s')."' WHERE client_id 	  = ".$_SESSION['Client']['CID']);
	unset($_SESSION['Client']['CID']);
	unset($_SESSION['Client']['Email']);
	unset($_SESSION['Client']['Last_Login_Date']);
}
header("Location:".SITEURL."/client/index.php");
exit;
?>