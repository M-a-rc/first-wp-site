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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'o6rw!}-)<IrV.VF8rbL[_qAmv^EBrm;s`3]KW`[28+W3_4LW~`5l1)OBc*&f?2u0' );
define( 'SECURE_AUTH_KEY',  'taYaSA?g(}k_b`U#M%l/Yd;6 ghB[u;rGg75ka|Vqc0).itd ll]M:_BHoEsXN~d' );
define( 'LOGGED_IN_KEY',    'DN.>StHCN*d2ng@eTUfP2xv?IE:*Op7+^ c]DOYW}?5?y[@8VqOZW`ZZMtB*mFSe' );
define( 'NONCE_KEY',        'bel2lv$Kr;K/uucDi]}<g91#~pYSJx?=EM)4I55.q44`nAf!v1Z[,w(t(lm*Z/Ca' );
define( 'AUTH_SALT',        'K}VGHfJEN{H!n~zogs/wK0F]F5&$k@qI-zz|_(-yPyo;8a-3A5(U>Wx=.O4T|:B=' );
define( 'SECURE_AUTH_SALT', 'Oi2NwxNF?7@[ao,7:;pPSlB=]G!!]ihRss>9|/n$qUn.qe_2,Sg>1]3s*O0Ha^gC' );
define( 'LOGGED_IN_SALT',   'HI,<R.j848lK/H`-4b<L(HVf7{C7K{=&>=YxmT]&t}}]ypOp5X-g9/C~`4dzNL&<' );
define( 'NONCE_SALT',       'Vkr)B$sQ^.ZCfGv9gvW_Wg21x&UVhq^3dUG=7tH}D:0VxM5Xz@GZ[p]Yistu?gB=' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
