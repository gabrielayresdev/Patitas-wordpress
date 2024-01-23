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
define( 'DB_NAME', 'ejcm' );

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
define( 'AUTH_KEY',         '0seNb5o(D{:o4X;R]~CWmB370A,Nrlbb<= :;eTuJYiP}bMpl~`yw7Q+t?5T;b1V' );
define( 'SECURE_AUTH_KEY',  'tli>jK+u=&TvnJ2`tRL^o:-@)2}[X;+_)$Hj-yijDj@v175BAe8*V~#hM2JIz8t1' );
define( 'LOGGED_IN_KEY',    'LT5=T2e1@~*n$~6xM}AW[gJo=i;qq3hYcm)w@@v`i|B*,H|l9cq?p9xc5/9Ybf(>' );
define( 'NONCE_KEY',        '8,Z!Ddzm, p#jm3}5p?]x&S)NGz@ TK*dgw9s/7znMRN7u[*)#<+~ uUOw+ W,#7' );
define( 'AUTH_SALT',        'kcrVkFaSN|+OY7A9)KI<){siaB2bZa$Q5FnW~6CrXJ{nv5Cq{J*L<|m*F/lG3/(Z' );
define( 'SECURE_AUTH_SALT', 'kQF,-8O^b50E_n=G)ASa|3IhGC|IJ)(,cY7nx;Hl7(@pf73|?-V*FcChfS%1M9nj' );
define( 'LOGGED_IN_SALT',   '6mOX5_@HUR~vi2u=37&v1PirYP`ZngP6QhsmN*+dWqm<N;4bV(7:K} Yos,U}DO#' );
define( 'NONCE_SALT',       'TVIKSJ:}rtBd5BK=AeK&kw$fk9,J<;9>SudwLUqW,: [G[;1eL=VVwRz3*.dVj/E' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ejcm_';

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
