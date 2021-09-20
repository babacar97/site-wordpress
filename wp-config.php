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
define( 'DB_NAME', 'carantech' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '9,77@&KslWl=vDfkQ39Dx1.4zFF2trd)kBnQrL|4m|E<A>w=%P2oQ(Z6`U(iBGHI' );
define( 'SECURE_AUTH_KEY',  'G(Q2o9h<Q)P]|*aX}lA3[,G3B7uhM6}Pkh=!RXWoh[39c/No7gT]516Gv0<DS{UM' );
define( 'LOGGED_IN_KEY',    '5C5s>88Ef.J0t?1c/oja`R|fxl%s4yZwOE}Q`S`Rx738F_y9t`c-Ehxe$^+dS6*d' );
define( 'NONCE_KEY',        'V_d?7/dYx% >7+b~:+8mLm#5XI1O+R<t>K.f:M2O):?|k?~`5#*x^:o;%OnBI28n' );
define( 'AUTH_SALT',        '<vBSwyf~BoHa7t{Rt@QN@J3k?K[mWFM{Vs4B`(1[TBEEEoKEq;/:um6eY~:~573@' );
define( 'SECURE_AUTH_SALT', 'hibh-I{I`l|tTMs3zq3KMaM$^y;AI=`c4`)|ld(UG$J{1gU%<viuO*ZsWh<7gSb;' );
define( 'LOGGED_IN_SALT',   '>#tI*IVjNXs/}uv]KH4d%NgCNy-}4RHq5u0uJg/9_;.fU,;c4is>C]{7hT^C}Cq(' );
define( 'NONCE_SALT',       '890g UFyGue2t Ux?:Qa2?(w4QDu9Zv9cf7YUSF)|tpjQW($i-f/BG1_^NaYK J2' );

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
