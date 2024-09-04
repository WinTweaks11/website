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
define( 'DB_NAME', 'Test' );

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
define( 'AUTH_KEY',         ':U$+p>sY$f%=ArR}4a^ChU)pUZ9d}.W(!wMP^E)@9sM$EFDE)S:B*$n*6:BGg~6e' );
define( 'SECURE_AUTH_KEY',  '9/[{;=hq2AHe&uuNs;MiQbTaam,9Ub3TTHJ<2,AMj66x+O/,V[-7|zsx<~AGzcQ7' );
define( 'LOGGED_IN_KEY',    'gqJ30@%cF=bHoj(ISe}{S1nf^cn(_IRa)[+a*Bwmr5gKrG9_x6GfIPZUfer9k1_P' );
define( 'NONCE_KEY',        '~:3LMGZE%(keA*VQ@VdD*iCUqNt4#4h]V;PoNjCX?:5dXk`RKT}>ca|= ~)?]Uwg' );
define( 'AUTH_SALT',        '6R/8YG|4PtO;<I]qS<Bg$898[=~7Lns>X3Q`~E$l4.j7,o[ItmI=@,,UZE*f)1/v' );
define( 'SECURE_AUTH_SALT', '?JOhn*C3`|_$Fu,z<Hk3]4b~ulIjXSLtqu%,E|le&a)K_UXE-q4L7<sC2}IQG 4_' );
define( 'LOGGED_IN_SALT',   'Bz&zXkRObIql]Annj-$b:2=pD_0EZ:Tw(X2%*J`dWby~~O6sB6fK(NdtM-6Y]DXh' );
define( 'NONCE_SALT',       'VmK8z5,G]OSCyn*Y`?5~Gtr# d8Unj|Z0xzi2Ey>4@`i@Cs!gI]I[lHLJFpME6%C' );

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
