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
define( 'DB_NAME', 'testIFCWP' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '4X3qwOjgullIc4zlklhNzmsV5WGSKSriAXLnhZc72kn6diMZqqwYTM24hpdqDVlz' );
define( 'SECURE_AUTH_KEY',  '76W1uG3TN20HRiELjR50Q159hilCf1fgiE6YBhspuiUlDUS8omGESLVrERMV8sVP' );
define( 'LOGGED_IN_KEY',    'zsnfRgJv7dvmTnilIDkul4u5j4bn9hnq08xLoJ3pUsxK0ZkYxawjwRJ6l7Aqyf00' );
define( 'NONCE_KEY',        'VkMh4UUuesFfBNe3LbWIot0rQoFoEXvqL9m21l35kyBqpLasRpqyqRuGj3wyWSeA' );
define( 'AUTH_SALT',        '7d9SQF1d4KtyHUL18ieIzEhGnVtVspD6TeYaflTZJvyGaYJezyqVSH70OnKVcaZf' );
define( 'SECURE_AUTH_SALT', 'pqQLd2vM6FReSUfsh3JdkkLlAZoM5FqDGhpo56vo0TzeAeOu372dXYt2hsrtdlir' );
define( 'LOGGED_IN_SALT',   'UCC61f3BqxAuGc8E9eyUXfM9MS17p0dxXe4HhtixAqJcv59s8KwlwqY2e8RLkRUn' );
define( 'NONCE_SALT',       'w9KFn5XhZ2T9znVlN3A7bE0mEkKKzrGkS9w54CQ02nXs7YYUWNBoIkfs0wKccg6Q' );

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
