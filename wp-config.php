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
define('DB_NAME', 'wp_restaurant');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'd~qSivh@D0X[M=qRE@}{g|KxC4_^+ggi:Qr=u5yMps44,;m$C/1/8,qT=V(2K8@O');
define('SECURE_AUTH_KEY',  '5!E$}tE@e{4%M`zRi;B+(]Z<{^,`>Y&5QJsa>%kfVW:Dewp$0.T11%ruXRbs*=o{');
define('LOGGED_IN_KEY',    'jYl(xETKE%*d}vgWzx@d+6-RF0rV>^Zh&QBB!V6v;Iroe)$Kpj+vYEKj%ZkziRoi');
define('NONCE_KEY',        'DjO*O]C.4TV?ttz9HmcYq`^,>sAEN%l}A%Uy$tcXbTrALXkk0}e U:C_;X[bczue');
define('AUTH_SALT',        'e`i5`-n$HQwlkv,R#KE_WP*{4:EZ=i6E={FK+?!H}^>>=Osx,6QzkasY}f34&$pu');
define('SECURE_AUTH_SALT', 'C iUNZtr}O5`a~ad!q1xi7-Ep}Mslx:K_)UUJar-,)o2DF#M4;UY:7IT?{TXLHNV');
define('LOGGED_IN_SALT',   ' 9+V,A4w/c,o5k7j)Twsl,-{ENAhs>?9A)|:FR%LqA],:<h2q+8$thOEa0tHt+yx');
define('NONCE_SALT',       's?]#:!Tp8 fQhpPB}AuCbq{T<KR|joXsHn(MH/.#LZQE AbRHX3`p<qRN@iY~T[8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'aswp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
