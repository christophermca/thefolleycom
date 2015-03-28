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
define('DB_NAME', 'thefoll1_wor1');

/** MySQL database username */
define('DB_USER', 'thefoll1_wor1');

/** MySQL database password */
define('DB_PASSWORD', 'Y12uGUf5k');

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
define('AUTH_KEY',         'oMl~o?2;<}Ki1)JqSfQWG1dkbJ!A]cOkWFI+!Ro%J*|A$WeAs1HMKDN!)[hBM+*u');
define('SECURE_AUTH_KEY',  '$R/t>6^JHjyhXJ=5!<u?NWJ`])@&,!=)|F(h 8 >Cq?ejm4{-DbsQpoXo/`3zse(');
define('LOGGED_IN_KEY',    '*}J%N-o(-N%+&6S_mgm4TONA8HX`0]-#*%ipvMdCI/i5i3,M@z*}-v^3:c#dA@WZ');
define('NONCE_KEY',        ')82%0l:-*(k_%Qo#$lZX:!bLz^LY++=RKFSmyw@<;%mH=3%& 10+n4-?wao>s8+~');
define('AUTH_SALT',        'k;BY+K-oE4$],sBgxlMO3-:Acnrj|}&Ouw a,=^gGUKUClS=PT|Ed#|d;H|+x9N!');
define('SECURE_AUTH_SALT', 'A08Svl2FT8[Wyfkik|w-f@h?EXm7]j@yDu%),7_&h58+pN3F6XDo:PTy:qlQ~|Wu');
define('LOGGED_IN_SALT',   'u0z-#4:iRC:M%;,yCxVEC;H+EKf/#F}<=LYfTZ^4caet.Fl@+}~L=>T57UMl#y#;');
define('NONCE_SALT',       'gP.KRmffvBNQ2L70v!`sK|vU]9[Mo4vlep2pD#(Z$B%fRjT^1XrVv3!;j.]6pjI4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wrd_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
