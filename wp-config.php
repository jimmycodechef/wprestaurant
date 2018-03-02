<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wprestaurant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '^1_,J@74,w^D7(P%}J6&)?@*j+mq+~+v(OE:o}6f6?C|Q~go>TJk5x(LcvdnkDIq');
define('SECURE_AUTH_KEY',  'em42a(^pw>PG&jpnB58V=IknWrH9Gt2c|_ewKZ Z4%+Xyg#)x.9=U7a)*~kd -@R');
define('LOGGED_IN_KEY',    '`9SzYI`Q# ?%%-GXNuvM}yTqa!z/[y)o_=]RStNX<s h+#id%h pzr3pdZ@?C{+%');
define('NONCE_KEY',        '!O2--9BsfxK qJ#Kjr=Z7;TbP,cZOGS,%@^Jlo@)6T]*,Wqe[>0Jj,OiSyw4pUS*');
define('AUTH_SALT',        'G%PGkAv,~HT-n<XV+-b(h>b(]{ N]@YB_BJ|%*./PjWHE](%J9o*:s5u/bM>U}g~');
define('SECURE_AUTH_SALT', '._KG&dUT-<VZS<<Ep8y*]-.j0L9>P)6:A0I qqF[23,xl`On{!wlk4A+F_bF8K`h');
define('LOGGED_IN_SALT',   '4y]|RScqY8T9GJM4;1.jmT&d&]jT>m8+G+Ywz`yww5Xa#z~1(]/6Czd<QS%|33~E');
define('NONCE_SALT',       '<jqDSwX!|iK9i!F Rn*6 %qje1=FyHl ?~g}n?zBm?tJBt!F)Czqc9u9c!;;a:u.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);  //Set to True for Debugging - Ashman Malhotra

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
