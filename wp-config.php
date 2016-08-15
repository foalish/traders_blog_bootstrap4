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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cl56-a-wordp-bjp');

/** MySQL database username */
define('DB_USER', 'cl56-a-wordp-bjp');

/** MySQL database password */
define('DB_PASSWORD', 'n7jw/gGs^');

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
define('AUTH_KEY',         'y+3di^0db=9x5VT+REu5h1JcB-Q!JF0-ROZfr+8DSEm6hz(IQFhksfRKKKbQ)##J');
define('SECURE_AUTH_KEY',  '3U^+c_^f98-wktBFH0oi^ogMVUaJeD2xyB)AqJK4tFaN/EghRZgok7_bot6Way(X');
define('LOGGED_IN_KEY',    '_cI!Q07oTy3z!P#YQ1g5bHIdeV9=9YjTFl8oiZ8TE1Dlcl!^1Ze3OZWeYVAaNTv/');
define('NONCE_KEY',        'AQqwkLXW8iT_crxkQYjTTY3bRa3sPbWFk9MTnf8lJ)vqRb11_o(Xzg+x/Iq8pfdp');
define('AUTH_SALT',        'YI5A11e/XwLh-D8JdR#YaKcYkw9x4eQvKT-W4FxxHxTRzr8j=nlWUHtX!BmKn-Gc');
define('SECURE_AUTH_SALT', 'yXEgqTIMhlTsODkTvvPjgRFy0Kf9PxelAje4d#)SL6MPlZY=Ao/B6K(De1npzovN');
define('LOGGED_IN_SALT',   '-z2eJk/A/9g)(ZV4r!^Bd83SkWZiqgjeU8GS64A/-TPDih27F5FS5gsYkVQmY6Ap');
define('NONCE_SALT',       'rq(pjpiF7M9h5p8(RxUNmKfu5ppsC42f238=#p=mtXHj+ixY1u_+N2eQwpF5dbn6');

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
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
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

/**
 *  Change this to true to run multiple blogs on this installation.
 *  Then login as admin and go to Tools -> Network
 */
define('WP_ALLOW_MULTISITE', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/* Destination directory for file streaming */
define('WP_TEMP_DIR', ABSPATH . 'wp-content/');

