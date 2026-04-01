<?php
// require autoloaders for Bluga code and bundled PEAR2 code
require_once '/home/automark/public_html/MM/customer/apiwrapper/Bluga/PEAR2/Autoload.php';
require_once '/home/automark/public_html/MM/customer/apiwrapper/Bluga/Autoload.php';

// Your apikey goes here
$APIKEY = "634dbf7405b532d9a10c16e7f9d60983";

// check for a config file in your home dir
//echo getcwd();exit;
$home = getenv('HOME');
if (file_exists("$home/.webthumb.php")) {
	include "$home/.webthumb.php";
}
