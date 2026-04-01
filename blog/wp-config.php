<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'automark_mm_cust');

/** MySQL database username */
define('DB_USER', 'automark_custusr');

/** MySQL database password */
define('DB_PASSWORD', 'm#184DCuL~6e');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M7T5>8wqPlk>s/wfRn=cBFsR#p;(y[QAS)z[~bKTdh1okMc02#sKQek43UH0f{br');
define('SECURE_AUTH_KEY',  '@b6;R!l$)Pom% x9_rU]>^[bHby@Ag9[=weD/@kINi#XCMCqn(wQ^j!P/9xnFY~M');
define('LOGGED_IN_KEY',    '=-n$o~zwMnw_IM`Tp]|4@!>:%bj|JiW>fN*MQA-$C>8?MDl>7xe?%GfyL5w*<7#<');
define('NONCE_KEY',        ' Z>@xPbo/?Giv37iN@>_R RP&nhEEv*]6s:(~nFNTZcJG]Bv$_+S.Rl+**$A/h)h');
define('AUTH_SALT',        'dx-z3a.n,s~YHv=Q)3i#|u]3K#@}.O`4$&t7$M^e=-FA~zJ6pG6w()ZOw_m&n8K.');
define('SECURE_AUTH_SALT', 'y IC>^8HXg3IqNrP01~Kae5@K8ZIUa}2FSk>xUn?>,M& YqoS3hd,Gv_W;o8tf|?');
define('LOGGED_IN_SALT',   'Z(t/ho92NiSarxI!I2U)]x~HSz$b|*~Fh/0`WIqR.E.MpRxG(5.;LbInRj<^d$;w');
define('NONCE_SALT',       'FZ-3X:*o%Bw{i8Vji/^:<6e/<7P>|HO5PsyF|%[G[<Qlo4Ke|T|:h0,K:JJIu-HW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
//echo ABSPATH;exit;
/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
