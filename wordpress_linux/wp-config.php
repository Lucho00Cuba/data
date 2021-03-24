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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'e{i4zNp..sS;/yTw|IO}[@n^%XP-WrKD0+u=B[ykfW*hW_$hO}iDR- U8+H;J^X-' );
define( 'SECURE_AUTH_KEY',  'RN,|DdtOiz5MPa).iLZD9Q)/@c4MLZ &vg=?}gVS?F$6kn%>0K}x6Nz![dA22WLx' );
define( 'LOGGED_IN_KEY',    'TT8(p7SZngVvf,]>NrSAM`KBBegL5~UookFAIxNH8o1<cxzfI&sqZDg@Q+(V!AAk' );
define( 'NONCE_KEY',        'nl;+p%Q1[s^sa3y.!EPlqMWWUj^JT!MxLww^x:$2KZG.]?)=*b!t6Mcj~~zf1,{l' );
define( 'AUTH_SALT',        'iC9; OWRS(.<PmllN_bO n9SeMQ`Vm&Z%n]AtI9f$WFCGtTpq@Qru=+e%.WtnUFx' );
define( 'SECURE_AUTH_SALT', '8PT(e/dvMXsp> ?mYw7scC9?3KLA~`t8cJZ2GHxY2-JFGlQ?B(h;LjHW*poe%r;W' );
define( 'LOGGED_IN_SALT',   '(0=f%!v#{FU|/%./4B%??PE(M1&VUfThLnfI2:;x>7^C au S!jB^Kyf5/l__two' );
define( 'NONCE_SALT',       'I&r,r_$?1v,xxo`e/H1]9Wubn.[;B?bl&QJl21pBT +<7yaWUG|3dsnWLN~+>5L(' );

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
