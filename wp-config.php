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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'server.123' );

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
define( 'AUTH_KEY',         'NT4|<^%7Pb/h_}.]o)SDkHWt.^rpVoo[{@Fl;zzY0sLe65_>0V ?$siu#x~tJc*g' );
define( 'SECURE_AUTH_KEY',  'NyCv.6Zb8[PPy#d Ll8>*3(_*mKd@sR!|C{<0=v:1j8D-<lC9%Vkn!u:p*-*aIn?' );
define( 'LOGGED_IN_KEY',    '}*k.vJ^YUzq5m2VboTWGpxflnT1;^Fn 8?d84@,/i(PK].jM!<<Xi9S56ZGhPb$V' );
define( 'NONCE_KEY',        'y?0PuyUf{S.cGJ6;`|w]hQ2mQL&sU_3NPZC>m,mCK 2Ma7L@btMmTkQsbnK>2:la' );
define( 'AUTH_SALT',        'na;!)ny7m5ub*#zYm#7-_6I)<k=-e50-Zk(cI&AWEA%$%)=aH9T6hvgKh4ukxPAY' );
define( 'SECURE_AUTH_SALT', 'EIk%y?C%;0Q>){zx:g7u{RA#$L/b*tepSt~A@c|3M3)>a-W4*`M<.SvtCC;sO]>h' );
define( 'LOGGED_IN_SALT',   'H>hx/Bc4&/5{{f?7FD6DYh6 8.Xs43sRW^kI5jk2C^H*y  vHQ@[K249ZE_nft{p' );
define( 'NONCE_SALT',       '>]=]hF#.Gb3al`]qN}}Jv>[E&TOX5>s ].d^QbeDh(}# 3!wIh_Mmf]lVW:bz6#|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
