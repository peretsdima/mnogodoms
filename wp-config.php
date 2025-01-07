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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mnogodoms' );

/** Database username */
define( 'DB_USER', 'mnogodoms' );

/** Database password */
define( 'DB_PASSWORD', 'KnD2yxV86031' );

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
define( 'AUTH_KEY',         'Y &n6V%$*<;x5qH)6ZJ_/jSw~)SISW{>#cIktHkF2eFq<`d5q?l9nR[i</6:f@nb' );
define( 'SECURE_AUTH_KEY',  'XS^vB_g+kI=E<ni6O;g tTh/Vw[x2H4U)fHZ$Ap*I^ovtGBkl t-}!)yLj5`8`p@' );
define( 'LOGGED_IN_KEY',    'Vr`-m9dFZQL4-k+baV7eCwl]`#[ RMsVpdr2r8yDUr5;o:E#hMDSbu:{uAJAB>Y^' );
define( 'NONCE_KEY',        ']`O^1E2jx9Sx<Z;^>9h2~QZJ@HT3|<s)nl$?s*1nB7o8vs>V!l)U*,`Nc1dl{Hn-' );
define( 'AUTH_SALT',        ']+aj},53,93&Qfm~490d&eGg.9g$07+-|,(15TfRsw0pS8>a+ns-Q6h#`*hiK}D ' );
define( 'SECURE_AUTH_SALT', 'A-7x&9r N>?~2qyGT65~#|Q8UtsUm+)(rdfY:L RmT?21GI)Fsl*+AmAYv0$vk=!' );
define( 'LOGGED_IN_SALT',   'Z~/#F}V/P*!P/+EYu!1a|NYy gvpYZ& KH$z]}rTa{A@E%Qz`dx_5d70PrC;n6BI' );
define( 'NONCE_SALT',       'kwTP4VtZ~i>1a(+X!k&2,EUL8tJ0FQs9!B^[fF%G;~t0W6Z`<-VW:(cf;If^xp-;' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
