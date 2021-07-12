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
define('AUTH_KEY',         'HEsPHXg/hSjNKr/asNSxLyua70CAoDDyPwHe+u+cDaIiyKDjGGlF2e/ymcbswNVCRIuXtRVynZZcBq6a/k8qqA==');
define('SECURE_AUTH_KEY',  'G5MnaXx+zyFFfq/RmQ5I9kahoTlvgCRKzgMUDwBCO/N6zF7MbBPvrLBYGGMeFEH4axR2beVLNmqfcmrESCFmCA==');
define('LOGGED_IN_KEY',    'qFAUSlonoqTdHql1FDKKe+ib6Pb8OnrHpdlnQG8Z7nEScyBjd9p333OlOHuXGoQcj16Veu7oSmo3ua2y3lF0ZA==');
define('NONCE_KEY',        'M3MRC6NcZ4pXzJfqRWz4vfE6avAIZqHQMUgNtIy6Jjczi3A4cgJaq2S8fueUQP7ZudfNaETu2k0QePhB2iB/yg==');
define('AUTH_SALT',        '1p3U/AqI670sTXhlWeW7GoKwOpI93iq4t6ElWRZk6bu9kEUa2dd52jf9COV6ySKBSpTIRWgEqq8DpBi3xDs4oQ==');
define('SECURE_AUTH_SALT', 'Jc19ktBEUdgKIiE44uwEqm2+k+1/XpHeTet04mfkmsexbB20rDwviyZmeWDUad/nvz4V52gVr7/zqTUtLApgSQ==');
define('LOGGED_IN_SALT',   'GUzvx9jaeA9HzA9ZIClox0zFZQQ8u1Fxb95Qo/VddAxXkeuu/QaTz3yNDHPemdVsbQlND7CGd4aamh3waKF9nA==');
define('NONCE_SALT',       'BO8K/lgpLhkjDE4m1vADvAvoqrG/ryhb94li1ZkZqsp20fkTsBYc/u812T0/sekej8DHyWq+T5zqc1FAFOvcJQ==');

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
