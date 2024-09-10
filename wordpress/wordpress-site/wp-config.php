<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'I]!@mn3wx,OtvNfRE/K)`V0AFB88pC}w<$,+O_ynL(3L/s>:6M;WIc>VSl*ox~#%' );
define( 'SECURE_AUTH_KEY',  'Bg94Aq8;*T_^tAGkXZeFD4p=,<ZH-zLthTW]%MIkM4@cR 1hPrL})fnRuVbh5BS3' );
define( 'LOGGED_IN_KEY',    '_>.q%Kc~mz:o^96(RDU]Hto3wiT+q1L|d{bCKqMNwD.~6~._hk/gt?4e.Nc$$y/p' );
define( 'NONCE_KEY',        '1T|[V`zeIMkhV)#HmV)wS,u1tF5bAx03$[r ;$l7Ym:ykdZ/n3yH >HWgkog,k=A' );
define( 'AUTH_SALT',        'SCrNh0|ehFXvty&(~,q~eZ?$lP,4yAE&qqkHHqDJFzggNGG/qqiMSWcKd|*-~noC' );
define( 'SECURE_AUTH_SALT', 'r_j0*h;WsumM?Hn)+~hZXEglgY/IF PX%MJg`Pjz-lMoY&It{q:LG|jTb/1@M?zH' );
define( 'LOGGED_IN_SALT',   '&pR;rlE7XA5kak}HC@HG9K_(fQL4ylr2r<!$X>5&qe VYoI!w~rwd`Bpk H,<*L6' );
define( 'NONCE_SALT',       'Fk33E,BEtQ3qGln<#M0XRTVG/+&vg1HPJ2pD,]nVyziOz[$q#?{3[tf]$|54MWp*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
