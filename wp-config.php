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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kuku' );

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
define( 'AUTH_KEY',         '_K@Cu>SLTl+i((pX*1M~?kq?#FW=Fd0)Tvl&Z@VXvVhF>n=Q]N(iy^Jx1%gGZ:y=' );
define( 'SECURE_AUTH_KEY',  '.Yz%,5na2X=O9gyI7&v_UbLRV])evs6tq$;a3}*orMxVJ7$,~Dj(9&9d4rJ^Q< G' );
define( 'LOGGED_IN_KEY',    'fZq)3a;@ng:bo+`+[}|QGO9Q4o#P>V02RPg`y27MWBJj|[sCTWtQTS7MZx!&!@*H' );
define( 'NONCE_KEY',        '9%_,+q|~ySkw-`b|laYpc_|`?=*Z=^4~Bs dmz6O*!:L*hovY[U4K. e[mmPHH7a' );
define( 'AUTH_SALT',        'L@!e]UH[`27@9!t8)/IgDUoYrAd-8CH#0]o @ao_dScA3;rN8+u)wLZ)jI;JRr:Z' );
define( 'SECURE_AUTH_SALT', 'zzSea>8kQ6+){y@89^/O#}j ! B/h~y3- 4F{po^}i%bXk?MI>H}_r+<Tlk<aqh4' );
define( 'LOGGED_IN_SALT',   'rSP}Wgp~)Z8*,u>G;;i.SloFY{F[F,DWBIOK:K%nfnf47*tPpibzwy.v@JJ*#^|-' );
define( 'NONCE_SALT',       ')XpO,cRV;U%Lf>djNXI_c~IDJZkAl%i~=?P,YLhLe]FG(Laq&6%KyMovc~G:nRsV' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
