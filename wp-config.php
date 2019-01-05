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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'e670f5bc1261dcee550addad763c622f73f313144a10724c');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')=y!l2/YEEs-1MNjs!?n!E#AGO,/PmF+w-`bjQ7_{qH6o xS#26v;am~:A,*:4|E');
define('SECURE_AUTH_KEY',  'Me9J<aG6LS1#+^,h=5oGH)ZPgt%r1TO>QFAA(nTg/HWv(Q|rSdSYe5Xj9g|L1(Ni');
define('LOGGED_IN_KEY',    '<kb{k~e5P;[4Gzp]iCkOct{Dr-w~~aLjlOc9L<f(|;gLn{hqV|U8mD;oxU&f<s%/');
define('NONCE_KEY',        'ea!`%|Svbo=BUJ=znFheY/r(9&Ua5S/`,bxJ3D<G%;YSlGpELf[J~2FecXuU:Uc[');
define('AUTH_SALT',        'QQYCAQ%q+V%_]U>PLS]P #)Q+L#`?k|F>GHL]`tsWoA+v(D]k`D/+Z{ _x+xJMo?');
define('SECURE_AUTH_SALT', 'i;K3>BL?zu?I:.^L8AY4EV&sg~v;HZav:eHKP$o]xf*5;]2%yGJc8RKb}+^WTI(T');
define('LOGGED_IN_SALT',   ':,,n*40v^qT|b{K8qk4lZ;EaN{a/g:DXy.#:F<WD+$Q;j/I$__gZ}S.= Rwlcw|5');
define('NONCE_SALT',       'B>4H^SsGx2CYbO5`dv: iZ>]oo?C_t)wTKjm_YpuDswo{d{n)A)G_sLz.|a-+{1B');

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
define( 'WP_HOME', 'http://devdiary.tk' );
define( 'WP_SITEURL', 'http://devdiary.tk');
