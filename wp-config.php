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
define( 'DB_NAME', 'wpgithub' );

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
define( 'AUTH_KEY',         '*DvHwR52|q]PvRFJjhw_;Jvsy/HxZ%Ej)L3!6-5UDtRV>7_NpSkmBQ6U!zF1o}3<' );
define( 'SECURE_AUTH_KEY',  'Ps/f*QpgJuXnV}jf9y G:h*k)}-CWQ;5283 TuJcZ=_^8LEYT=XW,S,oQl8X+<ax' );
define( 'LOGGED_IN_KEY',    'rtlO39[;^$e(8To}g>xJq7w=F|rrj5=R52y)GxI}6,17)Ry{7glB^97kkjJ)rBAe' );
define( 'NONCE_KEY',        '=&IrKRso(Jq88/4$q%9j$cqGtH01@|,}DRAGoLC#ZF`4 BrZ.|*a</Yh P!% ow-' );
define( 'AUTH_SALT',        'Ep-z%wGCQ3;a92v`#YPp%D^7{W`rKvZ?b,x&jO?s_IZeIrcV<phKW>:hH@f0l[Uk' );
define( 'SECURE_AUTH_SALT', 'EN4rM+#Z^n)injp{{6hlghvQm:pbW4@ho@>N^6]5ON]G$):$O L%TQeB^?W7Wkm^' );
define( 'LOGGED_IN_SALT',   'eIB9w44V5_[EvVJv~CQ3[Esi&zxvbT!9^jIqlPsg3/tN#<=X*$AyuxsVf4;T-^Rk' );
define( 'NONCE_SALT',       'nw:#(I@WsQ4;_Nh}_A`OK%rAE+odE9dZ+sl` -{y`!ciNoeu$[otYsFU=m/[>LOG' );

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
