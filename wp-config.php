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
define( 'DB_NAME', 'sistema2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '}C-c?$QYY(mgoF?`1m1,g_eoP#opARwJGcKAdt)]nqz)12:_DZTk0q@<{vW&&=(/' );
define( 'SECURE_AUTH_KEY',  '9MA,wJ.@3l%$1P1cT}uXpfcpZaM2OI`a):.SOQF|&hsBKs0&t7NY6C[8vdCaaEq`' );
define( 'LOGGED_IN_KEY',    '6^{R.eN)P:r/sQqL$T2N/Q}(T8k:MXL}c-tF;ce?$6z nVJ$Q9tu;9rqZW@K0op6' );
define( 'NONCE_KEY',        'f`Pc]emtPth)N7|G-8m,e[k/x+*OS@9g~%yotd[x)Fi>jB_1-?-A)U8#B>1|gN>>' );
define( 'AUTH_SALT',        'NM<T]1r,:*^$&^hg@cgN,k,30*{*bM@e2tzXAq`ZSp)C@QgBfT?M) rEL4T$tv~W' );
define( 'SECURE_AUTH_SALT', '*ZC0C<4cE3nv$r/!<N+EJFL5<-lpd?`uR&klGtPE}i0l=*MKmsF9E)y#5qBdSJIL' );
define( 'LOGGED_IN_SALT',   ':C`lyYb6##+F%*(_hn{&W+dh9MgqNw7*:z3B*XeySO|NAn95!(TFGKCuX[cSGXS.' );
define( 'NONCE_SALT',       '`.jdCw9 ~i{Nbod,vR*{.!D]NjX<a.FjhZSk#;,==$GOT*o7%4AjPh#!@+j>3?=&' );

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
