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
define( 'DB_NAME', 'constra' );

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
define( 'AUTH_KEY',         'b_M~nZlTL5LREg%Hp=OmP7$5-G6iJNbN`JC*:?L!UK?:.919/Dl=0X6izb]ST<(B' );
define( 'SECURE_AUTH_KEY',  'pA%h$jrmZ1H`m<K)m;fN+~R@-@O8i)Vij}F4#0o9NNX/+8xO74K(P/2%zk2ahq<6' );
define( 'LOGGED_IN_KEY',    'MHw>ZP[?(e`2$yWiK><gwojY8U?A{/gtps`}4k:[/a1d-cRXWKK|2VlOmZb;{1!M' );
define( 'NONCE_KEY',        'ux@29h[i=r{he#42i4d;%`|@jsb==hf3gFh{-&btiE!l2zGDeW9U;!%WD*]Vs T+' );
define( 'AUTH_SALT',        '#h_ScCK-CQQbJ4H sK;pv7UaF4vT}B|ll(Pj}<z7A&<~5VO%V~{)9u_h^X50jqkN' );
define( 'SECURE_AUTH_SALT', 'O1]6Mn@xUa;;xe3,]@$i`$)p}qC.|Y61`lD^ae~hF(ldlI0h1Tl_1{2#lT4tZ_^!' );
define( 'LOGGED_IN_SALT',   '}r3dm0Lw3%!D+wr[7EAj+6VV#Bl:uv-,j?l/nj[M}Me4YQ]2iKUa&cNR8^_W/1c0' );
define( 'NONCE_SALT',       'BIE_I^}j#zQWd= OfpM<CKbEcIhTjrEK6&S?E!hG@X!l:> E[q.f!.H/ZrZ:M:j:' );

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
