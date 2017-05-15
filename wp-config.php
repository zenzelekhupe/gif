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



define('DB_NAME', 'gif');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'toor123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c{za=JUkoxz@)0:,Qme}H}:q@0rAibAgO7$on%wXWxz_uMK%IZwz;9>Iao}a#Lp6');
define('SECURE_AUTH_KEY',  '`laL3c;+}<qf_K(cyB?iem-NFpP4-T)4IG4%~W]G`?9:0&{WdT/QjXGwiMcpz?>V');
define('LOGGED_IN_KEY',    'j+U)eX46Sh(0WdWN5E%`[OX2?~aO&)<dP<(o*&W&NH5P> nqt^{.Q[?6o-zfKZhf');
define('NONCE_KEY',        'Sx6&`boOLn!h~Sru}JOfE)@ovq]ZSD]x$s6vj-~h0HZRdy;/2FFU@?1Y9Xsi.+Y9');
define('AUTH_SALT',        'DxSwQ@-Q^m.&KFt`?K>gZfCHeOix&iyD]4jLZ,~u2tSxy5>b8~gcC50=mbM<=,=3');
define('SECURE_AUTH_SALT', 'a$vNX%@FM@8cwX,OrngJ5!V7fD|.$e/Ji+7fb,o %{*uDy24DSj}X o65o{j8&z.');
define('LOGGED_IN_SALT',   '4&}R%<hx3PEet$DISYI,z+.?WTKSZ^tP6QSQP{g`N^X_kYdBjH&f`>+ACh(^?*,N');
define('NONCE_SALT',       'MjHw/%>{n{nk1qBLBD8&OqKiJJ#E@RS|1939PnW7,{4-)%FlYjy6fjP9H)OWCtQW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';
//ini_set('display_errors', 0);
//error_reporting(0);
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
ini_set('display_errors', 0);
error_reporting(0);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
