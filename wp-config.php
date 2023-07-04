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
define( 'DB_NAME', 'portali' );

/** Database username */
define( 'DB_USER', 'portali' );

/** Database password */
define( 'DB_PASSWORD', 'portali' );

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
define( 'AUTH_KEY',         '~v!^2 #DxI/,};{FBR`(DqDEUs<8dEF?~/P-5{uUjusoJX4`[w7`c.FjGItWJ#7>' );
define( 'SECURE_AUTH_KEY',  '_Mu,$8aW~o?~gG[J3Mw@HoSCp=^cAPzXI}cB 3w).u!bj4nOgzTD77-w`,t,SV#9' );
define( 'LOGGED_IN_KEY',    ':SYWZ8N3?F?!viyi(!v=;yU/Z^%2,6V7?A}SbeHMcJ_~1jwJ</^pR:?M[R|r+{3L' );
define( 'NONCE_KEY',        'MN?6><n/YU:#=5*EjPy}DMGEUmAY.{%CthU(x~6--^1ib=9#]dt[oEIA BTk+85m' );
define( 'AUTH_SALT',        'BI[ND/]MrPj%c`LGUZ-:&x;xJRPXkK}XH}*m^{G%1?S5=tGYP?c~#<&em,v@Wq%_' );
define( 'SECURE_AUTH_SALT', '<SUM9J<]8S-F*tvXU7m{`wy4+Pr43<j^oT)F@R<UFg1SXV2x,H;8gjK:sw6]i^}%' );
define( 'LOGGED_IN_SALT',   '~VVR21dk?G_#5)X+lbNJ=]g 6L{8BS4@O<X|`m3xtv!G-D&Vz3j?7%lfSX4W;:Ba' );
define( 'NONCE_SALT',       'mOF}+/:-/!mFG0r{kY{YI#(2LQ}2*0RSkvnD{id8F4z.{q}H!43iJ /u)@RT)saq' );

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
