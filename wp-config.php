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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '4Q5PdS`?hR[yf]M+Wu# z;4w?B J1v.d|d/J.R_eug5X. Qfpo |+fV,LCQi+iQh' );
define( 'SECURE_AUTH_KEY',   'N[ ;%);>d`XTr0=?AL:M%M!n=dEn#gaa#;FrF4.gW.::xh<<Q1[qUx+vS$e`tN4E' );
define( 'LOGGED_IN_KEY',     'e3efhIU%j<?`Y#5wC_VQ#0ogG~tXhi9_1.LS]}8pS1jerko]&#^-]rUYk!(H[xh(' );
define( 'NONCE_KEY',         'wa%t8^E|aJR;$>v,SAaW2V t&<Dt4aC,@A#1@w)fULUrD#mz!nhZEZG{E*u_Pjf ' );
define( 'AUTH_SALT',         'O,V[wgT!OxzoPH,LPR8D?r:D6>&4PAF9&hyl3,]YUvt5XxL*}@/UL8VpbJ;eigp.' );
define( 'SECURE_AUTH_SALT',  '*DrX(:IWI_nX8fI:JAK:1lQlpan*+&[7p^5L  uR!A`vmwX`kWWYUrIlF;4qX$8c' );
define( 'LOGGED_IN_SALT',    ',0h*F<eYvhAe[KKqj,-<ERBb1Jo03[Uy3O<w[#`[K;])#z$tS`yHD8{jpux<mq_A' );
define( 'NONCE_SALT',        '`^9?4U%:z4RMI|%89Bw,H*748(:C-,:w.DdnQi/[J#}9|b.JgdGO2W8<aTuk4&,F' );
define( 'WP_CACHE_KEY_SALT', '@P#u1]qYhoocZAAC.QZV{:&a*v:),IRU1%A.ZLWwK *b=Q+JOi&a3N?8_=3Gn:^O' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
