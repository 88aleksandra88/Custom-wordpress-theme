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
define( 'DB_NAME', 'wp-theme' );

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
define( 'AUTH_KEY',         '0G8j`kRwzJx->NC=.)jer`jrL.[$( 6) XAp8#yJKh@QV<H-BHi3u9fz|%b{j-ab' );
define( 'SECURE_AUTH_KEY',  'bYHXh@oF?*,1{S_%zPU8gegvz)2tj0dVPXYWQ@Wn2K=]fcw~a;F`=RuAr3M=JH!F' );
define( 'LOGGED_IN_KEY',    'e,E:mNMg{Zm@3^~!|>UAPdlq=lqG<Jt35@>nN>@9i:qv(MySBA{,HB.;]KvOZXBa' );
define( 'NONCE_KEY',        '3>FAa-bs)s4**EMI lsFB-V3:ox$CZJSMk`+/_E+gf@?A [.0Vi~2){rck@Ks<:.' );
define( 'AUTH_SALT',        'kV:[xG6w_(:yOKk*k*I:kH.|0H!^Fc/HfsJI7M}~ivl8`8:4fs>p52V3dK_M;4l ' );
define( 'SECURE_AUTH_SALT', 'Z=JP[.aklJww]StMmA},%hmb5MN}*Lq4 &NRyi3-$7}?e+T?MI5&|({BU!Wy<Q)-' );
define( 'LOGGED_IN_SALT',   'UFyz?hlLOs7Aj?oO 6spKlGEX5.aZ6D3^al9;H4%P?`raZF_4@Hzqj,tk[vJ=aFR' );
define( 'NONCE_SALT',       '{.t2c,#S~N]ISCe5<W}XGjk*;a/8p{RE*KTxUpfkeZ*)NkI%DG]-tri62> LELj7' );

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
