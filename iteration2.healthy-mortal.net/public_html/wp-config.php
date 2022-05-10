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
define( 'DB_NAME', 'db8hmxqqbjxbsb' );

/** Database username */
define( 'DB_USER', 'ulr3irvfciauk' );

/** Database password */
define( 'DB_PASSWORD', 'gnjl5qr8caw9' );

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
define( 'AUTH_KEY',          'mPx,B^~fU{$/*2fi=K[pr2RMQy~ivgl3.7%1;:Ki ACLM4tWFbxGh7AE7`S9rolA' );
define( 'SECURE_AUTH_KEY',   'DJvxp/*OlErAvBZk5j*k-G7o( 6`ZO7Zwz(m5f%~GZ4T.C!wrvZ>NX6e#W[yc<x#' );
define( 'LOGGED_IN_KEY',     '$<MB?uAb#4Mohj:QG& XNZ$GBW<PFbR}-J{,T:Mx<e`*8#A^&V7aq4y8j2AL!H8d' );
define( 'NONCE_KEY',         '!;![;?2?3#AN-ANDY$x(v6yP{P(tO=6J9pv)u~R3lGuO.Beq/|FnR~Sl!9+kh;R<' );
define( 'AUTH_SALT',         'XP fK.)fsPx|(7_pP{>t.<$wcz1W;n#r_]OD/a[.=u7iVgv|pr:3qwo*^}7,zIlM' );
define( 'SECURE_AUTH_SALT',  'V/Vj-|X+>@1Fy{g_p5/]PK/iTzu>3a)Oe+M^#8{fV(+Su]apbTIR^{f.#T;P`EIK' );
define( 'LOGGED_IN_SALT',    '%r/U^tTnb Fa_V(T&=H/T=gCEP_mfE?<pf5nL.e(li0LeVGbm73cXX9Jps-)O&yx' );
define( 'NONCE_SALT',        '_ 3WIujgFu7oTVFr|]Ib>1%bKA!d7[:g9wEz9l%xx,ms%%V7xEsRIbUjV4xNG/-,' );
define( 'WP_CACHE_KEY_SALT', 'B 3dEwFCegu%Xg&DA=[`;jWn@|7d_<8x,XXr]R=2&N[-hwfOm7?s9N2T+vUoC o3' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'yek_';

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
