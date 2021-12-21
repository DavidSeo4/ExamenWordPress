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
define( 'DB_NAME', 'ExamenWordPress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'rvd1MAEXDRSFe0mCXtZL0meWvEH5Gojy5KTn5hKPfLIIdjAz9T5648y4GSfkfFUs' );
define( 'SECURE_AUTH_KEY',  'dEs5ewPNAmKWR33LqIQRKTfPiiwkNCqc24HZw1b3HqbkpGyeQQTaiXkWrsJRJZYb' );
define( 'LOGGED_IN_KEY',    '9oteUYfX7939H2p5JYKZpQnAAfgWEowgPf2Eino17rBwmoQEdQcqUZwfzlu4GOCV' );
define( 'NONCE_KEY',        'ZtOfM9YHvAw9Zyj89qynL3kExWrpCKhSNtVihReIuKYztAoPI0cJIjkRdnZGgatq' );
define( 'AUTH_SALT',        'vwe1NAnBJPPH7GAeqqGmSyt5kQZzBQqUEqDie9hP2ZXTFjnmVuAdPREfRjlbeQPd' );
define( 'SECURE_AUTH_SALT', 'CNeQCDPKhx3wdYPfR9Cx7IXmXZobHjSw05HA3bPmvAaMr6YlVLxw6G12jDDpg80P' );
define( 'LOGGED_IN_SALT',   '1wij3vROj0MIffbSlwx4DJKm5mP2RBlFm6AvoH8Z2p5PYKronHk7zMyZYQvKtUW8' );
define( 'NONCE_SALT',       'UxPUQJoebhNrB1gt3oitvIX4SVK8i9upaRJH6fuyzWi1aEWnPduiCF9CyZhJGgVr' );

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
