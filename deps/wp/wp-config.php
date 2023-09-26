<?php
/**
 * WordPress Configuration File
 *
 * Contains basic database configurations and other settings.
 *
 * Set the following constants for your installation:
 *
 * - DB_NAME
 * - DB_USER
 * - DB_PASSWORD
 * - DB_HOST
 *
 * You can obtain this information from your hosting provider.
 *
 * @package WordPress
 */

// ** Database Configuration - You should change these settings ** //
/** The name of the WordPress database */
define('DB_NAME', 'wpdb');

/** Your MySQL username */
define('DB_USER', 'root');

/** Your MySQL password */
define('DB_PASSWORD', 'root');

/** MySQL host (can be the container's IP address) */
define('DB_HOST', 'mysql');

/** Database character set */
define('DB_CHARSET', 'utf8');

/** Database collate type. Don't change this if you're not sure. */
define('DB_COLLATE', '');

/**#@+
 * Unique authentication and salt keys.
 *
 * Change each key to a unique phrase. You should generate random phrases from
 * https://api.wordpress.org/secret-key/1.1/salt/
 * to enhance password security and unpredictability.
 * Change these default phrases with each installation.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put_your_unique_phrase_here');
define('SECURE_AUTH_KEY',  'put_your_unique_phrase_here');
define('LOGGED_IN_KEY',    'put_your_unique_phrase_here');
define('NONCE_KEY',        'put_your_unique_phrase_here');
define('AUTH_SALT',        'put_your_unique_phrase_here');
define('SECURE_AUTH_SALT', 'put_your_unique_phrase_here');
define('LOGGED_IN_SALT',   'put_your_unique_phrase_here');
define('NONCE_SALT',       'put_your_unique_phrase_here');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores!
 */
$table_prefix  = 'wp_';

/**#@+
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of error notifications.
 * It's recommended to use WP_DEBUG instead of displaying errors directly.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up the WordPress variables and included files. */
require_once(ABSPATH . 'wp-settings.php');
