<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'jk.n3rX+z*4,+V-JIvKk6Iw$:Gc2Y|f[VIY^zWM8j+bfvQbbSRVD$=GZIU$Nttj`' );
define( 'SECURE_AUTH_KEY',  'XiRgkhJ^2nW 7!|O~]vi(mwT(hn.bpMReZ@WR;2%~/o+RW:C!Khz3IL;R6VWweX(' );
define( 'LOGGED_IN_KEY',    'Bry7FdAw ~za{|3 &Oib.irM63?4ponm.43kI`q*cf+gJ4XHDl4Vd]ITV&I@Y[)s' );
define( 'NONCE_KEY',        '^3?h}tZNzn,%9gUd!-J6|xL1)~/2>PAhE4LB{*`L (nRX3qt;K}_2ksv<1ulK?:N' );
define( 'AUTH_SALT',        '@@xvV.(=?KLGy`Fo?cWW@t14tZSzy6>$+loaTAb(sHkd=vUtK-@e!%_eC#6d3p1H' );
define( 'SECURE_AUTH_SALT', 'XfU~T*h,*&P[W)w.AqPBbm)qy0~@2YlC$#VsVD+NeWV,BJp}.J3@Za509,|:{T.D' );
define( 'LOGGED_IN_SALT',   '[ePe]~$ysX<<.u[}CwXYUbzJTJIGwSb;b!K*lyNcJ7l@K5z7yN68sml3%s83lfRu' );
define( 'NONCE_SALT',       'tB?hp;sh;C?c&hH0%rrue&)regL[7N}Snr-]R4_&`G/=JZd?lq#CWI$/1ow)oAj%' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
