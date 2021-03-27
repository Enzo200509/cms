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
define( 'DB_NAME', 'wordpress_opdracht1' );

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
define( 'AUTH_KEY',         'dHit`>f09S]9pLK?6XxEWM.M6Q;n^B(@xz#d>|g%H:Fl+d]kXG2y>tTOU7|]9ijx' );
define( 'SECURE_AUTH_KEY',  '.?D5Z7_:{PRBx8?y5=E`8G|abBc!I xykQ;t&tp_AyI#w4)DGQATeg&dOJ|3l@VU' );
define( 'LOGGED_IN_KEY',    '(#vkX9A`ln]o7d#p0,B(CgwU=WaSaHBzStfpb4y9NA,>(# &6T<T_(aUo{Cd(ZU(' );
define( 'NONCE_KEY',        '.*xm~QwG4`J1ZUnl7|E$0}bHd .notj_kayUG:aQ:0IzEZXO`n_1<?GReeX+3]T-' );
define( 'AUTH_SALT',        ':l&!hRDv*H=#X{Jgmt+w:nY2u==Q2*ke}:M;!7V^ka^tR6=(vD}kF{C/I*L/2;pQ' );
define( 'SECURE_AUTH_SALT', 'uM0+rhg&=>G]U)?hYD/}5f%xMDTU)TuIbpXS|Zpp:O+7is|8H3lc/.qV7ml0ASA:' );
define( 'LOGGED_IN_SALT',   '<LC)02TF wF[(ZmX#u`2(?yJ #n=qX2*U{/dJjnUm]_:5k9CTOc4t^]V,YelgNkW' );
define( 'NONCE_SALT',       'n-TM+oL?5({MQC=Tm;/$JFSkwEKDCed9KF$B:iGS6cgTdE3nV;cSI$IU90}5)m_(' );

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
