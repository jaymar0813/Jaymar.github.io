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
define( 'DB_NAME', 'jaymar_db' );

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
define( 'AUTH_KEY',         '}Ks$5|6Us9/WLu|Ubi,[ravUqb0`T5D$^;@lyx$jeBg4gL7;E1dH)t_;luK`KaCh' );
define( 'SECURE_AUTH_KEY',  'Z/``Jue4zsfAK^6&2d[^Bow&Q?V<[~5tmnRP*]O%xs+X[a:^?giO9QiCDbu[Mb!l' );
define( 'LOGGED_IN_KEY',    'oUL,Jby~hCZCr]3.dTI+vJspaQi]br18b}kG]8tr_I&;h?0_Vh$s_d}H{&e@.6Tv' );
define( 'NONCE_KEY',        'HkAwqd )$FN(OhfmpB@Dnua~S=]aJIr1!zwp:$bue1PSFvCcrT&*kL:~or}>B#:$' );
define( 'AUTH_SALT',        'E+10#YQew *EohG_G9V&b7*QUH9[9!.;rZ{1%8vxRIoBS,m4WBX9bTCy]+u[+~25' );
define( 'SECURE_AUTH_SALT', '>Ai6KrC5m)dkEhqO5?|$5NDC!K54(+w3a3^d0IDl&6avf2&&u8+Bx+N,~ ;3Gh}f' );
define( 'LOGGED_IN_SALT',   'y@th+5PfPZiS@y-8jd4!E7DuHd:DLWqi}$pz(=g0FOMxCC{75cuL|A,G$K$[G!jk' );
define( 'NONCE_SALT',       ':P9Tm2s#8qSp{UU>=7d6/85?9^O*8@7`LQ6CsQ[QR0|@d6LFwn3{WZ0~o{eY_kde' );

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
