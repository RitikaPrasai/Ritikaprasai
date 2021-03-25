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
define( 'DB_NAME', 'ritika prasai_db' );

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
define( 'AUTH_KEY',         'j&P;w&6(Iufo;nK*WA+m4&rh!u+P!8KpTEQ[}&0NW=4_8-*bcio0_>tigdYY`y?d' );
define( 'SECURE_AUTH_KEY',  'Jn9)nv[0oXIP2hJ$>9:#WH&l=~T[+yNy9F,xbw9 jTpp%Tx$utWA]TsYv!DjpEqc' );
define( 'LOGGED_IN_KEY',    'pfe]QaX@~^7BG$Q}=at;=iADQjFYd>ZFVFA*H*Ib<#_r&VR<?7iB<t%>Z&)se.m9' );
define( 'NONCE_KEY',        'N$ldSq%[-##{,u|,[w|TQ709)SS;`1ZSCxGgK2v$I7>+rs.GjEKs_Amuqv|+uLa@' );
define( 'AUTH_SALT',        'zN>Y4oCFiY:+QN]dJJNke`~]PGg&`50!x(Q{qMuuw1`yb~#[fEGmf:MpMd0.M|sl' );
define( 'SECURE_AUTH_SALT', 'm[X^l{Bz]C]%>Qj<&9mx&r07he/GF;$i?6e>,/6j[RkfwNV}QAGb`% L9|U:T_(S' );
define( 'LOGGED_IN_SALT',   'Tygqm?yL8 AujNqB?UR-a#wcH5D]>{1SB6Mm5F%yY2}q.[q@]jD(LT30hb^e1`i?' );
define( 'NONCE_SALT',       'V(f8njjy58U#KLxQ]d[=evN:3`A#$@9F[M]i9-#5Oi2nL>j~]ThRq!2dIO`g.ux5' );

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
