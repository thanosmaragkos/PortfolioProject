<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'thanos' );

/** Database password */
define( 'DB_PASSWORD', 'Thanoman7.' );

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
define( 'AUTH_KEY',         ' {W+5/|[g39%M3auhc4PR9@V5TIvA<d_O<6?Oqjj(~[zw(DhSH-U&C YS.R&~j&2' );
define( 'SECURE_AUTH_KEY',  'N?}p_sGehMYdsIt!at?^l!i$Nn}YHOsSjFN:<}v%h9g]Gzs*K][cx|:I>1RQYOZD' );
define( 'LOGGED_IN_KEY',    '9*OC~*<qw(xXO3lGC/yr/|ijS)hu +h&s~-qVu$2fL*f4T^E|A[RW$[+pFa9v>ow' );
define( 'NONCE_KEY',        '=Y/5E6~,jWwiqRg]p?lCK|$3o@nQ3)Wjw/94T);JP,oiwZ!`iY><t{[Xo=k):HtJ' );
define( 'AUTH_SALT',        'm<w}DM&+20-SO9M9jz<ha%K.E{o}^^;x%3Xdk4yZ`c_[oN6<H36!q4G_p*#Ny%**' );
define( 'SECURE_AUTH_SALT', 'B:pAHR]6MsnoRK>3ZF^M=*EPNuJb56>udw7|z;wX|gLG(bUaB}&[hY3qi)}9@@}h' );
define( 'LOGGED_IN_SALT',   'v%|X4XVx||X4V]p !4aTq*<G;[9&sme0>4w^wjEHW_Q$myr[,NQ/1[0W[__9B;UO' );
define( 'NONCE_SALT',       'Lra{f0r~6Y%T9>GH&H$9pzdX;tEwOcHH}ryS_= bZ9B$N.-+)hSg!plx;4eZ%Anr' );

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
