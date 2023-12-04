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
define( 'DB_NAME', 'positiwise' );

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
define( 'AUTH_KEY',         'YrSewP6xm B(p.[}&Ov23rZTX:IKXYESZ**{eL091-AOGP(OI0~/_QZU=zMTaI`+' );
define( 'SECURE_AUTH_KEY',  'AW:GOQk*|pIm;Nh!6aHfO>I5 r7GG&$9Xw{9j%`$ Hc?LAfaqr1ikb2Y0xU;:0PQ' );
define( 'LOGGED_IN_KEY',    'b?,US}$)/|aJ.Z=bur+wTh)J!6;7udG$PD]ti:rv-^thNw-$.D@s!9q*+6aHL[$!' );
define( 'NONCE_KEY',        '2%u-vA8kj,vJXxL5da<#l,VDF;7lb9Y{$O5OA^G)FFs>Ypb|0uRK3^*9J2Z8K}!f' );
define( 'AUTH_SALT',        '`o0oPQDn)jmHSH!>`CN)5_YZihmfQM*G}uxBTrZF+R|VmHaA] Y_.Z<8O#^?./?s' );
define( 'SECURE_AUTH_SALT', '0*D`Ib*]Oy-2As5`*yP`)Edgv?JbM=`DaF(#p{y=]ln0Kl&fUg/:!Npg0pZN#/*L' );
define( 'LOGGED_IN_SALT',   'Y75w:t]?1P=@N+TE/EpN(C2b8^!=YvAmWoUF4>:si<^0`}*L5N~VAA4^z<mP5*7Q' );
define( 'NONCE_SALT',       '}hmVqz:|JnRtJT/XP`@4?3yJ6>KuCiT/>.CR>4;2Xa%D9O~I+cp0=B:^O=]deQp9' );

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
