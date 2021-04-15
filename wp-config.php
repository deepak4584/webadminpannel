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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'g-`0p!wb5%F)p+e[Qu5(ycH&*wFvs( OTTWd>/3f1+L2{qo)@Uwb>LM+npj+[Gw@' );
define( 'SECURE_AUTH_KEY',  'z/zIK$;,D0>j<uQUj&r/1 &$45NB5kLP^wMs/ </ zmo%b==5/w0f,*w.2(t36&O' );
define( 'LOGGED_IN_KEY',    '+ggUzqBWk.F;XD;/ bexc^^r|.dk2b*Y:?7R&27,ZE_OnmTBf!<2@~vfR04Kt{Ja' );
define( 'NONCE_KEY',        '`Ly]+?*zSBn3T]gMn|7T!@jmr rFGYClJ?vLkK]4b+(R`Z<0M/&WmlC@C}R@e!x3' );
define( 'AUTH_SALT',        'cK^XzogT;Z^4D^A}y->R [P1WskNs6/?P*[fzL&YUw=?<.6S-uTVVn=^>hsFfo-6' );
define( 'SECURE_AUTH_SALT', '=f(ZBr|NOZxf4~EW~APw=NoX6XQ3J7<wUIDg<?b>5rXs;U;ND(Tj?6U|aH,3,VGC' );
define( 'LOGGED_IN_SALT',   '- CVt[(+:/tE45qu8,gJ~{)JoqG>;DC.$~RM5&h}O%VKB/D*px{ydXZQb(p~`CRb' );
define( 'NONCE_SALT',       '8eXRrqMc)U=Emq?}!g2Mf *P.qVF^`%;+8Hs.A@(;M|kkK#h MV&g$CK%)7N7QBW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
