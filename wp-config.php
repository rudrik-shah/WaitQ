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
define( 'DB_NAME', 'wpwaitq' );

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
define( 'AUTH_KEY',         '>Ed5zI#Aq4LE+8io2UM4-{2$7<=8S=KO>Dc.$1?>@V^$|+{u *p^`.k:td7~6=M^' );
define( 'SECURE_AUTH_KEY',  '.1X%iH1+L=4I,%u_:,U4F b@D3t4M]:>Y:^@L21`MgpZH{V>x7@UVu~YRCOJ}75d' );
define( 'LOGGED_IN_KEY',    'L+[Ds(:gFOS6m|H3 L|L@iobBYC+mCR|rYYZY_<?`ZKYghO?cgm% byG{(ZL<I1 ' );
define( 'NONCE_KEY',        '7bpx<-y,o84z0<f`h:M),9#jEcGWC,O(l]$x=;g&qZ<81R*#:a:S& NXeXfKu9(*' );
define( 'AUTH_SALT',        ';vT+A5PW~._Zqw|txY/*=7:<e*S[~NwUd*rl n=v;omml`5<,+j7Sf/Ur>G0omzO' );
define( 'SECURE_AUTH_SALT', 'oIq3QSVFFWMJ>6[qdToW*B6X<rPJ[}|*jd{`x3eRy,z ie9ls6g[B=:OS1iNLT%_' );
define( 'LOGGED_IN_SALT',   'U`ecDP@.K:iUJ}m1$:^qvBctAGo~9#_;O%vv.?HP!?U..qcx(avdlqw%.V@<Ny&v' );
define( 'NONCE_SALT',       'dJt0GS]C,ThW0EVc>eoS=3coZV&1[*q#(R$<.2$.TR2mDmcL(P8`Q`@F8(X!.@tb' );

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
