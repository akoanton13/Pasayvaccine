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
define( 'DB_NAME', 'pasayvaccine' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'fF>i>tgrFM[KT{!l9Pf;O?bv.{|t@4y,YA3p1xat;JiS&1._I8cqA(2RRTIYh>!}' );
define( 'SECURE_AUTH_KEY',  'LUjU#w7]8yUx[u)t~S6Oe%|W.mh<__$Or/v!Vkl^vXydHF(V8Vi`Btix5c*2g0*A' );
define( 'LOGGED_IN_KEY',    'WfKJAn^r9npI?hI/MM1mpMfhcg=BO!l%W=ne|3,sB0O*w[M/W~=OPh 75]~oP^{d' );
define( 'NONCE_KEY',        '&V@AUcnBJ|Ki:O9>mjr=;hQftmo`sM]2@7Rr2kAhsiG0Xk<0>7{pHd(WA#mMs2Ar' );
define( 'AUTH_SALT',        '>}Q!P$hI/wo9O66>~r,cPGmWXE2jW&5.V$cik5de6GZPz)9o!0MM4BwFhsuIP0-y' );
define( 'SECURE_AUTH_SALT', '05gj%m#kyRPjbi8 [+t?<`Yhds^{3uhokKK]`py./4kn7*u)o?-BoYtC!8ztWgL%' );
define( 'LOGGED_IN_SALT',   'rN?-AFEIPoq.gEnIW7|[ZFzV5K5wY-SN @B7@*,^r&j&_CkB_)$ms$16q.efESg1' );
define( 'NONCE_SALT',       ';^d2ka$MnxiWy1tsO]tmeSuOC#p0>-K,~QvETFoi3b>T wk}j.d)f{A8l/HqN;I)' );

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
