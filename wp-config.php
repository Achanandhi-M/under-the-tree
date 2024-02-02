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
define( 'DB_NAME', 'utt' );

/** Database username */
define( 'DB_USER', 'utt' );

/** Database password */
define( 'DB_PASSWORD', 'underthetree1@ml' );

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
define( 'AUTH_KEY',         'pv^3S{nFct5FppnhhI=Ui~hB,uN96oW|fvuU$FhoZmWd ~1_Z2v^>WaEXgPmb^?-' );
define( 'SECURE_AUTH_KEY',  'A1`%<}2vfBVhunS_YqL$y@#^bc<jQuM})=zpW9K%6*OLQ5J},e@Zz``ru-f7eH|g' );
define( 'LOGGED_IN_KEY',    'y)>an(AC6o1389#g12wu%Z>3NM~9>=,6gI?-uV}zFH!ERe0S.romI@%L]4a^w5=l' );
define( 'NONCE_KEY',        '/J#:P$7ZQGE<v<u{sBTfsejbY$zXZ:bkR`,b_iTK=1K-!#bl2D^YSj0h@R(0ZUUt' );
define( 'AUTH_SALT',        '_-Yz$Mq3{]o0,4?CTh3lD<DG9G5=YXz~3:7|OfO :c:6Zik0K|3T4U0z{21$u(+)' );
define( 'SECURE_AUTH_SALT', 'wH?18mUD1bPU_KNU0jc C&1-1&d6T-?UxkI96@Sgn9Vxo9TFO`bTr%%#`j!WqsgM' );
define( 'LOGGED_IN_SALT',   'p)8B6%I-Hk7B@s9-B`k&Q#aR{n0jqjPR#K;d7Zv!_l&Et1-au-{qdI)4}Ikh=W(^' );
define( 'NONCE_SALT',       'LTa>`WH/ux_3ib4BU%HBU/$%0^.ma#ierpn{[qX;sxM/>7_.*9PQU ]aDPTk}S:Z' );

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
