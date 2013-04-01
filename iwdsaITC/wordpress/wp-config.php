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
define('DB_NAME', 'itcdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '58[{R~; jIOJ.3]1U[;}J;j;BZ /`=Pd=1^[rr&egQxWUdYAI`K[~i&?>zN#^!Js');
define('SECURE_AUTH_KEY',  'E:xL?mrf-RGT7nd!8/436$v%A>5VOL7y49VNywMA)Y]b(>V}xAU3y5;L>P9_0#VL');
define('LOGGED_IN_KEY',    ',V8>Y*hxh.XVmD[h$T$IBw#iqsossRU!b/[j_#Xeve/dThzrIStOvLH81#z&srNV');
define('NONCE_KEY',        '!fY5n!9*QU#8$Y$vIrL.;gLxKcrr&GFk%/J<tU_fk7#pCWYvme*elm2u/8SwUR4I');
define('AUTH_SALT',        'DexD0K,V{wz+e>-:>^Ul]$3%|]{$<5TInQaQ+1!w3I&y%Foa$6EAhC:^-[t~g{=T');
define('SECURE_AUTH_SALT', 'oJO|+l:prEGY5t_V{3^%35zG{-rZt9A) Sv$DWL.gr5PL?o{!`D4*09${o[%WIEh');
define('LOGGED_IN_SALT',   '{|K):48TF^QMQ2CM<^<%~$7!ck3Ydv-@Td<~(CaWX8*$ ~.dL/~jelNY:<aF#zb{');
define('NONCE_SALT',       'Q9BJgj[|{/,WCHqt+whq~O1U~8gz}SINHK=?#XARO*4ISb4|zr}$|N+ws`2.L~8A');

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
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
