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
define('AUTH_KEY',         'eiy2ebPP1O2RdFW1/SmkkJG8O4Q9ASWqRht8BV65387SOe+oB/ySBgjF5UL0YGsaPYw1xd926sTZ/IbkyK8BOg==');
define('SECURE_AUTH_KEY',  'S+ER3g9Nq/DsHl6mSKkypa545nXlCqFEGwcelGliWIB9YcSKGansxrjzkxmUKo5lM1sONcx4D6ZhwydYYoMbmg==');
define('LOGGED_IN_KEY',    'Co0n+2qMCQ5k7r1KXFaBaUjVmO0BA+wLSE5djABXn2Z8ffJ0o/NjwzNLSZbZmw9+cfAdYOipXEMKeU5mXYTvog==');
define('NONCE_KEY',        'BTtOrGOrt4QRgehEhOAxhBXcei8p1wYEilfku4iMsQGF8VlSkvU69f6KAITF5Wuvo9C36KTsSJxcBEvEwB05bg==');
define('AUTH_SALT',        'oTxNp2kJG5BKgWjOprhp0oYjK/z5z0sPXq0+6323yAETbX0NHrsCDTSp7CNdPjaLnBAZogNZhQBTchvZ9M3MIA==');
define('SECURE_AUTH_SALT', 'XCdDPXgL3jF3tbjcXbc6y+3dqPD/tIzcKadoDva+Ow4LdiaQwCnXLcEWcJeuSnz/ISBMyl0wjgisCxi9U9tj1g==');
define('LOGGED_IN_SALT',   'SpEKTechATIm9BGQh95tbebKMgrj8Iy/LZptL2CAp9tW8J0mhJn9aAZch78WDWO5Po23nzakxR1xxLHEuZLORw==');
define('NONCE_SALT',       'zESEOjAWOfzzEaVwMrRnC107ayo41+gC6cKBlR5XFYPrGkh5vTW7yChJjDuAX9JxPhVl+0bUtlZCakUiFKDvqw==');

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
