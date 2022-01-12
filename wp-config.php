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
define( 'DB_NAME', 'fulltravel_20220110' );

/** MySQL database username */
define( 'DB_USER', 'Tatooine' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fu77t54v37$1630' );

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
define( 'AUTH_KEY',         '6eI*M2|0C0VX(6Eg$L_3Dhl/5]}SsfOo$8aX{tx,HtABUPc:A0rkM(#^9V9}tobU' );
define( 'SECURE_AUTH_KEY',  '0*LOHw0NB%bb4WkkE1qP00@[9q `wHA99^x3Dwz43iqoDUj#n2#`tZ3n.H[LN(+w' );
define( 'LOGGED_IN_KEY',    'DO=hU(UML_b03XvpK9Ez{T,sw;o0RWUHpgEmEZ|<f+56u_WZ{4m542ld[ =zHBxU' );
define( 'NONCE_KEY',        '{D^.sXguADv{e&GzD|}31q7Y0?u,/|Fn7z<0dSnDW:w?kPf6N6G; y;Ot4e?e~J(' );
define( 'AUTH_SALT',        'Ey=Ja@@DN@4i8-{_}_O9iPQ-@)y8{YMq#wFhCYJ7ym$76OfuJ89!gcgg;b-t;K=g' );
define( 'SECURE_AUTH_SALT', '~,!]e4!HDON;xJSs_cnUm?a|qqAY3SmSS66]Ay}F$g0yO;xh !^,OYbRBs^m9]L/' );
define( 'LOGGED_IN_SALT',   '/J<y-_ofhm2Eusff(+x4Xck+N.0|fB:sZV`$|d% ];d6)f@H%Pj|h]+~7),)K^7/' );
define( 'NONCE_SALT',       'R)|bVF?NXY d|,Ej?gN BHvdHk04G, d6;X WA@I?mrv@kGZ03Y{HRbL{RU/+d;r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpft_';

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
