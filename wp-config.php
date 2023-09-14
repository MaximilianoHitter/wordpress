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
define( 'DB_NAME', 'ehwaz-wp' );

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
define( 'AUTH_KEY',         ',Ui@YgDQcmsE4v4{jL2$o.NygY{@ @5c2//6gh1gMIPLI^ozZ6!1hoU5cXP<>|ac' );
define( 'SECURE_AUTH_KEY',  'i]@pDJtJovWi4_YeDGNs*B>ep5YI>~jq!HbfZtsy|YoS=s3N`<#$l[2K?mX=9nS;' );
define( 'LOGGED_IN_KEY',    'sI:?DHxGd[* Qs0}Q}rCh=iE`*qy_Neq+0p]#-.RNHNrt3^Or?)*Oz>#E+(jpN>E' );
define( 'NONCE_KEY',        'L<8Rsh|OTGX|@_4O!D+K|[5hwQ;I #4U]t1(,41<_TP6uOTSU)j$wd1e C:c9<#2' );
define( 'AUTH_SALT',        'HOn5/-RK`nZ`oCpG9FADP_XO:l.;n584SXN!L#x]~<%V9/sglTky^,6-xCG0`4ZV' );
define( 'SECURE_AUTH_SALT', 'h4&|<5r!!m.:77kbQA(k[;R1G2ACF7$KIo<~P[L^A8@^,A[~Jk@vQi=.1J;a4{Og' );
define( 'LOGGED_IN_SALT',   '*6,<su#T(w{$:hfp=A6xDWyXkUR_7V^4Vw0x7X4t,k@M%v)eS4u^qLoqrPc04o.H' );
define( 'NONCE_SALT',       '(X$g#:,8NJs10RUq9d?Id_:rj7AZb+Yr{Gr7esM ~xGDKa_llE_g)!&e6 [cFG[N' );

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
