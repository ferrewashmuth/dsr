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
define( 'DB_NAME', 'dsrzbit' );

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
define( 'AUTH_KEY',         'G{#sBK}1yP6t)9^,bv8+|X{@~N-:I)]79GdlFeiCeQ~z*>m)9yR~ifsy?$:sK@r8' );
define( 'SECURE_AUTH_KEY',  '{CY!rmJtV@18MBAu@4Y|Kxf1.4fTtDz$L7c;0U9[$;2]%<BzD;hFROFQ3(]4w}+x' );
define( 'LOGGED_IN_KEY',    '64)iJeTO7T,U eC(B83cQV>@Khl/n&zsgG$<%,3@VxKe/TL0&O&)f|4g$mdwv&y=' );
define( 'NONCE_KEY',        '&X}fpC|cR#-$=?S/oY5KcJQJ^kH[j(:[@FGLB$YmKXg;gd-f-tz+@pIx[kjy9q_6' );
define( 'AUTH_SALT',        '%P2U)4Sl~C$i-iT:W?XI+:D)A/w~l(=Dtb2L+iTq|c3!#7sM<f2|boAU0i]FE/G*' );
define( 'SECURE_AUTH_SALT', 'R yJ;Q~HT_e?&zK$2Ih(#!z&L({#1)z+y9f*#GVamz:B]8}N*pT[!7VT{%=%$6P6' );
define( 'LOGGED_IN_SALT',   'QWC-DpqrGo1!S4c[^o~k?6I@ngQ~2)_85dj`wtoXu#g2Su5Q~+0yHJdi0K:!3U0m' );
define( 'NONCE_SALT',       '?^=SI+d-5K)Z75XAmhaqw<&^r>s9rj%=h@gJJT5Kx@XqR$M];?Q;^}fOZmg3 ^ff' );

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
