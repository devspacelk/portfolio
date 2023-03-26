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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'n6_-j>8W<<*&A0d$y~cQlI^:?SY8q<u)k<XI,{(o.bT%g4.{CEEc`Mg4+_j47/G7' );
define( 'SECURE_AUTH_KEY',  'Ki6dCk+I{jIE-(e5HH4,#Rb$%o!gxN=uLkL6GSw?56Yimx&MF:6Bn?Q4[fs~M%m2' );
define( 'LOGGED_IN_KEY',    'ZZx5+d?m]:*|V Ny<E!ETLws`6%/m(ow?u2)|&<YY/v*W+P=op?s}afg`Q;M_aqI' );
define( 'NONCE_KEY',        'Hu:C0eV$Aj-npSqWKgDno$Jm]ov,ffdf`^?o!@2]$]/?xv,tGQ_7x<Y29Klrfh]h' );
define( 'AUTH_SALT',        'eAyfz~nyG&<&TGIaB6by&NSY@AY9%&BTyC(3A$yEQ/BAe-C#@jBSO{lBE@KU!I+K' );
define( 'SECURE_AUTH_SALT', '@LW5TMmp:k=az)~sB#t:~4BENiwpfD!;f=&$EHvd&KQOh;DJN>X_B$^87lOU]#^n' );
define( 'LOGGED_IN_SALT',   'nwr8lrR o>F%/}gNq@#roCb.uTxS6:z.HXI)++NBoT1dhvW)+MnFCs&7KGgu0MY{' );
define( 'NONCE_SALT',       '2YNiBT< owPs7th*8*<sCc_h;Il5T5)0IuTyJC4A])hn0,x_3?jSf~&xZM)X,Eg8' );

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
