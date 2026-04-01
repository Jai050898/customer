<?php
ob_start();
session_start();
error_reporting(E_ALL^E_NOTICE);
ini_set("display_errors", "On");
//echo getcwd();exit;
/*********** Defining the Constants for the Whole Site **********/	
$root = $_SERVER['DOCUMENT_ROOT'];
if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME'] == '192.168.1.50')
{
	define('SITEPATH',$root."/napa/BDG"); // Local Site root directory
	define('SITEURL', 'http://'.$_SERVER['SERVER_NAME'].'/napa/BDG'); // For Local
}
else
{
	//define('SITEPATH',"/home/carrepai/public_html");
	define('SITEPATH',"/home/navigato/public_html/carrepairwebsite");
	define('SITEURL', 'http://'.$_SERVER['SERVER_NAME'].'/carrepairwebsite'); 
	define('SITEURL1', 'http://'.$_SERVER['SERVER_NAME'].'/carrepairwebsite'); 
	//define('SITEPATH',"/");
	//define('SITEURL', 'http://'.$_SERVER['SERVER_NAME'].'/'); 
}
//require_once("recaptchalib.php");
define('SITETITLE','Car Repair Website');
define('FROM','support@rsvp.com');
require(SITEPATH.'/libs/Smarty.class.php');
require_once(SITEPATH."/class/dbsettings.php");
require_once(SITEPATH."/class/db_class.php");
require_once(SITEPATH."/class/general_class.php");
$Gen = new General;
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->assign('sitetitle',SITETITLE);
$smarty->assign('siteurl',SITEURL);
$smarty->assign('siteurl1',SITEURL1);
$smarty->assign('sitetitle',SITETITLE);
?>