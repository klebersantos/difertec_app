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
define('DB_NAME', 'difertec_app');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'i!}NdW&|}>QK#ig}ptwo[+fdmhBu3,,-:rYNDA&uEUdYv>wI|d5Q{q(<G/t!,|63');
define('SECURE_AUTH_KEY',  'vFfuo>]]<Dq6cU#jSF8mVZAy(H{ptX$oD-wE2i{!%nO|$y.<__Fmhe)Nn!P%e$4P');
define('LOGGED_IN_KEY',    'tIWZe8R7ZsJkTL_>k5jGpxY3;jC!_8W@s-vP|XC,X+[hT;ipvp|#ENJjIP%exe0`');
define('NONCE_KEY',        'G)5uJ?[??00z5cb}Tc.k]Ne,^U66;[9(b/^F3I(JLm12j! q5pq9J@Z~OE.iHVL-');
define('AUTH_SALT',        'f4f2T^}x=Eizj-B9Rq.P1Gtp_Z%-@E:g)(_Rf(]oUw5v*xe~C[ky&MY+3cA06YTD');
define('SECURE_AUTH_SALT', 'x2:X5|8vvaiA0eL*5 ,t*59!a~*O.<$n]J%1QY)Vh./}cVANQ.gmMIRp<[RhnXY.');
define('LOGGED_IN_SALT',   '0D_a=^Rzvt ?a7+cmdh=[<4(!c7YaU0DK#<rk, UC6y.la3A/EPF:/>u0R!98-g7');
define('NONCE_SALT',       '=T[!>a|}Wbf:q%n5]/0,Zil}ijB<!5uBpwW|&mgVG0l>(:14|O+Fi-/0,:fEIPrE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
