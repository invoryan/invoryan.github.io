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
define( 'DB_NAME', 'db_electronics' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'bryan' );

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
define( 'AUTH_KEY',         'D >vcBn%6/XE&Gbs[7yczWwyBu{M~4q7!w`IFi8Pbve}Zh,?Gke{mf<P,iKUf#s_' );
define( 'SECURE_AUTH_KEY',  'y,.RvjIy41f{b-hD=JFYek*OB[Y8s?8&l_qx.8&})K?o>IFX@Pm=b|tt9,oK~1t.' );
define( 'LOGGED_IN_KEY',    '3o*Q&O6m:QbjTcqS,g`+?pLqvgJjKWETep;w%n=.m|&WnY(9AJD!5Und5s73#*/I' );
define( 'NONCE_KEY',        'Eq]X!%!d!UcEcJz/$3K+v7]7Y4~fq3L{LBp#,#ipatjOVtf ?Gg(/vyF~3mJJR$@' );
define( 'AUTH_SALT',        '`UN:jWWSvwg#E7l(l(vNhySM] g]-1?lM^wqK**CTA <zoEUX4^cRpWbRii#x/2P' );
define( 'SECURE_AUTH_SALT', 'gcW%fTRAQHhZVO!?WrJP(cJx;VLG F)^R?uLC,{/LoA6{7V?g&+jrY`I(W){Oe*B' );
define( 'LOGGED_IN_SALT',   'R$Te3oZFsUh8[BuIl;^e7LBZ/ZCR>n^OgA7eJ_0T#Jdi?T[ s4!q4hU6k^%)1pNS' );
define( 'NONCE_SALT',       '?5n]BI7ATBy^_t{wE-x!@QlWU~2KyVgG+Y:v>K3dxS6,3[p0Gtv6@13c]Is47jvi' );

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
