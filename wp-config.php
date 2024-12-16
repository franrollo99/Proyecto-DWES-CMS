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
define( 'DB_NAME', 'noticias' );

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
define( 'AUTH_KEY',         'tLu[p<v&TE.r8(&$G(o5(m^s  (bylL12E8<ahla/sW.kKgtw/G=1FYs^wn!Fe*/' );
define( 'SECURE_AUTH_KEY',  '=&yo},0`W(hq8pb3=$U^`[5Vr6PxA>x(zs7YtUF.^6vSKJ5?|En-Owt1N#A~`_?M' );
define( 'LOGGED_IN_KEY',    '?9g+hU7eO.i|F|YQE&Aitq79-2%W[WMaNoX*]`KI>Eigk1~`t&-#;T1UXv_xQx|H' );
define( 'NONCE_KEY',        'Dqmy4!Zs4]{U{redEtnRc%k<DaSh@%pO}@#i11}<?OECTKnt<bO?JoP2>bSGjA^?' );
define( 'AUTH_SALT',        'q),v.6.f)4&Mv>Hn#xrVso[PDzZ4te6RPMDy&aHI.E/^EYchUWr.MM@SERow})7{' );
define( 'SECURE_AUTH_SALT', '8CJVp}J%Z35J.z%O{nkH)hx5tS2b;[WDw4YtKgb%~2}BJ@&).xB~tD>ai0S%:^=v' );
define( 'LOGGED_IN_SALT',   'ju@Y%!{u%7^vN.  50B.[+S8zO}kQdlHV##!/v:rF=03^xW,yBaU;<fXRSO$N>g*' );
define( 'NONCE_SALT',       '@. Cv53F4Z&$WYAX6(p;i^mOjbY4HOrS2w(546m&-z, jilAjI*y/oAE?8C?]5OH' );

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
