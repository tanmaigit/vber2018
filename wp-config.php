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
define('DB_NAME', 'vber');

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
define('AUTH_KEY',         'DVd}fO?77PXac*rM0ZWnc+2OhBPWvGxPg501-?T2pgS8G4qfA8?Xknh!-{bq@v=6');
define('SECURE_AUTH_KEY',  'p#&;I-@UPNrXH<Vft98uXCS.yai[-i-;Dh|kYyq+z$j&vvqJzW^W)Rf,{&09}?5K');
define('LOGGED_IN_KEY',    'sON>sru&I=p(9a9S;KJQQ,&!x40a(VvaSs-tx(K|&R:$XfC1<dskC$!g3_F%|{Ny');
define('NONCE_KEY',        'M1#3;,u>dpiu+PX<G:2F1ikw lG;:gXmH5~{a$rG#m7!-X02~@-X^sQ&CC2V?1r~');
define('AUTH_SALT',        '/w]`~8:}pl](@3a}ri`=SNXY?e{rvrFr|_V.A05Mx3i@o;F<kSc[;D_]A@*l20LF');
define('SECURE_AUTH_SALT', 'HvL23l10>M 7%Vd#M$cRR@m}%|a>i<&E7 gIEzfXbUItr5s hxJ(Mo,AV4@@=J_d');
define('LOGGED_IN_SALT',   'g`J.=QT>`{s6E9I]D%a`jL0S[ gk+%bd$F;VR$ WcGD*^E1~8p!|tEf;ve>Ji-8Z');
define('NONCE_SALT',       '1u7P6j8<[8X`]oq!YKL#q|KE HmOB>IKV (@oPCQ:}uD(>%5+6jX5%;~eM?>Fh;&');

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
