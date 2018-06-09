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
define('DB_NAME', 'training');

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
define('AUTH_KEY',         '24_:Vjc5djF~H8&|bd<}. s>pk=$|Ys)K3$xTJlC({iU%!Z>TPrLEr,$mf3O%%GU');
define('SECURE_AUTH_KEY',  'fQnT`NBhK[CHM`?z`c*(DxPdLBzaU{bUA,pY*DhaN&fuUxzmo|cpm(U zq>xS&n9');
define('LOGGED_IN_KEY',    '{/HQRDM<N6QnZIu?S$qFZEd>Jb]e#7m_^2CX]z;CYZ)Qhw#h.5[W-+`K&X0O>u^8');
define('NONCE_KEY',        '7O+7pE}_>9~xZ U+N2)PZ5KZkxB6h~5x+%h+iIske9|_`2t$ILn>G0#Do>?)LSBD');
define('AUTH_SALT',        '(hLW5?Ox1g2d1lL:zOiO-Afr/*G2i3]Bw*k^M Mr_BBKocs[<md1:g2PS%>wdfd{');
define('SECURE_AUTH_SALT', 'mCUbz|2jFfBv*6r%.@/edWY^d87WT8=n:/[uWI;R,8OQtEiMY*e11&J<[%D<euVj');
define('LOGGED_IN_SALT',   '1IP9OFYNmNeaJOARh3DYy 3jn2iK-WKr.j9Wao&%,n9JB*um{@.1wErr96kVl<R,');
define('NONCE_SALT',       'K`t{SH0Q|5p_^h{dmHgoOQ^]yGVD{ZI;Z_|C1(J^U]$2bXty:>x?cacBN[m =|+Y');

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
