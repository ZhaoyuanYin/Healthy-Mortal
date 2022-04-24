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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbn0y9p2v5rlep' );

/** Database username */
define( 'DB_USER', 'ufjakpxv6hk00' );

/** Database password */
define( 'DB_PASSWORD', '7g94fjdxqsio' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'g%f{*tRVj-E{S>Ziabc?bBP#Vc`,e<~Hr]&f2}OZZA/wgb|K]B$/PAKf2:v!G_C+' );
define( 'SECURE_AUTH_KEY',   'B)Qa=F9L@},Xth0);GY<-,IF)&yrDo_gIoCl JqERJ1P=P-Csz:4[^eZF[XFDp_`' );
define( 'LOGGED_IN_KEY',     '3uT]^!0F:D_l _ZY&0-(0EsJfLBljGgE-H +T7v [xISUFm$k@FVz|NNmZT^,.TI' );
define( 'NONCE_KEY',         'Kp4iuQ!I4&_6!L]d}N6%T.OJJo,Dp{B^cV$Pb> [#27w^M!E,`pZD8]~M|0@@t<4' );
define( 'AUTH_SALT',         '5O@Wzu:zQ$*Z|Q`jFonnJ8cJAS4F|kv[?(*]CyW)3qx)GyB,{`9o[I kQ8#{B{3I' );
define( 'SECURE_AUTH_SALT',  '|828e#cr]~:hb5lG/=IdAP[.hE_kUx+hAOe*h73W4+<O )sUN5-9JGk>FTZm-`gO' );
define( 'LOGGED_IN_SALT',    'Av_>Ckg$`@zDXY2E6k=$c`jetg(Ir;mM%0%Oo8zi! 8G3MY0Sid} Jc/lTfP2[|b' );
define( 'NONCE_SALT',        'o7SN*MDL6w>4A6J!t{NZe>uI~,]*<CA:$N0bd#p#)!k-vOW9!A{}[Z;` )FVc :Z' );
define( 'WP_CACHE_KEY_SALT', 't[Xi31hP=ix@?a<~fs4b79NjGQmtAZS634H;(v-spWb#c^7fo+ttGty<|%WXv)!L' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nec_';

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
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
