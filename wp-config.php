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
define( 'DB_NAME', 'unit_dashboard' );

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
define( 'AUTH_KEY',         'IM0d]ZinDlJ?j=j)o{qzlY~%B$5|0eW(hH;on_2G/>2t;PU@iv-D|5QYs79TAM+o' );
define( 'SECURE_AUTH_KEY',  '9l91O)eYY<N:lw<Ah9(jzy-*>);?g_D:XIErLj:}RUu?3>bfKFm;S&gyD~n0Gp2p' );
define( 'LOGGED_IN_KEY',    '-1v rK2&E3EfFAEPzakw[G$Mjy1MpID]9*^(S[V6P<b/)?sBh ;>L@A-FKuJi+wg' );
define( 'NONCE_KEY',        '~3cn5$a< JVoIY>v6%|OSEL^zJ]1T>P.[6n`TmOtS9Bc( o{`X$Z D_#2Da? _@@' );
define( 'AUTH_SALT',        '3gAgXB>#<*<Eeo:g+[#^G37#Ce:)scUqNgP<Y0Jqi9($p ICzzUrIon`DN&][+,)' );
define( 'SECURE_AUTH_SALT', '}@^p&K.KkJ.hyI?S11-~%-f5LE4>~2o>=l{ jc]szjWM^DMC7OFUdU<)bW }ppm6' );
define( 'LOGGED_IN_SALT',   'A^a4oh[^b9hx<>jU5kg&JM}5EQE=<T9s) BVWd4IAi).Sn!39{FAmyBfj5N|z;_8' );
define( 'NONCE_SALT',       '28KvHX]GC^L7rvV`;*;,uwQH7051%_##|vu~7gO;X=Fs tJkh{Cdd9C*x)Au.5Z!' );

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
// define( 'WP_DEBUG', false );
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
