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
define('DB_NAME', 'Blog');

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
define('AUTH_KEY',         '4z3ft!i_7!b@0j|7Y;:B>L`N-2WIK7;7N4END_Y_kC-2GaWy$!o3DW%0o#sesugH');
define('SECURE_AUTH_KEY',  '[IUf#FFNqP~T&}8Nwjf;oJ@3?cEt?YJS[kCuq}Dtnj}8@bm*tUAz=Q$ehX82!)i|');
define('LOGGED_IN_KEY',    'm_bK{#{:v8]Z~^5^g5X(n7}.&)=f5=P$?:e[_/s{kDE$?|5<5OiY{_zho-Fd^K-7');
define('NONCE_KEY',        'yllB3v}V;*<EU;&QXi`Q>*y}/XEWZY9!eyV:$J=,X?BvFqu:pWSxy9)l1sZOtm2T');
define('AUTH_SALT',        '7g5q1xB{7@Z/ZMB%.]gHVO*K_G}7e;X{St`vp#g:rOk2z[yIXbPX#Gxm[>z*Fagg');
define('SECURE_AUTH_SALT', '5rhd%mLm[uz9yb] ih.h~K2fr1KeV r{o6q([|~P9qVG{Ie&=Jj(-:+wra35BH=$');
define('LOGGED_IN_SALT',   'h}X)@AM*;l`mYfMKeI;pL<I8ZdK+T71<lU@6R7 f80QDMP:N@:S@9c|$lrQ33_?k');
define('NONCE_SALT',       'Ee|t=.^WT!isfbuv59_o-v}qMo<j`!Gy<7:KgAw;}/jt#C6$S|}pqx)m-!ndkM@U');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
