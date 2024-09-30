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
define('DB_NAME', 'wp_5ac8b558c77e32df');

/** MySQL database username */
define('DB_USER', 'wp-5ac8b558c77e3');

/** MySQL database password */
define('DB_PASSWORD', 'myvUX0wq');

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

define('AUTH_KEY',		'Hc^l*0qLE^PXeLM2(ur!eTuG4qZm9Eu0@5Khj0Yx4yw#T7^P#&gW^d^xXA7JrHvt');
define('SECURE_AUTH_KEY',	'Rz$iz6AYI2XGBr%dheL9x4irruVJoEjHRiX@CDAcSA@$X9VZCXMfL#5!Vs8z8W4R');
define('LOGGED_IN_KEY',		'jUlnenQbO(daP$KlXEkDv2aSd^mG*nOCbDGR!ARNO6qnhxg7wJQ&%!OtG^T0RU33');
define('NONCE_KEY',		'ek*F4VJ8NJSi*r&vApeQPOfCxad23u!@TXIjolbOqf0r1OjW4YBXr8F3WE!GmMm%');
define('AUTH_SALT',		'rRQZdaQvCF(hbNnyN(zg^AGNGg0Sbs2iEa^friX&SWs7onn*Eua%TReHY5ed$*xN');
define('SECURE_AUTH_SALT',	'Rr2&gKfK*6XBA!B3%VE7s$V7(lzI!I(wp$k7lZrZrRS&00Ed!eY9LcdIPQYkoR^s');
define('LOGGED_IN_SALT',	'4WS0g#*jnN4kdsL$dDv@7uzQ5v8iXwBrAsNV3a(hqaEs0SqMLvJZ&z1ExbNoX7d$');
define('NONCE_SALT',		'!A2kTKNisU8B&u$vjZBR!2k@I4E8DBd*0^*siCHb5#^RvwdNJA@Ms1CiKXmyh0Bc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

define('WPLANG', 'es_ES');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

