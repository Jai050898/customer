<?php
/*********************************************************************
* Description: Registration Page of Buyers & Suppliers for the Site.
* Author: primaccess
* Date: 05/11/2007 (MM/DD/YYYY)
* Modified By: xxxxxxxxx
* Modified time:  xx/xx/xxxx
* Modified Reason : xxxxxx xxxxxxxx xxxxxxxx  
**********************************************************************/
require_once("../includes/application_start.php");
require_once("../includes/login_check_admin.php");
$smarty->assign('PageName','Home');
$usr 		= new General;
//echo getcwd();exit; 

$smarty->display('dashboard.tpl');
?>