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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test_wordpress' );

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
define( 'AUTH_KEY',         'q(2IKfUGwDtoY]r04u-P-^fG{W,`M(dNC2a6RkYpT2GSZBsjV0[[r{qkW9J^f4MG' );
define( 'SECURE_AUTH_KEY',  '6j9SrF(QU[hp,6tV`?}=3>-jgt}w[<HL<Sb=d>6[W1)Y1T8<S$F_dXRLbKA?i<:$' );
define( 'LOGGED_IN_KEY',    '!;X@j2cF_8Y0?As.G*~.o{q2Kf9If)}P!5q_LMdpI2&@;Ugt @sr8(1?#fH10|i]' );
define( 'NONCE_KEY',        '[#*0E<fj7RpPknd}i#QBYRkpgDU)Xr.v$%)D+(^We.;spt)G|RJ:$ok%O,oFIO`2' );
define( 'AUTH_SALT',        '~a[aetq/,:R;zV:,NBiaB8YdEUpa l|E|j94df}Zb PypO4D`fPez.%Eq.Z~(!2i' );
define( 'SECURE_AUTH_SALT', '{aA[bu2h%D$HZG@N]nF!x0?u2?kWpr#Ws& Pf4qDRkh*<#K&1~Z<V%9Y$7>E0k3C' );
define( 'LOGGED_IN_SALT',   ',N](B7fid5bjU.:Glf=i>C)DL|CiAg2:X]sZXs8]6w+q{6HKxliQ~%s CB-cj@^P' );
define( 'NONCE_SALT',       'S [OW)r4)^;aXF{Vp0r:zvliTk5#ovC#]w4.U/w{4ZyhP#^d-CkcyG{9MglTimz}' );

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
