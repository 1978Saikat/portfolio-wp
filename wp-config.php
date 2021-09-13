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
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'QslyB,B*R6F@9%.|3RIJit7x]hh$eB)IAt@ktx$^xZ;Q}&iWzrIc$YNiyM}EC]>/' );
define( 'SECURE_AUTH_KEY',  '+fRIOIT*o+iX23JsX0(w36%ozf]xt}|wxlZ6~#bxa0BU0hrTbx?FajgU4 k:t#lU' );
define( 'LOGGED_IN_KEY',    'CDEz5~(j(X8|%&;D1lpeSN[JO75gaj%J{U%?|zkg?rxNi@i*!w} 7t}[k--&!DbY' );
define( 'NONCE_KEY',        ')`o?EV(2k*dAVlEpEVHE!YW}}7oLx:4+S1B@rW=#^(:j_/Z}|Nn.4iX8DCctO,#g' );
define( 'AUTH_SALT',        'XdZld,y9r||VWXm6/UYkLxj1l2Z7;3&6V6d8UE~j6x5,6E5=q?0s3vz^+fXqO0v-' );
define( 'SECURE_AUTH_SALT', 'peBSCDBT.;e,~b9N.I}f;+;!cNHzB&$5)FTCu+;FZ`}~vItE[q%g!W>c.iNYaE1{' );
define( 'LOGGED_IN_SALT',   '+lh;jY^v]Ne~*H(iwRvZw&x#o7O+1nT=Wfq,OhqWQL8za}?$vn.Y[B@{PG$>X*id' );
define( 'NONCE_SALT',       'A4DHO7x{-x]&t?Kq.nyyzL%-jZigNyp,~XhRjlOQR_]Vx$AyVv%bvCzclk#vvH%E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'port_';

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
