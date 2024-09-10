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
define( 'DB_NAME', 'eluminous-wp' );

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
define( 'AUTH_KEY',         'lgGksN6Uj-EZ7M889}>sicgUN0{[sTV~{ok}WJ)ITZJO6^d&xw%L%K:%V{fM3IM[' );
define( 'SECURE_AUTH_KEY',  '8:t{Xa;xdW!zsih,?e4(!]xirQ +dcE?Pa(.~0jLE0o9p]m_8qKZ.E;,#eHLyN~t' );
define( 'LOGGED_IN_KEY',    '*(4=gP.&C>xLFwqnWe1U,VBcRQcVSvjxj>gt@Mp[ BTq1DN6AbH#;U`Ri<*-@$c<' );
define( 'NONCE_KEY',        'SOUv^X`/f>y*_L7J$@Gg[jy4}&h$DHSV;-Ac0PaCi;C#83r.(pK-k}!iJE96r(Rx' );
define( 'AUTH_SALT',        '3P989 U p i+CBL3b`T?cmQ+n1]|7pSs<dmmOJaFe-C;@9$U1yf9/+zJBAc~`!07' );
define( 'SECURE_AUTH_SALT', 'aI&5JVsKdF^R6e+gPf1D/3JDQ2(hw~YCVbO:*KkM{qFZfg6OJWB<e(vrSC{8JS*8' );
define( 'LOGGED_IN_SALT',   'v3fLofxGmy0t&h.nS u/*lB7efm]4V+rQyDlS<{61|z-G3U!H|tZ(XX vR@LoI#s' );
define( 'NONCE_SALT',       'gw%,.ZWKh|4(>rG7$7(y}UOs*{MQ (a}p35a-$-Sy&}J>gPho_|gi7q0:^3i@N7.' );

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
