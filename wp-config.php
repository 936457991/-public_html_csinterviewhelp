<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'u956391161_gtcf0' );

/** Database username */
define( 'DB_USER', 'u956391161_4to5y' );

/** Database password */
define( 'DB_PASSWORD', 'EhqWUwIX0K' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'nLc5}7Zx@tH:G[pyUW?}Q? 8bA,.>{r4k/I7 KEB+CuK#!^dT[7uvNqPn}(1D; 0' );
define( 'SECURE_AUTH_KEY',   'PL)C4g?}XI1jn1&ctq)J1Q=Poi3JOf_l=<6X;>Ht=A`Kqf^K)Cc-q}o*DBYfYF7N' );
define( 'LOGGED_IN_KEY',     'B;~XX0%}N;/1+ZNK~(} Zr@a)ww;ep/y6X?WnuQwmDf*Zr1aX%8`b@jZjK.nk==T' );
define( 'NONCE_KEY',         'H-zbDry8=?NSL,>DKya|/[Z|,lV^31/`fyzux4%)b[|L0Z?Bg9SACL/Fjb`rA?B&' );
define( 'AUTH_SALT',         'RX-|9K}mirM/:D~w.1%<gxXK:)Mh1~Vp)]%udc$%T{/96|6jT`4l]jF,j,C48H;@' );
define( 'SECURE_AUTH_SALT',  '^a5XFAQy8~QLv*(ER04t5(WFw4.|.>l>/9hc>3stACg(wzT#p3jp.)+?$z|NLq20' );
define( 'LOGGED_IN_SALT',    'Ri8<~Jy@j>vDG#cHPcj9mP>=t_]}kcQ+G/TLJTvX[:&YrCD~;gqTMy}tVd*c>b6>' );
define( 'NONCE_SALT',        '0uA1b+#ZfpKLdiW6L)UUE5m@ M_VtjJ@d7rhbs%]:BYqZHSrBD^EQlW83IzINA4r' );
define( 'WP_CACHE_KEY_SALT', '2t1q=wc&Kh~,vM[T*A*{(5v%?L%)+SRa7I8=a}S29*f!<zO+ }R60%/Je2[8hu@K' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'e21bc64b5b490135cd9f54c1ee31584a' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
