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
define('DB_NAME', 'PI');

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
define('AUTH_KEY',         'QC>z2Q?vQp` l6MY+AV]P/d1(53U0W%Yh`t.u4.qy;.s,-Ey.3SLvWP:jXKD~ZN2');
define('SECURE_AUTH_KEY',  '&imR8.S#x(0ZA0?@JkTspK%g,YYzWCQf;zyYs&4#(Eux.R:nl[jVM ~8Ydc72O??');
define('LOGGED_IN_KEY',    'KtxLXD_7WBD?m7Ie}FQS*uso7v?WM>~&j/:$<`q_@N{AEn C7{{4XiG4VEk3gTjR');
define('NONCE_KEY',        '&7w=qw,PG8xU m;!ZST-EQd+5ei+ZT@Z9RoX54V4URt``9IRln79xj[J^[3/1C(w');
define('AUTH_SALT',        '=KR`Bzlo9;K 5V5tgvx4y0z&GN7O?be<Z3QI&MLW.=aBd{;MDhM^mMl%W 0:wL>(');
define('SECURE_AUTH_SALT', 'JK%hAN3=sq6oqsO0I<|Sj<l6u@`U+HizU!_:Y!Ap_?Vcwuk&IeYvBYRZgg,B8Tk(');
define('LOGGED_IN_SALT',   '9UweiNe(mD=f)hjsIK=%dQy_YDS1hF8e:[4( lJdM4m,~R8XJiDzyl[Nn3Y1SrY>');
define('NONCE_SALT',       '3e%G<s,.m)9kr0q$|wqHuiC~I~JgQ*_24XCHjG-kUKl/>cFF>D^c(H.RJbm.y)}S');

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
