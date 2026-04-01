<?php
ob_start();
session_start();
error_reporting(E_ALL^E_NOTICE);
ini_set("display_errors", "On");
//echo getcwd();exit;
/*********** Defining the Constants for the Whole Site **********/	
$root = $_SERVER['DOCUMENT_ROOT'];
	define('SITEPATH',"/home/navigato/public_html/customer");
	define('SITEURL', 'http://'.$_SERVER['SERVER_NAME'].'/private'); 
?>
