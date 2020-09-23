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
define( 'DB_NAME', 'bbdefense' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-T)/ei5<gIk2jWL[lHiv`C&StToK=sR%zI[qni;?[F%!D$^JDdLGnqvOARDS*c:^' );
define( 'SECURE_AUTH_KEY',  'fN@TT!0+l[X/vDOYYgda>^l}$oDE1KD$97o8i(L)}l:=<n!o9JtL-]pTz=h/Fq$m' );
define( 'LOGGED_IN_KEY',    'C~`*(h=:`oC|3r^CX?N]W]R*;B,XuoZ+EZ`GkNcSS$&gyiq^4_!u}+y:-JhD+Npj' );
define( 'NONCE_KEY',        '><M&lPxK% 4dt!#7Oju$-PrX}4w6R&Y^1xK86xD-57*IW]6/*g(ebcW1V({{~#i%' );
define( 'AUTH_SALT',        'kK)tVkI>A@BcEL*Y.3b9JZc[`o`:(+9$#@Gmpeo.a5U&kIqvTwF6Cgq0#SR7hdOw' );
define( 'SECURE_AUTH_SALT', 'ct,1q|nZxiq.h2^1ytyp3f[:OH1]e&U1)?r5q4Gn|Qr?{/k?:Zl^|G2eD~<K]fOH' );
define( 'LOGGED_IN_SALT',   '<d7#E.;Ah.~}Js77H+H@^*=n F.c+V-&!|eb79F:]OY `-TWz)(.qL&!Y=@ep5_~' );
define( 'NONCE_SALT',       '7@%c9XKwTyu[3r+tVdm~})En;,fqo&<gGt7JR!IPf`)@OKos)_!:v8(2l3>,XcG=' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
