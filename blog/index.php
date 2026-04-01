<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
 require_once("../includes/application_start.php");
 if(!isset($_SESSION['User']['UID']) && !isset($_SESSION['Admin']['ID']))
{
	header("Location:".SITEURL."/loginrequire.php");
	exit(0);
}
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
