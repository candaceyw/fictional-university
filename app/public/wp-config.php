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
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'w+aswwfc8HqkLPvVqhKBqyHHV6xYvRMuZdvT6nneOmhHaE3y/ucN/63OFlxW03PoKDjibPel2rkMcA//4QIdEg==');
define('SECURE_AUTH_KEY',  'Apws5fh1rPKWA9rt6EEaR+EjHTCt54Ef38kRHPtd/EA/q7booAuS27Co00yBseOEA7urc2RskRI9SZ8JWBCCLA==');
define('LOGGED_IN_KEY',    'sBPE5/0cuBIWZJNiisdXNU9FAwlHb3LShp07vnkbJqDEj/2IrpF4qAAW3NO7CJPiEOL9yL+xmf9gaHvc4aCzLQ==');
define('NONCE_KEY',        'wfcM9RviMiKYn2jsAhaR/VyeG5xfYS2p84935Iu8XoSue0+QzfZGydNKX5wFnEFKk8u25W78qiSPHdrYaZ0Jcw==');
define('AUTH_SALT',        'hVexI270MT7YdDgXn98NCXwNmVbtnxVWFgS0OvGjvIJDXUL5QETWAAT+jjrzmegaK6964SSgKXmrt3BZHTJryQ==');
define('SECURE_AUTH_SALT', 'U8CO9S0vE20pF/kiyTHaKlQzwiR/6TN2BAKMkPpKRRi/D0b7vu2ANbJcP9P2/LR2EJGYk/dHFOmtC6d6SSSZ8Q==');
define('LOGGED_IN_SALT',   'mXaTkz0qqNNPI64Sauqzqt60Rw9u3ddsDEhwvq+Jz+jN6tyP4bxuFHMGXX8ttm6YK+vtk0zdyNy5pjLZrp3mHg==');
define('NONCE_SALT',       'Wyym9KPcynX2768yNZTfTQA71uW9eFx0ZCn8PBvANichEZvIj5/9lehrJ/yBEmQXa/rvYVo/zlaIo8h8n0dHWw==');

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
