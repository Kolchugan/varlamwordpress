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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'IS{OB_-zOIM(;j:<3}HhE?Uih5RYX_!oVm?pt:VJED@JY;z<f!_(oVDu3 <PVK(9');
define('SECURE_AUTH_KEY',  '=xSWms4Ov,1^Uv,EaKxQL(3cO*b?ghQn-t%Zc*wA%`s$B[YYBvH+<1J2]Hh^{|u&');
define('LOGGED_IN_KEY',    'I:~W2cOs22aR8n@iB+6i]X(c6 5nf+Sk6oT)_E*<`6)O[^EGRw,[b`)0u9<f$WJd');
define('NONCE_KEY',        'S$r*l|7`?eA;[@(`O(o}9B s@SY@X7fzXxOo}]nj#D[xZ67(#$t_PTmk>z:7lt(6');
define('AUTH_SALT',        '*C,sxOH%Mpm?kUG$wB(l.[SRuKcEjPqvv]Q!a[q;My,]&tytM?AA4`=x{|pB=h|S');
define('SECURE_AUTH_SALT', '66ef]xb=n8K+?/xkDG8o)+Psi5#fdI21_bGPmlw;Fj{)*@i5~R0u?CySsRAwB2s!');
define('LOGGED_IN_SALT',   'LCy3KjY#,$835WcXJJhC{R>*O5FCnCs@%jSgUYko-K3`c,Zt!;d]H4&*h5]^@oc5');
define('NONCE_SALT',       '9>Jl*{~V?*uF*U[ATKP0S~;{IW6YkY]u!g3PrCno]48P`yy^vd%8q5,@VEf4(w (');

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
