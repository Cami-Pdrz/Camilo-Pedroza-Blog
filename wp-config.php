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
define( 'DB_NAME', 'camilo pedroza blog' );

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
define( 'AUTH_KEY',         'gX5q3jB/v+tWy~,yX^}NA/!ot&}XZ2~E-Q12$Zy4yZ*O;&Sih|n)G JIlv%B8Oqr' );
define( 'SECURE_AUTH_KEY',  '3D^a$Mx,-~gbz>I20sxTV8t$$5VB-^T8Zemy*V89+xV#hFKJLtJiG]jI;RxsPilf' );
define( 'LOGGED_IN_KEY',    '8c$`VgXKIJ]E!AhRXe+g%szZw2-=Op{s~_^8tP#RK<#eri=*d<g^9l%E]GK3|.m2' );
define( 'NONCE_KEY',        'Wm$^EG!Oj#69JR1H]4WRD{/4ZRzNBkf)gBpsIXC]h3Pi9:WzZ&Jc^}!BbZu#W?0k' );
define( 'AUTH_SALT',        'LpYS_3PqLYQtxYR|vmeOIEn_0*A_,&B?JKtf+0qy{pKB1betd#Y}bi;;.y#7sRYx' );
define( 'SECURE_AUTH_SALT', '{{<g^ATrEUU*pfYR5O)xhH2dGl 7NkFO7 WjNdp;c!s1k&h<c7;.q Lbfs{n%c_H' );
define( 'LOGGED_IN_SALT',   '/3yJ|u&==u9G44u/<T*R*L+x-I}`ouWxdM7Pd)n_%{f6POPmt(zG3:hvKZCmv0^o' );
define( 'NONCE_SALT',       '`){X%IQ4*[P`UY[!eR8hHw$~x+6WOOrcTn )ZVL)jSp4J(@7rL|uNRJ1N4f9ta}T' );

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
