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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'whitemore' );

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
define( 'AUTH_KEY',         '!&XxA;Mz`v w=mOxB:G?z!_C=7oDe,9A84VO3C|EQ 5Jtkq(Oh8l<pz{PQ@<%miy' );
define( 'SECURE_AUTH_KEY',  '`bhI}Ku3Pd3Js7O$>#%^cPbWfDt$R9r:BvmI`iMk`X;#snx{o;JeK[KY;TOF4LLG' );
define( 'LOGGED_IN_KEY',    ']Cou%Fz$}~)H)*kQU$;v*fe.*]c@PP`_cwGcbXuCl2Wtn?D&y8q7Go1tk1&^0@?h' );
define( 'NONCE_KEY',        ',#Hi1cKvHSHFY&N5WW5zuA{bWV*GcH-8QTIp]NBRw4UjWpX06IV_Q>z!xscWgw.%' );
define( 'AUTH_SALT',        'X1ESmEXRBxMgd%.?Po<G$A>MEhN[,_Au~h^Q7%v*05Bmaz#AZ1~?h^(?tIS2$nL|' );
define( 'SECURE_AUTH_SALT', 'SQV.zSHY:dN|!^!sx@?`-eP.2S9;^BG6%1we1]`kqUC]evZ%KaPb{]^`naw3}FQ+' );
define( 'LOGGED_IN_SALT',   'w_O6R[+DAhOgE7>dTMn^A,|t&wo* ?=tM%,8hs9nStn*v)>P5=.R6@pe3t+=Hd#G' );
define( 'NONCE_SALT',       'qFQC[N4N>6}~OnY B6uEx08@J<>T+?7C){Ktm>KG~u;g`K2d$6mseXq%Fk@fBS3!' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
