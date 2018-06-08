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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         '6PA$N.77M&6,Fxw=-K4xx*Y#SX{V%ofmf#__YWT>Yn_A*(9LkTGw;KBPs<P.:?u5');
define('SECURE_AUTH_KEY',  'v}B[3;i3;XGjHhZ?`n|,(7:9FK82e~h#W]s5zHz$D19DFV^Jv2WBqvN;Z,h+f!A.');
define('LOGGED_IN_KEY',    'w@4OY;oz*XgHZ~0^s`H[B@nn~!}q%Xd ^&53l<Io_H^}u5WgVf0?NqSqWAwMvcoW');
define('NONCE_KEY',        'z*]S&^{U!jypGzy_] E73+m.dS;.c;^Ka[#u1kh{?cx`~Ry^rO#ts2T?x.OtF70*');
define('AUTH_SALT',        'obLuu]VLF[@Ipr0;?1ca,[ 6e5./=Z--_4;4A_}wf=Vch7BoP3<~m-&z;;X(5~}r');
define('SECURE_AUTH_SALT', 'Xd06[}?7)z{vchiCMM+3[(X4qxxT86(#{=8VW#kqLr!vB8J5lY be0E 4$=;4:av');
define('LOGGED_IN_SALT',   '(Kitr:75Tn.{aRJ)X-R`b<=y_xi/He9,z=^__kb/z:G0^qg2XV&!yjF]#5jSTG7;');
define('NONCE_SALT',       'K8]u0bBHPY3A8Q!xtWTvx5+v`fP+GXUlc_)2lhuS/ioE9BXKu08}JpQw^OqNV-kX');

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
