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
/*define('DB_NAME', 'database_name_here');*/
define('DB_NAME', 'wordpress');
/** MySQL database username */
define('DB_USER', 'wpdb');

/** MySQL database password */
define('DB_PASSWORD', 'pkGIYtLIRHpODqbu');

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
define('AUTH_KEY',         '*u.aI!X7^Cwd u_>^nUKu)s[}|u@_Y2k,Um?ewAT$; z*,-ADpnyyW?i?!C<}LSt');
define('SECURE_AUTH_KEY',  'H:^j|WiRA@A2Lek877tUaH~X*QQ+P?8x|!Y;9i$uQQhqk%c!08L3(G<Jaj8lG_5&');
define('LOGGED_IN_KEY',    'U*W^&z>b0nu,]L%6lOxwbnu|TUj&9xBqx EF!^Ql$U2R== bt9Nny=:KkpQ~ez2m');
define('NONCE_KEY',        'GBin|].Flv}XIP -Nm-^u.M*B4foW(L ^zI$:RF;)e7]q{z}>t|KUjFM.G3w=lT|');
define('AUTH_SALT',        '~6Q#x=oiT7$#RQB(uAaD9LPW(q$4zL2$D:%u27~8i0SS4k[l~Y(A(]Eeq0WNHwQ%');
define('SECURE_AUTH_SALT', 'TH;@Q|z[m!z$2IOQNycy|O8Nbmt>jVXu?C<NWTku!`m:r}~iCh%:j`?@w,2/B{iC');
define('LOGGED_IN_SALT',   'Z?RR]p.h&M%r>(r&$r+25U_up;g_RP&n?ai[e GtY+1NsSl%BW~1$@(|-Aq^8n#H');
define('NONCE_SALT',       '! Jd,gwy!>#V8~;nb3uz!;SQKxz,*={%7p1x[DNGcsYUCY=|SUo.9t%E1i>_b<c^');

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
