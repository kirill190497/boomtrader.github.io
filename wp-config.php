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
define( 'DB_NAME', 'u1126910_wp13' );

/** MySQL database username */
define( 'DB_USER', 'u1126910' );

/** MySQL database password */
define( 'DB_PASSWORD', '3qSqlyNKE' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'yzsxluhujwyuhkrxxkrqagbep9bra1zhjeahfmytjsjajxa6wgxcxvu5bpjgyiuj' );
define( 'SECURE_AUTH_KEY',  'hvovgmrvge8k2wqzme7gtkjnwfiqvo9vuqzvgxnwy9goqyrgre0ld0v6ycbtfdzw' );
define( 'LOGGED_IN_KEY',    '9jmuqmavqywcz6zu0h1b1imeiduja6ksanyvfi5kqawf8wel7etyczmgkgt9bbkf' );
define( 'NONCE_KEY',        'ehujwygotewekdhhwexgxzlzwv7cwcyx5wzmqupagy8vj7uuas8tar2vl0zrwaah' );
define( 'AUTH_SALT',        'nmqqejlospimsdqr3egrpicj7xmooz54zyzlfgtcchbgjaiwsnbiqnzz4vqo7b08' );
define( 'SECURE_AUTH_SALT', 'aphd2onbid7s7pqmzfrj8djqou90s5mm6hratstm2a82h1k4jdm2afmbguxyjsfw' );
define( 'LOGGED_IN_SALT',   '7wazojd4eun8ocqq5ecf0cj6dvksh4rxjoqsonami4o6pur0hlygjyej2k90rzhv' );
define( 'NONCE_SALT',       'm7whmzq3lxwpl72r4nhyaav4kj4gyvwxkpd7xbtzloeaolfafijitq6qrxmwiupc' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpnw_';

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
