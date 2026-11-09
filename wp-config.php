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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_literasi_udin' );

/** Database username */
define( 'DB_USER', 'wp_userK' );

/** Database password */
define( 'DB_PASSWORD', 'assalamualaikum' );

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
define( 'AUTH_KEY',         'ml4ufA!2w<rXWAH&|wpkeGD)<1~4jMa942Xq3Q2R;>4Tnc}_?5h?<xPfe.5H=LaJ' );
define( 'SECURE_AUTH_KEY',  'I;V6F#[K/^5`C-Y|2 _8|1*`&3~b0kwHFtKIYYgZK+Y5LV?Yt.-R5N^%JLd.]x[/' );
define( 'LOGGED_IN_KEY',    'LSj}wI~b5S9$rWp7YO:93t$2XQdH9AWDtl*M!4zem:?g[1WP*=-F`K+kB&ArdzG&' );
define( 'NONCE_KEY',        'rMZ*GBIR@@DF+oL|(M{wyiti?sWixc%F<NChH&D*BOX0J}l>|C$O#Tv>6vG3)R=n' );
define( 'AUTH_SALT',        '@(,brlL1pQmYL{+Uj_owfrQZ}]j=d1/ j$7K!rN08G8Dv0;a!Aed7uVb;hS:j%&R' );
define( 'SECURE_AUTH_SALT', 'M#MD=kvSnV7vuQB}caUq(6|reANWM-1<<EX5&Nv.!3[N7HBV2)}]@@KDFU67fQxH' );
define( 'LOGGED_IN_SALT',   '[!du-t1z[vV~.4z02pHYU0P>-/A+~x2mzfsBD*[;l|~bS2y l8&VL{>V*8;@6rK)' );
define( 'NONCE_SALT',       'V}]2655C9=j5]k+ s{jnh0vm!44jBpf%AQR Wezhc4o| i7a$.{=5BRX?I|q^AyQ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
