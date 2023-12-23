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
define( 'DB_NAME', 'nd_db' );

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
define( 'AUTH_KEY',         'GeIr|s;Z{$f}1k/GO&ObiKKnuIFKj%O*-`m.%R_@7?(~r=mB&_`hL+CY{:#4A#;B' );
define( 'SECURE_AUTH_KEY',  '1c!`xF5S2}Rc4ISTGqK+RIF*ad D1_Po+:~y5Mj4e|= sQvkCwS!NHy1Wl~hZl0#' );
define( 'LOGGED_IN_KEY',    'Ump`jdxY6=]&D]Gw3qfy!hOS3Zw5qJ)<=9YoEt?LM{Gr^g50>8|[f53Genr70c;h' );
define( 'NONCE_KEY',        'T[zp:_rUd/>/U.z.:g,~QHMn4}JYzaV8lHimI#CSBB22#?c`t1#9,I/r@l~KT_q=' );
define( 'AUTH_SALT',        '%S4{ Zi*A$QdS@(D]OwM#B%r<Pk`Ec@Te7W<.gC[bV]1`C;Z?cg Z~$*mR5mq+Dp' );
define( 'SECURE_AUTH_SALT', 'VWOTWih1q! m =O/du[sR$3Rg O3fb`X5wk~w@Dmg&fnC=@nuVw1=iz$1rY:TjD ' );
define( 'LOGGED_IN_SALT',   'z$[xNr>24uA:}G/H`!GNz~@To:7zoC8(^F8po2HpM+t}oLI}MGCNd9pOh44*}1&,' );
define( 'NONCE_SALT',       'G6u/`p&}Vt+j|+@Rqx!7BzI:ajD];Ynt.)/rVIdps*(SrUs<5ow yC@]0F>sJS6;' );

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
