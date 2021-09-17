<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

$_SERVER['HTTPS']='on';
/** The name of the database for WordPress */
define('DB_NAME', $_SERVER["WP_DB_NAME"]);
/** MySQL database username */
define('DB_USER', $_SERVER["WP_USERNAME"]);
/** MySQL database password */
define('DB_PASSWORD', $_SERVER["WP_PASSWORD"]);
/** MySQL hostname */
define('DB_HOST', $_SERVER["WP_HOSTNAME"]);
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
/** The Database Collate type. Don't change this if in
doubt. */
define('DB_COLLATE', '');
/**#@+
* Authentication Unique Keys and Salts.
* Change these to different unique phrases!
*/
define('AUTH_KEY', $_SERVER["AUTH_KEY"]);
define('SECURE_AUTH_KEY', $_SERVER["SECURE_AUTH_KEY"]);
define('LOGGED_IN_KEY', $_SERVER["LOGGED_IN_KEY"]);
define('NONCE_KEY', $_SERVER["NONCE_KEY"]);
define('AUTH_SALT', $_SERVER["AUTH_SALT"]);
define('SECURE_AUTH_SALT', $_SERVER["SECURE_AUTH_SALT"]);
define('LOGGED_IN_SALT', $_SERVER["LOGGED_IN_SALT"]);
define('NONCE_SALT', $_SERVER["NONCE_SALT"]);

define( 'WP_SITEURL', $_SERVER["WP_SITEURL"] );
define( 'AUTOMATIC_UPDATER_DISABLED', true );

$table_prefix = 'wp_';
define('WPLANG', '');
define('WP_DEBUG', false);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
