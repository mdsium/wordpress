<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'g1uyRhjTiizbghE/ykAA1XyyEjQXALFfWTjDkEbENgvsdjzB+Rml5EjC68TWV5iJYD1+owWiCNP5wCucuc3Z9g==');
define('SECURE_AUTH_KEY',  'XoQz6uivht3vmhLvB2pl82+7pZhjDq94mdkB9QChe/UgS64MIBnegAKzx8o8XV1fmiyb5DX/B2B85OTyvrkUhg==');
define('LOGGED_IN_KEY',    'zksdAz5W8oAcK1hZs4F9KAXX4sBFnXFqDTsPrDYwckv7Y+dSFFjItaDF8OokNRLSieO2ynE19+4/ayeM6Tmf5w==');
define('NONCE_KEY',        '8Gsu8rScn32pjGPcEbXS6oVgKVs4/9jeOA9JGSSJNWprI686AJpfbEIldSRNFJvJxofKte9XPKVKWkRUB9aI+A==');
define('AUTH_SALT',        '8QU2fQRc+tBt2XuxKZowj3P2gI26WZt2BY2oHQ3SY+5XK1+6sH5dodfDQ+CNo6sfgQBO1+ox0wEuYFt+izJ8VQ==');
define('SECURE_AUTH_SALT', 'NgrAUXgBOfwyXvYA8ny4etnkGpLgaFwvXrt9wOZwwnDEOtl2Y7fTyZnjjUrwwB8fuOiC8VyUIaNBaN1DhBW82g==');
define('LOGGED_IN_SALT',   'pwdVUcRuKYXAEPdtjsSgQooYqY17K584dOAZ+l4JrpyNHPwghHHoJUYLL6boOt7YJeZKYP53y4TOHG1yIJWRrg==');
define('NONCE_SALT',       'drNie0zuuZbsbWC13G3uRMDZ2kzeqWyiSAaTuKxwg97Aeql0V6i8ATL+FCajkk/5Z7Ey/+VUpSpnnnTJxe9HtA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
