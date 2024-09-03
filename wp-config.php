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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'l(`,2W+wf.v/9zM[)hi`_K]G:a2jngK6?hN9|aZ1oC6f=:o)3xE>)S0yUD8-( tq' );
define( 'SECURE_AUTH_KEY',   'y~|:y5)Fy@q>+~wO.}/c4wjB|+a)72faHbC@P*=nQUA*/MO*85Az:;ic&`OPGv%c' );
define( 'LOGGED_IN_KEY',     ':NJSr2c.;iGO&N8chf(Afo&s,smG*2{R0o12rJb,1Jij9E2j;(phfe7k+&Bgk(~`' );
define( 'NONCE_KEY',         'F+K2m}kZ5:J9u4jy4/@z!-,)^{gY+4 /;IeXu[|HKS*t[zX_ _eo1s%%&A`rB3@o' );
define( 'AUTH_SALT',         '!V8!c&oUTDztcsm-h4Tu?V 5SfDM[ CoUk&e+XvnF>{`QZZC;asT~]iD.~+`;OB|' );
define( 'SECURE_AUTH_SALT',  '6w#OMZzU9U`BX&PTsl^X#4]<5r~!ecm4|S}=*JwVrkX=2tyW9H`S]H~gJX8oRdyp' );
define( 'LOGGED_IN_SALT',    '^@B&~{|aI;eLOT#AOlG4$;%QWe1d4M)cNa)o9weAa$Eb>~0ixQ`g2IW;/bnKv&GE' );
define( 'NONCE_SALT',        '7(^VYuN%pZ.{Qv?jf6cS-F xtGsWUD%Z.5%>0q{z:VKq8;JL`iCX;Hx5aW=]E`N-' );
define( 'WP_CACHE_KEY_SALT', 'Wlm3]HR!<}i[0:ZP%D0+E{y@Ksk>_ie;yK(D{Hw1GlxIIEPmKeq0Gz<E{ZPL{lP:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
