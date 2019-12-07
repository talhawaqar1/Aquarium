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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         'Jo*PXRP4F[`XOu~=ACG:Hnx@)s^]rI!fs:y,as[.;KK3gV!8%Zaf<C`zCevy?WL8' );
define( 'SECURE_AUTH_KEY',  '9qUE8owsI|8_q%;`[Ud@[s;)F0=Sxn^fk^,G|D#khCWX!(9LMfA:/m_B_c&=ioE>' );
define( 'LOGGED_IN_KEY',    't:l=tTEI*/_+ZF9+%/YaW `}g84g1koqNfBQz,?Ym7bovVc0i{ kY/#;520g3&xm' );
define( 'NONCE_KEY',        ']kT9ljk&~2%7FNyd:+_7h,C&E<V`9fR71U8o.u_NV3wi2A86R]A0vXT5KXW/8Ok_' );
define( 'AUTH_SALT',        '[G4Cyn0=4dHxe{0lCs5L:?!ptA 1t7Wv5`9E4-eg92OlnspINvIzc!T&w,VG0u:Z' );
define( 'SECURE_AUTH_SALT', '@W=-wR.#*UyE-%Z_F2eS.rMNF-WDTodpn&_X,_@|$i{9Dc64aR~x~&;xiKfVaGA,' );
define( 'LOGGED_IN_SALT',   'Cy=0(jOh5]LP2hC$wx+*~M+}9DUEl>G9+M0Wj&#0-4mY2^6ammx :$`^98S$>;vO' );
define( 'NONCE_SALT',       '?lOZ%$Q;;e#~^T%j(AeV%wDCJ_/DaFi=])7;Me8PUMn>oL7NS:;jC+z,V&YyTVD1' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
