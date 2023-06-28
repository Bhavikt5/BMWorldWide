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
define( 'DB_NAME', 'bmworld' );

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
define( 'AUTH_KEY',         'k@k>MY=X.-ylvGPS]n/(&!gLp=r@Bo*V!#zr63x QGwE&d?v@DLQlh*#haJ},Log' );
define( 'SECURE_AUTH_KEY',  '*lh,RLO6-vj-p)e+fo[jbuYbw/HP^zP|/01 8o8K,*Cm_AV1BQ_n%)iLz:nol{}9' );
define( 'LOGGED_IN_KEY',    '4j0S$YsYo6NA)[`E]>j8GwAsWkhAYw^WlXYX5pJS{$lOjwJ@b-8z4Yx4ZS;r|j(Q' );
define( 'NONCE_KEY',        'i%ss{o>tJ@XH10hklK=4QbKEFSa,aN(B%}v.m6}E70Kg1FGeCA5u`S*(UmfL|]3O' );
define( 'AUTH_SALT',        'iE`K*}44D($|qaT@36#evZA{X:jO:Jv::2FK0,qY5,+GFSH4V*v;Gj `7MKRw[:O' );
define( 'SECURE_AUTH_SALT', 'W.c$r[qUqm$nR`sWGt^cvV@8vmJ?oQGiY~fNp:~DCWy7i&Wdl;80Ku0$!bQY?j^~' );
define( 'LOGGED_IN_SALT',   'oc>5fjlGAp<{J7:& {iAt?uM&N*>8x[Zu~c*e|~jI%+BxWRPgV|!/qcH. I1i;)$' );
define( 'NONCE_SALT',       'o)lc`,l7Jh];SE@8odUH/;p#u+<)Q<P29.-W<#LxKjubYq-4;u0:Ut=Uh3nSGS:P' );

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
