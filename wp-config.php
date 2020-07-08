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
define( 'DB_NAME', 'wp_techshack' );

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
define( 'AUTH_KEY',         'dTGP4EI;{<M*$(NlpJAcI/frMW(/2e1NCTi1K-)1uD<FjX0`2V(QkGD E[3+eps=' );
define( 'SECURE_AUTH_KEY',  'UgA)hzXc]6_~#/bYfL,~U];Hh2;2j9R5aYaX#WMEIOq>UE._ZYBAY>Q5<Q9~%9$8' );
define( 'LOGGED_IN_KEY',    'o% :~P5_I$G[|}}P-&xnd8=o_qA2OVf53J+H~9Z~!2SAua@p8_)6tEx|<;]u>VfJ' );
define( 'NONCE_KEY',        '8m:n/)`&)WK.l~eps I()u3S3QPGFHuO*Oj Zc` ;l~P+/|4+KGb@ZK+O01:O.u~' );
define( 'AUTH_SALT',        'n=H~|pK}&uLJD&|lBVz,nJv[Lg99tD:sg8}4dZW(H!RdJd?ZWGGyem:brN E| $H' );
define( 'SECURE_AUTH_SALT', 'NZ$k3|j,:=rPu*|PVe[. ehg:_G,{]}Xd`BmSHCh7J6?_W)6*fr? <t%s=v{IF=o' );
define( 'LOGGED_IN_SALT',   'DI#S 4jQ)iXS</;+~M*|6{(A;@yvd(}or0hhi54&5Uzq?MBB!<a~%1},~`{^6bj ' );
define( 'NONCE_SALT',       'fTM[jNBzO@G<%f!Ue5-/]]LZ;qWi+-umr/lTRME:9.c3l:!S!(9DOmU -T6bHU.E' );

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
