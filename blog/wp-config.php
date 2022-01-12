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
define( 'DB_NAME', 'mboeqrle_talk2blogs' );

/** MySQL database username */
define( 'DB_USER', 'mboeqrle_talk2blogs' );

/** MySQL database password */
define( 'DB_PASSWORD', 'talk2blogs@123' );

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
define( 'AUTH_KEY',         '%!@/kLic`.HQZnv@u?CNk?bV52qzz)Tch#biiU`H;Xp@F|#&cHT[Tflm9DBgnJ86' );
define( 'SECURE_AUTH_KEY',  'H!7;(NQQc+3E}fO0kXYG0?@Re?37C7&%= >a2T=2nVY3w!v-8=:ue_(j| ,$nusI' );
define( 'LOGGED_IN_KEY',    ';,&SueA~j|w9IzQ-Nlxw]g5R_^nb+>4pE?Kif%W;F!hn`=RPkhW!0fR!J0^n-XNu' );
define( 'NONCE_KEY',        'Wa_v.kmS&=3^B5}lC/oQF$lDlL.o]QFnp$9]6JC(6%Xa[T^/]:j~^=>}BjV>7prH' );
define( 'AUTH_SALT',        'ij][jm3#943+<q=QK)#]5KDG/UEhY,qw_TVG3I{uQ&7ciEWLe7I5|9jm9|u#X(4y' );
define( 'SECURE_AUTH_SALT', 's G72KNS#hc}c7M=b70cX1FiF4&R`]}E}Pt{AqfUsNNXN7U;-bQ/^O/GSd<%[,*S' );
define( 'LOGGED_IN_SALT',   ',FI>|eJ2B4AFwG<y{35Vk4Xhxy{N19*zN~bb8V{n=oiPR>eJ]h&Z5L8L*9~!n_O9' );
define( 'NONCE_SALT',       'rhPm-L{4p.,vVj3@G/@W.A;>s.ByxRs~?<z;>5zroos6DsInIpbu?q`CwscaumcF' );

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
