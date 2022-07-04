<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'opal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o-dzti(z0RiJM-tdiZf>j:EF?Ifh1P>{0E5Jh)licV^f`6`T._>{M6syE!d7So^$' );
define( 'SECURE_AUTH_KEY',  '-+nuf&DYpkWkRJ<hlS_[V#3%whTZ8h1&d;rpFi_C5(,*.i[_@E)1P**D&?&96G7w' );
define( 'LOGGED_IN_KEY',    '*{P|Qu(Q/La*Qq_8[jbvsV0@??QY_4IIoG[f-{1>F{ u.cztp?W[Zy,PkZm<JF$_' );
define( 'NONCE_KEY',        'O1F>4H.sQeT8!hVLFi~X8D`Os?(H{F<VZsP;&0=/ydLb+DoDSI5n}))TK,/d9V).' );
define( 'AUTH_SALT',        'epX}T?rQlUl; zuQtA6]EUR7^^/@cVCwMt?X=e#rm!mTD,I!XSgA`.QEZ-`ZC3AB' );
define( 'SECURE_AUTH_SALT', 'k0?hH=kp])~wFM+Fx=WG:[7>ltwk}+N0^ft];a{9tjaYT::lo5>k |hdrPVv)`Zr' );
define( 'LOGGED_IN_SALT',   'v+!,&!8U_a<%*/9|vVB>s0&W/k5YU@tSU;3P&G_KXu6IG&}Qwyd.%|La|qFd-2*+' );
define( 'NONCE_SALT',       '#{Vo|`%C`X`N{?E,igclk{ XmGEN/>9(jVqm.O;]=I(t?l1c.1cba6-fn.Ioz8,Z' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
