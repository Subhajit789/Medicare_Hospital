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
define( 'AUTH_KEY',         '*l1BEP50{hZJ2^*rVhmd})kX)<KH/uB}IV$S7dZZUr3Hv6t#s|gop!<P$)>~DY&D' );
define( 'SECURE_AUTH_KEY',  '_ci,#gGnxc76w{clYr1,fk&,x2/Xpq+)qk]? @js eHpIh]-GLcFqYjdKWH.F:i6' );
define( 'LOGGED_IN_KEY',    'NG1lNaI9r6;o![p7Na&,lym((==I;$~+~k5B@,=rv|:i1@Q>:IVJ963+,qVM3F-W' );
define( 'NONCE_KEY',        '1,j8o4]vD/[^/0Oqx.L{PR{v<Xl;~H33pEd@G;(cx!dsR&8CJO*=b]VWtX$ZS?p4' );
define( 'AUTH_SALT',        '83$ xV[3|lxJwj^?zXb6GhZEs!mDLr0bo)UW}i;N.q,pK!RiX1|sj#O66,+-q[`G' );
define( 'SECURE_AUTH_SALT', 'cr%,9$c*CTr?+CFWi?ONZ`(FL>GtmCf1Fw&@m%FKw(9^ZA*8}ZG3X}[EXXfh(M&N' );
define( 'LOGGED_IN_SALT',   'h:Mzc5=HK.w*m|4gVjC8*e!M@8Y%8$4au$Nl3H2>~V|wJg<5iJy+vfA6v`GQH$Q.' );
define( 'NONCE_SALT',       'Jh[@mJC`688q~?qTl7Z;CYxePPDfhFd`dp{.OX CgGy#]VL=zsh8gS8sS3z}ueh+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
