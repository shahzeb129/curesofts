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
define( 'DB_NAME', 'curesofts' );

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
define( 'AUTH_KEY',         '#17Ct$YpgI:zie[Qp05ElQ*`ZWYRtbwBV[*%N0C~t@G[ZC-p B&)lmT=d{Fwu=WB' );
define( 'SECURE_AUTH_KEY',  '^SvH k1Pg.Ur0Z~uob/l-hL%Ll_3O>/,3sLx}70y}`6I#;&diw8smE!,hOd^Xg]Z' );
define( 'LOGGED_IN_KEY',    '-NeX2z~L0xI|t3XUx`;h}&1B@ X0`6Pd^WI{/lWf:d4S#haK4MC_GqonVj<clIf<' );
define( 'NONCE_KEY',        '*@90O *@&M5&/lA?N9NguDH,|1^@d,<hxDT^(9(7iZO{x,KiMl[@^Ohk{ =Y.GO2' );
define( 'AUTH_SALT',        'B#Rb.PHNcK9+jD#8xAkVD!V?v|j,C~6~.(=MWU{#ot4Da=FNZX,j8+RMDY9v;6/v' );
define( 'SECURE_AUTH_SALT', 'xnd/^w@%1XSO&qA:i$4i?d}^M5PL;L=_HAn6l/y7hiFB`V24!:pfRPgvA1DE-UG~' );
define( 'LOGGED_IN_SALT',   'dl4`B1L^$yZ0O04$W@`5;_:ZW}G}9oe9GjU|TL@.xUcxhF!+-&`)0e]-?}*0F;a6' );
define( 'NONCE_SALT',       'kJ,jSSQeTSCIjZd0ldYtXv!l,tH]C?E$Vmu6:-:dx7)Sc/vsG+ LEzIZ.))oq=_<' );

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
