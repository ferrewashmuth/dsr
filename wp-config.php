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
define( 'DB_NAME', 'abca' );

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
define( 'AUTH_KEY',         'smNT~@$iJIL}iic7hD-U/1#DVcPM(LsB Mp=Mgs=TuJd-yym&_d7TuOA`TcivjG!' );
define( 'SECURE_AUTH_KEY',  'o >P/7X_iW,||p_-8oA[~0/P0Jo&S(KFqoLCpLtQAQ!RWaQ!,&JJJb4Av:2LPkMk' );
define( 'LOGGED_IN_KEY',    'U?-4]<)8Ki7{mUA].1,>6dsX~u]VrNhvB]3J4jZA7wh74Wq=@v|@2u%ZPI{}f[X<' );
define( 'NONCE_KEY',        'J?/3/igCT9s58MC<,6)Wb<B;[$&0rafR#8tYh5~D@:Y9++WzOV81tps}Njp@8Ro<' );
define( 'AUTH_SALT',        '/12.`(wygs??nk/DC)X+u,U^q]?jeWMUAVA&O9vt3N655{n$J}f`r@y+^39zmF+L' );
define( 'SECURE_AUTH_SALT', '|@plq#e0^MewUSs~yU*snTvTlX774{D^]x+$hMSd;^?%>KR~-=UkIr1Um|MA~K}%' );
define( 'LOGGED_IN_SALT',   ')vM-r]=F+c60rn8Gkb?=vS$-j,Hc3^H|fyl*0#^3z-v66o{=Us/+3]%)4FCrQpAv' );
define( 'NONCE_SALT',       'B(;.`EY<6<Pw lfLurNTPGC7%V&6M*@2HH#p%D2dF~unV*aZ$8wdZ#E+T m(?V+T' );

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
