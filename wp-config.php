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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task14' );

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
define( 'AUTH_KEY',         '35ryG)b6`;w]4fWCRM^akB@pC]4pZYE:-rwdt|Fi^rV#)M2Bb$=#3I){`xP4zPL?' );
define( 'SECURE_AUTH_KEY',  'Q%gQHvd#C><*[.$3 GHQd^uK|dZkZOFKT~[]j>H!Q~;jDg|h=~yuo6W?M8G5bop`' );
define( 'LOGGED_IN_KEY',    ',WNtiyA],!NvW,^B%?Kk38Zf1gT2{BL]~URHL4(O)~Z)UN<#.(`RNbScd]s9| ]T' );
define( 'NONCE_KEY',        '-wkG-q8=n.MD.o*z8RG#bJfXm}&12Ic=J_^Q.:&ODZ=wIr5kMd)J#Q@n(<2hhc/B' );
define( 'AUTH_SALT',        'P@3YE,AQ>O){$r49UWLqprQ_H`yi^tyZikysoLK6/,dYHx!w#jV^4[Vu*Ed`<gvD' );
define( 'SECURE_AUTH_SALT', 'ai* 3H+bf$ )c$g}^tWm<JQ*HxFbI<(V>7PO4s3~0Y_~0yYGi=p3CBw7Xj4iN4uI' );
define( 'LOGGED_IN_SALT',   '7ghbwkAIM;mkjJx>b^4_LVa1M<Wc_8eJ}9S}}!7VL*5`#YhF.Q/ab IF8)x3kKp ' );
define( 'NONCE_SALT',       'prK{6[k(|eLRNz%->E*Cb83m9[J?5RCq[_=)|HCXo9@PQY.O#66;U~eN~TD)t|xy' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
