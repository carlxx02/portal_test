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
define( 'DB_NAME', 'ibiden_intranet' );

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
define( 'AUTH_KEY',         'idRcAu[Wb3bz_f}aN|a!&.VlMA$IX[C0y)U.Qd`N<C|L^n=QriP/^>SqUPd^sUzD' );
define( 'SECURE_AUTH_KEY',  'tO~xD&qMH=fx++=,/!Hjl*tPa=EcLB3#(O)Y#xhSD%.$jod<lKw[!JIIOc3D5))u' );
define( 'LOGGED_IN_KEY',    '=z[$wF#bk9<7WgjR,or{^C^u/7_s0hzH.6@,Lh[u$1^ DS {Rcx{6!NiKwTk<#nv' );
define( 'NONCE_KEY',        'hG8Cl3GBB-0joZ))qo@,V~P>Y[l!u5iz~n!(},}BvP=x^*]sdd-GF-=99a%yTjXM' );
define( 'AUTH_SALT',        'cjI^r45V);2@LEu|Blg#z:#M}* ahkzh)1.kD90d6Dt+1I,OUyE5.yhOd0?|qTK+' );
define( 'SECURE_AUTH_SALT', 'Afw2I~>8G_TX!2wu!$gmc?hVo#^|e^d%3*p4h3*fzy7)^I/n`OMpUPb#`>X_qO 8' );
define( 'LOGGED_IN_SALT',   '!_i%#AKfu?VvSkkHIRK+*3)ZPIm_gX&WpTZNbyKXgiwk*fKWsw!~[z&^m`1&@,;4' );
define( 'NONCE_SALT',       'u#F.AgWAxs_#)+#m<ot1Qj3NKWT-s</q]8VN%%_<gh&J>g,RCh,)u8vI<=8QR{pi' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ibi_';

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
