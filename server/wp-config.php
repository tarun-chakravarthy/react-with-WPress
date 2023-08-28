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
define( 'DB_NAME', 'wp-server' );

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
define( 'AUTH_KEY',         'ENCRT>Hj%$x6w{I[n|Yg@r%G@N9Ly3GvbY&t82j6aar5r;!QyD5?ojfQ8v~J8vaq' );
define( 'SECURE_AUTH_KEY',  'n%XWF ^s-e+dfWc@_FqVI~,fk#Wx;Y{wL+Dl}Lq@y2RjE_U)@tF.u`eE#e e62^P' );
define( 'LOGGED_IN_KEY',    '6(wOi%8{JLZ}h=,BD1}w4G(Nx>lE.&_[kF(jl*+tJCjU}H}*j^O`V]i*G`NE2Qde' );
define( 'NONCE_KEY',        's(f(X1:>S+5ds4`-2`mke5^RwE,@@rtb*O&t${gSI}&L4COEK2]r@2y]R,+Nx[zi' );
define( 'AUTH_SALT',        'm7mW~Yt@>Oa>il/w+5?dEx>_TGrsA~?|GNae9Butc@<lGgp.*D~ft >@~nrl?ER+' );
define( 'SECURE_AUTH_SALT', 'r?h{h{VqM4rJ.hD3Xt/;6~~8cw3}IqhN9{Q&(LPm,eiY}T;)Z>pY.2ZPx!oGZrHH' );
define( 'LOGGED_IN_SALT',   ':H}?~TA;d,,+t<YYrJZzBTEe47#7cQY#2-=Q|/0qiFtIvV8r%2.Dne:zD%Y#>jgn' );
define( 'NONCE_SALT',       '^^crER%2uUEi|&/eFW}(o)j4}r-3xfhT%Ibz])zy)5D1S_p#[0D8wlt# P}P+5Gl' );

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
