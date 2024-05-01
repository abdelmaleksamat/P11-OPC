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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '<A$PAcxAIy@PWtOp_cIf^,IoA:@}TwR_|3f$>2l8@Yg-we%o*_fkYSt;[u#lDbGt' );
define( 'SECURE_AUTH_KEY',   'x(vgrv;a 7O.3U[~W8vwwoPs8IpS:A@ZWnAtmNzF+2Dy+(gDOWM]y[xHD`?4U|<p' );
define( 'LOGGED_IN_KEY',     'fMI5;J^?a)d8SQUN+p4<qiX+HITG7P^1719p9;N`xSqEcVAP y5b6RR@@ a/ZLCy' );
define( 'NONCE_KEY',         'Lbtgag<N&<#fh81doBD>?7!MhKTJ|fHA1;<|}T*Ur6Qr]oV%,j@+:8t,.G@V/zHZ' );
define( 'AUTH_SALT',         'IcKaiKG8<zo`H>3iG,b(^Apz&KV0$-QdN<,b$Snecu8 o)6eE|d*^:&?v@~.QJ_s' );
define( 'SECURE_AUTH_SALT',  'LF7dsx0JMx!bZoHiI2##3pu#-YLr[rz?/P{:Bz2;4%ExY<Gho7Mt!Da#F$Fu{y7/' );
define( 'LOGGED_IN_SALT',    '93O5IxntX@sa]G`LVfP4A)zs1o4 n &x.&*$IaP8T%T$$jL3jh5*XqG.9~8qL(O}' );
define( 'NONCE_SALT',        'uT(d1bFg`In{].)X+i[4Y|ewVYbmrvE0#rCd`gReehUu{UP?u<5u/Av}=!<t-5tS' );
define( 'WP_CACHE_KEY_SALT', '|b<ih<-%s0%3!phZkSzrJq!K,kcD(~Gw >MTf;CR9jU:GpK!e,0h_r #$NKv,6E`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
