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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tessos' );

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
define( 'AUTH_KEY',         'Q|`rOO>Au dwHEg@M?_IbB.%ZUuR.-btPt%31v/j5v,!-~]pK0%yyBw=.M^P;Bz[' );
define( 'SECURE_AUTH_KEY',  'dSGms}qu%o1,|`FygIlH__N,Gs/mt.n;DldIMCSpFCyB$KAHMX-9d<YBvrN9hY(g' );
define( 'LOGGED_IN_KEY',    'w|=lF;NUXW~Z|37f*/eoAaf1.`B{.1K!_xxrbESEAF@;)n+.ez 2}z:4%x.Zk0b5' );
define( 'NONCE_KEY',        'c<aqVL?E25HYzN:u a]H=ycJ.YwP`N;q_FrD!Ew-+[{|#wr4xH{{5`QIG|O|h2?]' );
define( 'AUTH_SALT',        'Bgt&%T*6Tn3ho{BTFWk5U#~pUj9|Z_ -]x+zYo`H5qR-j5QF3K1V_*F`X!;*]C4y' );
define( 'SECURE_AUTH_SALT', ';}/S#tJennL4h;X8gq}H)5S(}OiOK@y>/$A5;3JSwx>.TQ7 MzaeBhtf.[=?4(LH' );
define( 'LOGGED_IN_SALT',   '^$ibiu.l8cu[dXDm[b<NJ**tyNM?/]|*<MOMlFq&;9ns%;VmoKz%oXScTuAcCX*;' );
define( 'NONCE_SALT',       '6UX+3Rsq.sg:9D29(P:k67MN#BQ65(Y<w2PVz:(ku+`KV,,vB(.[s$3AJ-2$HDMx' );

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
