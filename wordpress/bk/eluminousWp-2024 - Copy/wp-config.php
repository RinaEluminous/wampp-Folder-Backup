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
define( 'DB_NAME', 'eluminousWp-2024' );

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
define( 'AUTH_KEY',         'Qgcn?HvfGhAHknPu8:U,01o8] oMM=VR+K+DvVdwsp}+f=/]W8U;a@#F3~n9K5sW' );
define( 'SECURE_AUTH_KEY',  '0`qfJ8c:g+lnjXdoER@eUS&(f t_SU-][^<[bKb|F{-^G>htwUg29q8}Gp$~hg3i' );
define( 'LOGGED_IN_KEY',    'uHtQt;@wZ}NrKDGLA?ua#8`}QqIY8!+aS YUvqr~bS+rTK<0]R^GSqE>r;,%Wh))' );
define( 'NONCE_KEY',        'f|jfwO!<zt94g$-~O$e]%eEp]f|KhsgmXY1?nIe{G_WgFK}c[MT3=J7 w9~:^FGw' );
define( 'AUTH_SALT',        '.1HetB>YN7#G}-O3J.n<NEKMC$*H>skyk&{mz1@S8<Cm)X;glAqW.hENecp}[~#_' );
define( 'SECURE_AUTH_SALT', 'L*a4==.%Z_2FD/izhd6@0y:RPFAE:+1}T+l<?B7)`kQ$n!+3oCdG&p.FcEb%)u%t' );
define( 'LOGGED_IN_SALT',   'HEu%~fTf0{%yUrjp|_N!<g^,Uj.*RrGRycoc~.0M8V:4Njsl_ZU.e5!8.hifN,22' );
define( 'NONCE_SALT',       'a:,Oz:SYLdP{.O*K/m{&[jh}bbtBZEh2nvZ^82.mE<D%jg7%Xv!.b:c(X[~zNm%|' );

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
