<?
ob_start();
session_start();
error_reporting(E_ALL^E_NOTICE);
ini_set("display_errors", "On");

/*********** Defining the Constants for the Whole Site **********/
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on')
    $http = "https://";
else
    $http = "http://";
$root = $_SERVER['DOCUMENT_ROOT'];
define('SITEPATH',"/home/automark/public_html/customer");
define('ROOTSITEPATH',"/home/automark/public_html");
define('SITEURL', $http.$_SERVER['SERVER_NAME'].'/customer');  
define('ROOTSITEURL', $http.$_SERVER['SERVER_NAME']);  
      
#***************************************************#

#database credentials
define('DB_NAME_PAGES','automark_pages');
define('USER_NAME_PAGES','automark_pages');
define('USER_PASS_PAGES','J(X)LXeETZA}');
define('HOST_NAME_PAGES','localhost');

#***************************************************#
require_once(ROOTSITEPATH."/classes/ConnectionAdmin.class.php");
$conn=new Connection();
#***************************************************#

#***************************************************#//require_once("recaptchalib.php");
define('SITENAME','programmer');
define('SITETITLE','.:Motorhead Marketing:.');
define('FROM','support@motorheadmarketing.com');
define('ADMINMAIL','programmer@motorheadmarketing.com');
//require_once(SITEPATH."/class/dbsettingsforonlinepay.php");
//require_once(SITEPATH."/class/db_class.php");
//require_once(SITEPATH."/class/general_class.php");
//$Gen = new General;
function stripSlash($str)
{
	return stripslashes($str);
}

function addSlash($str)
{
	if(ini_get('magic_quotes_gpc'))
		return $str;
	else
		return addslashes($str);	
		
}

function sanitizeData($str,$trim_space=false)
{
	$str=strip_tags($str);
	$str=addSlash($str);
	$str=rtrim(ltrim($str));
	if($trim_space)
	{
		$str=trim($str);
	}
	return $str;

}

function checkEmail($email)
{
	if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email))
		return false;
	else
		return true;	
}
?>
