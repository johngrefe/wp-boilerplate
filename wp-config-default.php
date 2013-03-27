<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

    define('DB_NAME', 'production_db_name');
    define('DB_USER', 'production_db_user');
    define('DB_PASSWORD', 'production_db_password');
    define('DB_HOST', 'production_db_host');

if ( file_exists( dirname( __FILE__ ) . '/env_local' ) ) {

	// Define hostname for dev environment
	//define('WP_HOME','http://site.dev');
	//define('WP_SITEURL','http://site.dev');

	// Enable Uploads by Proxy
	//define('UBP_LIVE_DOMAIN', 'site.epxhost.com');

	// Enable Auto Updater for OS X dev environment
	// See http://dancingengineer.com/computing/2009/07/how-to-install-wordpress-on-mac-os-x-leopard and comments
	//define('FS_METHOD', 'direct');

    // Local Environment
    define('WP_ENV', 'local');
    define('WP_DEBUG', true);

    define('DB_NAME', 'local_db_name');
    define('DB_USER', 'local_db_user');
    define('DB_PASSWORD', 'local_db_password');
    define('DB_HOST', 'local_db_host');

} elseif ( file_exists( dirname( __FILE__ ) . '/env_stage' ) ) {

	// Define hostname for dev environment
	//define('WP_HOME','http://site.dev');
	//define('WP_SITEURL','http://site.dev');

	// Enable Uploads by Proxy
	//define('UBP_LIVE_DOMAIN', 'site.epxhost.com');

	// Enable Auto Updater for OS X dev environment
	// See http://dancingengineer.com/computing/2009/07/how-to-install-wordpress-on-mac-os-x-leopard and comments
	//define('FS_METHOD', 'direct');

    // Playground Environment
    define('WP_ENV', 'stage');
    define('WP_DEBUG', true);

    define('DB_NAME', 'stage_db_name');
    define('DB_PASSWORD', 'stage_db_password');
    define('DB_HOST', 'stage_db_host');

    // ... playground db constants
} else {

	// Define hostname for dev environment
	//define('WP_HOME','http://site.dev');
	//define('WP_SITEURL','http://site.dev');

	// Enable Uploads by Proxy
	//define('UBP_LIVE_DOMAIN', 'site.epxhost.com');

	// Enable Auto Updater for OS X dev environment
	// See http://dancingengineer.com/computing/2009/07/how-to-install-wordpress-on-mac-os-x-leopard and comments
	//define('FS_METHOD', 'direct');

    // Production Environment
    define('WP_ENV', 'production');
    define('WP_DEBUG', false);

    // ... production db constants
}

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
