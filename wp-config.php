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
define( 'AUTH_KEY',          '}W]`u#a(NTF&99x(tpzZn-JioN :A2*0Q%&R4k$QBh}m]7V#g<$NHPaS}q20T18,' );
define( 'SECURE_AUTH_KEY',   '^~hm1*tqz+;^Rs^9_#5qB{=,, qvo-&f;#zW,}3nsmooPb<nxy0YB<~EjMQ25{mp' );
define( 'LOGGED_IN_KEY',     'rI?SN`<=kJL4hhzoh96!JplD<RxQ%.Kteu9uJ^B=*L[9.C{g-v6T%]Qlm^eV:=q$' );
define( 'NONCE_KEY',         'zLnkA*@v>lp|T^FJ8@@G;-CkS;BHNKQo7!>|T32,$bkV@IMJohwQ}-<dH|#q07YT' );
define( 'AUTH_SALT',         'fe-LY^ewPGAe2e~j_%h0!9-,cr2R]`OX}TLS#YkI!ZqoFw|9h. 7qKoxSV2Q~|2Z' );
define( 'SECURE_AUTH_SALT',  '!ybSH-?fbGYKZGC@(a}Dv@%)E5*jrJ=#WY8)D48)pl.*{g8^R,RIpk!Z+)>D-zYO' );
define( 'LOGGED_IN_SALT',    'VI2}yl(>&LD<&ZC$}ZHC|OWw`eXx8|A<tTDua5{bRqI=viffX`utBukSg}5@_0P5' );
define( 'NONCE_SALT',        'fk^s_:i?wSBX5omQwkpk$V:$XCz<Ay>Qf$RjNPyRT$U,7p)%SH6>E&S([k|:DhaN' );
define( 'WP_CACHE_KEY_SALT', 'I7SUoL2skNb kIM!T[q{7*xpL4K>Hr7,$Yd5A94QD2.?f,H|Gs*)+?(OfVD:DuyH' );


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
