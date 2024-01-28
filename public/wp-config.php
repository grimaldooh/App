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
define( 'AUTH_KEY',          '~$M$MnGR@oA`uLJJEMyA;`}ZJjKXJ+n7+OVd-HD,v=xfRX24K=cWyWBTOPlV#T*N' );
define( 'SECURE_AUTH_KEY',   '{}U|low)(w~-:?7+w6qp7tw1Z}X|_)&]/BvDDwmRiN7aOZixcG`3N(J#EN 960[r' );
define( 'LOGGED_IN_KEY',     '?VD)$}gNl=HFm2ayrT7%QMZu8s*^2r+3M08 K!qJJW+0IrVlOjyQLjY.6UH.Oszm' );
define( 'NONCE_KEY',         'ceY+vf7 gG(H&8uI;$2HXw:?>*bw9=}/roXl.bz?,gvqYm9OfTWXY>{3ybxW&q[;' );
define( 'AUTH_SALT',         '<BNCZ&4!K[*]cie+OMBhXS-FQvdy)~LwV3KJJA:td6M||n.h$4G{PM%Qk*s~-F 0' );
define( 'SECURE_AUTH_SALT',  'V~?(CjB58Troad?;K{#i/KpAG!ge!,ONei4hf8%t_Ad3o:]{!dB1B.w2;!to~^?V' );
define( 'LOGGED_IN_SALT',    '&AqCK*n3i$|;9m4uI>>Y<<Y0#c,Hl!L#!=DLt@1.}`?V@4)Y8b+_fO{BZjg96`,B' );
define( 'NONCE_SALT',        'pg|nMh/sSb}n|LbaxA<`!NF91noy= B&PpVM/iW+oWH/!?qT~t8Jjr1rM135E_[H' );
define( 'WP_CACHE_KEY_SALT', 'lmP*4zpes{,jSyl]wT3&<!Wje7{~N{tnwRS|hh4+|bf*^j %NJXry%ayeO`d9H<^' );


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
