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
define( 'DB_NAME', 'buddhism' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Leela!234' );

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
define( 'AUTH_KEY',         '6T#=+[/w=`c#/Iz.l[g6uTn8GFq/,2nw? tvkm?:O3Tdc[B-Aeup-,l%=+e16kTS' );
define( 'SECURE_AUTH_KEY',  '?hAUa~`.=Ktg~ho#HSz}N:V_I;ozf]zq;.`EsO8gNn(.t1bcG;./y-l.8u:u-X>H' );
define( 'LOGGED_IN_KEY',    'g#LT6(iwXmmMF]fG}6oSJR&$nAR4]KbV5YZC7Nmy,~XUQMs%HF:w^98(Q(S2OjOG' );
define( 'NONCE_KEY',        'tEs,cS#~L g}{ZzBe]j^eg[D{dDskjN&u+(Yyd{Qr{-j1mpEYgIM2C@HtP4]+|1d' );
define( 'AUTH_SALT',        '}C1<nVGIxD6wlwTu(1tT>N(|w:w@h4aJwPs@*/]01l<vJXFd-7xaw7nV-n1r(SE;' );
define( 'SECURE_AUTH_SALT', 'Piq_~#.&{$p2],ME8[jJ7of/x&gR`NzMaqDy3$)Iwe}J!3Ll#lu:~n`uX^8Sv]qj' );
define( 'LOGGED_IN_SALT',   'EQe`d5CUV-RI<k7B@cj!17qG&cO>3.?~b{*-<7DqNW K{:(r(3dmw<t$+I8O|e3^' );
define( 'NONCE_SALT',       '1+broS9h[;IU0fc&5R(3U[yLumjbaB];9K@*#0^:n{{NXBtc>yvQ^H b4.i4r183' );

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
