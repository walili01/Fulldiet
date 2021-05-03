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
define( 'DB_NAME', 'fulldiet' );

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
define( 'AUTH_KEY',         '?n !Y3(gxaXU2PF<E5;6S,5Q]spdTV6H8nM` i!fs.K`Ki#E)@N^fH(ZLqrS4v4i' );
define( 'SECURE_AUTH_KEY',  ':+}z}S}I2e~*Tw(3.@lRl$^Lk3tSyw5Q]3d#%$%6P^/() W7KzyeQL8kzF^3~PN2' );
define( 'LOGGED_IN_KEY',    'Oi<7m,4cX_RO{ks$x!]X-pZ#^#*ePb2[M<Uw3zvkle7#bf*ZTc4<`N[@&UWE!`zV' );
define( 'NONCE_KEY',        '*7~Qb }*U+VCS*nn1!5};_[wPco$|0,}p*h03Uvo|rjD~<s9hBNZ/h ?9*m]:$MN' );
define( 'AUTH_SALT',        '7-vBwQY,Z*K3i%J]lz>6NPu@JdOQ6i=T=71`mvY*I&lxz=Via8?t3%>:$zNs -x6' );
define( 'SECURE_AUTH_SALT', 'ex:rQ9Z,=RILS$e~M}Zvz(F=CUE-2v_O^xH1- (Dy.vGF^CD9=FUs}{Ywu/X1[jk' );
define( 'LOGGED_IN_SALT',   'V^5.}a1UQwZ+&,Oi*v@1uO?QG]E2+#Es4f^:l],?hD}&@t}#>Qf[J*,1+;Vqm()=' );
define( 'NONCE_SALT',       '.Gp<CY::tV{&},kw6hw|b!w7R $i%n[=T3UirZ[e~M8kEx4r|C=gva?JIH!7z|u2' );

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
