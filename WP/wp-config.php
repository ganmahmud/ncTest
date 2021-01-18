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
define( 'DB_NAME', 'newscred' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'tR]5Ch=sG:#=b@0d~FOh<IJ[<U+PX ^K]O(HD$6Q>KW@q{^&+8KgR)k?VnMs|df!' );
define( 'SECURE_AUTH_KEY',  '(FKN1;/AXfeQZ~`l7Tc+4IcYK>!T8iQ,K^>G1PI[jK%^$a5Q8hJ.$2q=E#{#OPpM' );
define( 'LOGGED_IN_KEY',    'TJ>`8g5fT[)g#1Pc<<UX6dhE*o90?qLsKNCi(P1<I5:0zeO!|nr_cl6a9)jV +}d' );
define( 'NONCE_KEY',        'LIM%cG9%Rd!}kLaZM_?r_1[m<PGk78].oCRW)?%]yPvR>.S4p~[?[/6cxL`pM^!f' );
define( 'AUTH_SALT',        'kJ7gce9-gD?{CKXB:>ty0~<NA54St)s83%6]&{2k&CBz~-9zb/|+]HaW%o)vZ696' );
define( 'SECURE_AUTH_SALT', 'dE5I$wkG0TNrR?gLk5f~~./cW?h.cJG4jVHa8fH6kQod;*):qGx/pC22&DEH0pcb' );
define( 'LOGGED_IN_SALT',   ' %`J=eqU?S7!*>A%v-Ig!sf1yO+SLH1Ar,w+jBv6_zy5lp$toW-920Ik:D oK>9P' );
define( 'NONCE_SALT',       'Xs;@foZ0qO=fhjY)ltv g~/{%#iC#;fB-;iJjph[fi9KML0=m?}6Z82^KQ-$Gjyv' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
