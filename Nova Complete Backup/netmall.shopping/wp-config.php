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
define( 'DB_NAME', 'novaswtm_wp505' );

/** MySQL database username */
define( 'DB_USER', 'novaswtm_wp505' );

/** MySQL database password */
define( 'DB_PASSWORD', '60cdSp!4)N' );

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
define( 'AUTH_KEY',         'juwentyxufus3brnu7u7bg0mqbszawt6epzwdrsksrssmed5vfndnmhjcuqnlxeh' );
define( 'SECURE_AUTH_KEY',  'd363isgksnwmqprp56blydy1mjxurn95gqlb0qifwlthgusvae9vug48rsxo6cwg' );
define( 'LOGGED_IN_KEY',    'gg5ufhe1z7v0ollytvwyhsiognbsi8jxgxf5c9q9l7biqeafwboiha7oycfwkqzv' );
define( 'NONCE_KEY',        'y2s69slfz0u93htoe3qmd065xk9s4cm4f18r333br72anqqptbsmwn6tug2oodct' );
define( 'AUTH_SALT',        'e9npjhcyiw5icdinnnpmxwu88withjsxynnqeurps5vcywh1apdi59ecviwjspqf' );
define( 'SECURE_AUTH_SALT', 'ggdiflxfgd8tdqrrfkrnwtmnr8n3x3ebpurlyffruvex7e6b5v9jzkkd7h6lg1ce' );
define( 'LOGGED_IN_SALT',   'emkdregshuvr8zoxfpav7h2iied5tb0ijp8q16q13rsow44hrfxqiyhppzh57f98' );
define( 'NONCE_SALT',       'ghdht25ycobjqjopscofn10sctzlm3qswmqawsvvzq3kqiap1jkhrr0wytkbbgml' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp0l_';

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
