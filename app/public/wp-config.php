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
define('AUTH_KEY',         'tnxN3+GAPyxGzF6Pr0teW2HIZfmIDqImoC1sAKclD+RtdV2HblS874iqLR5BHL7ClAjoDiN4rQNRwujU5FPZKg==');
define('SECURE_AUTH_KEY',  'WV522COG0F4+B9ve3M8DClFx/HG7WK0XIfuxkmag0nH7d29cppoBAR3r5+9byfohoqm52FrrCM67gszUk0/noA==');
define('LOGGED_IN_KEY',    '1yo8dZqqzQIkxGmmYEFvUXHj47cFX6Rk6PwR3qx1MM1REu+YdDPlvOc7k5GsoqbNrDS1LBaon44i4XMlOQptxQ==');
define('NONCE_KEY',        'IQRRtE41AWphal3PIKlBRo6QQZFHZ35EktdG1bXZ4Gt+dq9NnJ511dUYS6ONxdfIfN0qoYpDHW3CGaI6B8aDTg==');
define('AUTH_SALT',        'miQOvdYFbUBS/NYNO4BF7GQpiOFwgyc8cYakF3L03IyhlTz4mAfFXoMPcMdky4dDcFBq04EKT2SppXxCZAfO7Q==');
define('SECURE_AUTH_SALT', 'Cn2i8essLnHPJ3SbFbovizTnwwmVQv99gK5XiU7NE6LZdhMhXO+H6HOnYEmegyMjgvtHQAf0wXXCgLJGFmyNqg==');
define('LOGGED_IN_SALT',   'Rlpk4UkdXHjNBuOmZ84hZvKU+JedVYe7YBnIVAYE0QprS2PQFY+yRwM2rRql9rnaFt/SLSqtpnzMKphhMuBA8A==');
define('NONCE_SALT',       '4oZjD+ITd+d9H69HnvW7qcn4xniVKudBaXV0yF3CoyLY4Tg+z6JJ0jGZvE8YXr57s94zADE4mxha7J7/o7LwPg==');

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
