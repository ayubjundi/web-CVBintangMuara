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
define( 'DB_NAME', 'bintangmuara' );

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
define( 'AUTH_KEY',         'BZWy4g7IIpGSa<zxvi~UG}N|`G+r/g$[S#^(5cf_`9JrK_a]&@(E+VcvpMIE3(B9' );
define( 'SECURE_AUTH_KEY',  'SX+krgvC((@i2wI+IT^Mf6z+Y`F.`#Oc,UU+0hiv}^2!E.B}#VAP(,A1cy@qZRrB' );
define( 'LOGGED_IN_KEY',    'Sl&Cm~S71|rv{reBBVUQDZk^(^r_6!=V#lK%8Dt}POoDl:QmVR])q18*^F&zI;VH' );
define( 'NONCE_KEY',        'uMx(Hqf..x94wgk;xQOH[O@Pfb?>YApia2%M=J2x8^bqC4A?|gjzmsH<SskH}y<p' );
define( 'AUTH_SALT',        's{sKt`A3|8;Jzt2v~x_](y1$[{IBO,.jV>QcD:v#L,3Er g,f9!6),Cz7v]2nbF6' );
define( 'SECURE_AUTH_SALT', '50{#raIR,qI0iG>u0e^d MZ!e^f0owDgTNDL8g! A{Rm1pi*P^WhAN{a}fhMeaZ;' );
define( 'LOGGED_IN_SALT',   'dWuHnf`rLb5h44G-lrjQ2DCvgZ.sne$s#R{W8KUkx!]V?EjP{J:c>~FEi./Q0>dE' );
define( 'NONCE_SALT',       '&>5mi$L)*Dj}T3L|yr9,hL%_,*7vMw#yB33ur/l#l<G]_B(QgYcflxoM+jHb.@U&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bm_';

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
