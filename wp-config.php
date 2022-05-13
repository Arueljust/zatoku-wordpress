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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zatoku' );

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
define( 'AUTH_KEY',         'j^<fbhee17MtWk6bfs4<liG;63<)Uj@k-z-GG7NZqX<xPpEA(L!z=MK!i(>U_}7X' );
define( 'SECURE_AUTH_KEY',  '}PNf(T|@w-*)JrPev/g52Ct7tnzxu:.X_&Qm7y/)#f/P)`DbCQ3=WJNoxK5,S%[%' );
define( 'LOGGED_IN_KEY',    '$f^Bm+r|h!/ea_.FV+u)6Z*_dJ?-b%0F`uf$bq._=ZllgMJ/rzu3P%UgI{IzfL%W' );
define( 'NONCE_KEY',        '*`DY!-6X*ny~R4}h2qxx[3O6fCtH&<zwN$.q$LdP!bR3XSilW,CL{zr-ih%Cw^3_' );
define( 'AUTH_SALT',        'O<v;s`c;7+0{VnQe|s_BWWaoxS|KZRZEnH S21k~d0:@A6/Ssx22-qb?ebtD+=kS' );
define( 'SECURE_AUTH_SALT', '-:rpNq80RxeJ7AXv6/aYXs+Z{=zS0hKosG,sc3>C}0q6%MkFW-VA3&%ee/!cS9PP' );
define( 'LOGGED_IN_SALT',   '#h|4*NR/EsrF$/L45/YYh<C)pq7}s%NGEgwtS5Q@}z35nazIPPQF<R.Uh+n3n(,@' );
define( 'NONCE_SALT',       '/MJ86Sn:Nc*!IXB&?i<bb_tb-SDS.hap&*3C)i;|xEW$@HBKY;zi ]+eiSMe)Q=.' );

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
