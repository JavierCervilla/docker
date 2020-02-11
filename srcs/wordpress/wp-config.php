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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '{^7V@D]YD2$O&CB&YW+CAxi`IoBW)hb[14**-cUtQtS6ffUmy[-^ySpD7ye(^;33');
define('SECURE_AUTH_KEY',  'mVOHIx!`[GUxN+ZTHQ*~X<!Zj:0YD{XCp8jv8Sufq,u2w>UOO&Qbamg)QOlce[+_');
define('LOGGED_IN_KEY',    'zT-/Gv5uiZ10;R&r@< S!CB:t+2! .;Ds=0-/wF<veVkg~Gtg$~IhUAzHI7GfW j');
define('NONCE_KEY',        ' J|8O6zx2Ao0&U6$Kzb0?I[y|)-Gc)/(bcbPs#AU](Gq32| Z6;Rq %Y2t5t3btL');
define('AUTH_SALT',        'r1+E@!T4Et]+QWQMX(<3^0s]tHu~,tJrmM8cOwM)ZzuLJh#0kmv1[t;aZ`I-FxJO');
define('SECURE_AUTH_SALT', 'A$t&>CH/XtBBDWa{)n88r,t$|{Nc2 npwi1n@vC2,i_9tG;|Jg!}QzL8f5#V=~ED');
define('LOGGED_IN_SALT',   'J)`{PS{ <eIC/+qf[;AdHX+QV%b|W|2Ad4S4.C^Z11E+%etEA--o-K-QE_+CsLN~');
define('NONCE_SALT',       'iSj`-_HS( )<L;aO|I0.;IVrSu8&.i.Ndu =*hU~h*kz}~!(sO4}yf*HGDn4HfYj');
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
