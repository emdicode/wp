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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         ':?yjs@>35!oB3K1&|+uM:9i-%$EkOd.9-}?Q4:M]i[{yyE[vKc:l(0gQQVE8+YtM' );
define( 'SECURE_AUTH_KEY',  'mwH7m`jTqlRpx1-t>l29vX!?4$<5<B-1>*9~WEkCK_u($Hm%T.|GNJforD8C3jn~' );
define( 'LOGGED_IN_KEY',    'b^Q^h?D|2dP:F4STIa9>wrLqnEQW6C$lIpoF{rj*Q^qU9L13vpmgSupsSUF>Vm^9' );
define( 'NONCE_KEY',        '(^Rl/t+?,J37uE/<yeVAI>$ v<o^#RM|i1e~0!*?@^^6M]-sX}[u[~^edy8_}jSD' );
define( 'AUTH_SALT',        '7h9M}EI)S`I?+kk8i;,RK^0Av6urZVkix[]ktv^&HDF45r2]Y`?.$z,pB,nQck}g' );
define( 'SECURE_AUTH_SALT', 'fHC8W`@`%`j.A$QfgygvikoXXy2=gAN;T9q%Fps 2H)L`Mf%7aPE]{}x~F=Jiy>}' );
define( 'LOGGED_IN_SALT',   ')jp2HQ!)wap(Hu0P+A7(?!d*bk_@/w8QVTJsmE~0yQ;?6FX*Kb.B}p*!EAQEC(aY' );
define( 'NONCE_SALT',       '}jqYTpCw^+5:uI.IyAuhhS0-:[@cukJ!xRxTciR>Ax1lG>{?Vu;iRJk+cSu`U:fD' );

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
