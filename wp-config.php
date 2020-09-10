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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //

if (strstr($_SERVER['SERVER_NAME'], 'fictional-university.local')) {

	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );

} else {
	define('DB_NAME', 'db64uhhgcwjeaa');
	define('DB_USER', 'uxvqwx95p5jt5');
	define('DB_PASSWORD', 'Starwars2012!');
	define('DB_HOST', '127.0.0.1');

}



/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wdBoaG04hrghcJUUN/DZFt5Zxr9Dz5dk60/9M/hRF4RWosFfVWVFW4+v/JV33C4uI3vAmE8wXE7UB16LIVbBqw==');
define('SECURE_AUTH_KEY',  'IrQb0oo4IA/WOTem2U+B96VBkviscK+O7Ojk9vwNx81tcqVB7J4Jm3iH0akT5zaMnJp/2Is7iDcpS2jnVpgepQ==');
define('LOGGED_IN_KEY',    'gsLHHUf0WBIh1uyL+2qC4s67l3z38RH5LwSxLJUyQAmjE3jbkj8CRviAqdA7gFiRKww9VwtMGji5n7FsxHYAoQ==');
define('NONCE_KEY',        'nrjP6poUUjrkqRnEZLnOnd1cNVgJoOMKcskcIcmCEyi4e/pGiITUZPfKL2wyQ+/Ddi2kUhaRUN3P9M186IKvGQ==');
define('AUTH_SALT',        'l764ivb5JtAZdD/46QBfNzTHD13elfQpu87Rrg5HHLejUW0ZeSbRYw3kZMAL9TNZw3quUotYTVthIltETjxOnQ==');
define('SECURE_AUTH_SALT', 'HgnlmKjiYNlSZS78tYuKKWLKtedP1BYK65RUS6/xhh0jrD/G0wrKIyzLMAkIQMX3yszWzVJxp6s4/biJwSbE5w==');
define('LOGGED_IN_SALT',   'tQsMZnHH5ryJPwDlr2/2SvSB3rya2a5G4wwaRtmQPGm56Eg7u3E14HqCW0AlRNNvfw/85hYD6d8TtCbiCQbb6w==');
define('NONCE_SALT',       'tsi0YWQMC7aKjBikdA6U+vQowZjQI5GQAq00xYQSPnJj6d1VvtINJQ/XoBjc4Pw45MYihvjsj3U87LmJiRMbBg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
