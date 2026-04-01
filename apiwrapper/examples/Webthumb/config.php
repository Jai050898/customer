<?php
// require autoloaders for Bluga code and bundled PEAR2 code
require_once '/home/automark/public_html/customer/apiwrapper/Bluga/PEAR2/Autoload.php';
require_once '/home/automark/public_html/customer/apiwrapper/Bluga/Autoload.php';

// Your apikey goes here
$APIKEY = "1151b141d532a4bf8361a0f0e632e564";

// check for a config file in your home dir
$home = getenv('HOME');
if (file_exists("$home/.webthumb.php")) {
	include "$home/.webthumb.php";
}
