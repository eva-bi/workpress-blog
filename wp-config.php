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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'blog123456');

/** MySQL hostname */
define('DB_HOST', 'blog.crlvdpy5rgeq.us-east-1.rds.amazonaws.com');

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
define('AUTH_KEY',         'yCK.zKT @+r;YJkCLgg#NH#| ($Ny{o*QO~A{sR]sph*K2[-{OQqEO`!iw%ZZZ8=');
define('SECURE_AUTH_KEY',  'GZ4.@`Q$iKx41eC3%ZH=Nx){CO] ln,0TU1xPq]aiE6.ZebQHzWEWnhV>0{adND5');
define('LOGGED_IN_KEY',    '3PjQPaJ;NS/qoqt^I2A=U~|SRI$kh@@9CK1FKexg8Fw>QXyhOp1jsYccV((nm$H8');
define('NONCE_KEY',        ']X`<@A$h`w<(aD2/.f=y6;.C`)AEM%C&azUP!Qu/ETc*q%|%$LQgm<^mPJ6{vm|z');
define('AUTH_SALT',        '{+V}y^dTry7g1U8$e)PP]O,k5cE> ,3u{FJA nM,Km&:q[4yMLGGHf.[lMp<OsPp');
define('SECURE_AUTH_SALT', '1}7#W_z$IEh)EN~WPGD[f2(XCvqKS|mc|oq-MDw}GsDMGr_pb^5yN-kK/4BE^;z!');
define('LOGGED_IN_SALT',   '=j%wyu_Jp$vti_0ak^1U5YYG5f0:WCk4P^{pSc7O@+b{)U|2&f*/U*-20Dp;( cp');
define('NONCE_SALT',       'n#75s1%%dDD$*IjWM?*?WI{@JSS2]K2!IP!bJa0rK`osXfVYj#U0^9zPl .zQ]2x');

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

