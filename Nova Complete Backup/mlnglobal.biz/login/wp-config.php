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
define( 'DB_NAME', 'novaswtm_wp386' );

/** MySQL database username */
define( 'DB_USER', 'novaswtm_wp386' );

/** MySQL database password */
define( 'DB_PASSWORD', 'It)SI26p)4' );

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
define( 'AUTH_KEY',         'vhc2ieyqhd28dsjvge9zvpwxjcahm55s7ysdgyd0fa8unjqn3wjk2d15pkxrlduz' );
define( 'SECURE_AUTH_KEY',  'beqpibnbyglw9kg9h6lql34zdhqezp4no9zrcwpfp7911n4kgjih0txsp6ankgxu' );
define( 'LOGGED_IN_KEY',    'jzzarey4wnazfyqfsucrpevqj40se7jhsjyjibdpdidk24yvalvtyk95rno3ntdn' );
define( 'NONCE_KEY',        'rnfawrq2xd2hgugzorfwamn0n41lzmfqywv8yhx6wvebvlrkzsnenyclhxpelz79' );
define( 'AUTH_SALT',        '5i2xtxbogyktrtohtoh1gr1dqqkraxlauko3yorvitgnyhn6jwddurtot2g6prhg' );
define( 'SECURE_AUTH_SALT', 'tkz7vztb7dfewa11i9pxzufcjlqq2h2uoxi5vbpk1glp1w3cphn3aw1gzdidaguk' );
define( 'LOGGED_IN_SALT',   'ajzukgev42gacfwatxe7hsxsxxakdrrjqe1cwf9lqb4wsgumsxtlqetqlk3n0t5e' );
define( 'NONCE_SALT',       'svf7sssp5p3hpitb7qxnnjjflhzix4fao02kmrdpr2pb1lbqfjwzntsabylhsdu0' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgc_';

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
