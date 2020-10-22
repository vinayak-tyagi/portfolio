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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3325' );

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
define( 'AUTH_KEY',         '/9(ciO{WUKiJi0ZlXU}eedOIBIu37Ba[2P:HE;9S>2^h/s;vd03uoP7>qkV<D7]u' );
define( 'SECURE_AUTH_KEY',  '(W-A,@qW8Otd-=(vQUVngx!wa.aFaHISeN(z;1z0>OwnXjLFDsg~5Hb>l7M_(j0a' );
define( 'LOGGED_IN_KEY',    '*J^%ejz:q1*k7:}wde ]ST3^tAA?HlM:$Fx_2Qp%Kmbj$w:dOkPzeG-AP<H@r.<Q' );
define( 'NONCE_KEY',        '}WN+C0Oc#^T^+!2FI>wqH=?T$h7NA%|-h(EIJ6E1TK IU}@&tnC/U>#vUsr6uDQ4' );
define( 'AUTH_SALT',        'CR<9XkV`Hl8QjhT]u((bmlO$hHN[]<+a+{+W^!LV])1h5U0#s9JoGmk^[6{J=MAB' );
define( 'SECURE_AUTH_SALT', ' mLdbX# Am734K.S/ 2v.r(F!5[#fYHJx9murVlrR>omZhgRvAH?xZRpPpONDO!U' );
define( 'LOGGED_IN_SALT',   'kX~1ILaf029B~{lGX(gC!l,w87/&;<yt|>`r=w[wGQYJaOrPt2cVWx9+HsNLK0a9' );
define( 'NONCE_SALT',       '_]PLDQUzj75}:1q3r[.1AD&ozEY%5J|wJ|KFJg}Cx{Xb7SeN;TwhZJK|)ECq!9]H' );

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
