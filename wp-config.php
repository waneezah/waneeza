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
define( 'DB_NAME', 'waneezah' );

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
define( 'AUTH_KEY',         'tE)zy0M>`bq=in(eN]iZlC45qf{9C8DfN2nz-yp`r4?d}d^WiPi[yZ$lbj_UILbF' );
define( 'SECURE_AUTH_KEY',  'x`Q4uU5m}E.l?8A.,c43Z{>0?dYDwac1O9Z5b#b6[kBC]sGTLB&Sc/-9HUR@189Q' );
define( 'LOGGED_IN_KEY',    'Jse4r^| F79p37ul<CI7iER=;U*W7i5]jak VgBTS]uN|EmbQ~vM^?39)vMwN?2A' );
define( 'NONCE_KEY',        'kRhA3;VOgJT@/ElmsTLGP!PWsf9tfU*d^5d~D)vew6A7/_V_wEo+-R;0??uj{P[q' );
define( 'AUTH_SALT',        'TR,$tfP4wgWw,:`n!m UD3vVz1BmiK-kjbREL,,9GjMu]F7+-oP%:CS.l,y_EzA9' );
define( 'SECURE_AUTH_SALT', '9of8V@]bH<gfTFe/zrH[Go<wInR!&$$o[za`2G1_Rz6u,bRs_(16~TU_n%yM49m&' );
define( 'LOGGED_IN_SALT',   'Y/RdGrET_|(w+X]/4CN;eEu7$:sT~ t.-^dLgZb[q/`:8/<S&.~Y.{9rw:FuD y!' );
define( 'NONCE_SALT',       'Q=Nc..$~18FX*3nHL)^ 50<lDpMe{2i3D 3tn,kGWL86#/b(>@GU`m&lXsk/NonH' );

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
