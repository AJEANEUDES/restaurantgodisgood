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
define( 'DB_NAME', 'restaurant' );

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
define( 'AUTH_KEY',         '?Jt[I9UbUm FZMx+HsF=5dyzLi.!{4sU0({#4746LVPM(2* -V.IDW|?)V@MM~8n' );
define( 'SECURE_AUTH_KEY',  '^2S,Ww-_oe]9NE`[##gt}([f_r]s~%^]-B2iPeD;^uSWF/qnapX_NV^f/9NKyc`e' );
define( 'LOGGED_IN_KEY',    'MgqNMlwRP^LP]wdspI2bR%#>p(sy?CMryqXc)!Lg6^)UK!`k[53-r cn!/}t&_Qm' );
define( 'NONCE_KEY',        'K3g{7w&:<ra<l8$6m^wV2 Z>hh?Sy7=d%~BNNp|A.+TJo;$oMD0Ooz9_9-6BxO/S' );
define( 'AUTH_SALT',        'WcQ_De>9QDd1Qv8ccVWqL}EOjkw*kp5xDjf4Kv@:~![dHwd1#5poB1Occ};?8QHI' );
define( 'SECURE_AUTH_SALT', 'W/pHu:FbZQS:WXmT^n_ 3ZL0H nHXo0)$m8~*!{1dp^E&N_)aJ.gG|XSTd8;JRP?' );
define( 'LOGGED_IN_SALT',   '05N5%i3me7F^4<M[FW`HO$Al2|^1Tl&w:mvx!43T-|1VJ/vn>+.Y<DZ/6d|Zty>}' );
define( 'NONCE_SALT',       'DB}t~WBK$*LQ&V}OuWRJ$wN:tH*(?P6>r%~Q%PHoxg?8x7,RTO}6> ?FS]1H9*bi' );

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
