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
define('DB_NAME', 'ahdigital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'z=@TRpIwULr{tmh2<|OlwgT(ieM8{H3EJ@@~1ZC><Ky;-DpA~m}g$}<_|G+t10W`');
define('SECURE_AUTH_KEY',  'beL~|msmRA8Oxig<6Qm1P)MNR3F6&dJO3m_WDN:Ti=^~4b?Cs#:hIIHG_*BzI0V^');
define('LOGGED_IN_KEY',    '|Wmt~Z+W|0(Mh,K(`bI5=:]rYUS3/oQan~/C/QVCaw0}3_r0z4`^zvky^5<AxIC%');
define('NONCE_KEY',        'Ooq<2jWTa;f,/7:o3id2Zv23mKBJDdwwN=+^?Vby!/$`}S} e4ZE*(}WBq-=`+P-');
define('AUTH_SALT',        'vObaesdNhb|y2-#,-l=%GK/iY*j)y8t@4tRad9)h@IyI2GEG$lLap8Uxyba-;^;}');
define('SECURE_AUTH_SALT', 'P-f*:F9b/zvf1zcw`-5;^l(>3}6jjeMBV,Ko~gVN*hiLyC+vB|4jaZIz$o#|jo,d');
define('LOGGED_IN_SALT',   '`Xs?)&N QS-R)A7R5+]^aZ:ZRXPIe1Tp/-y{y6[9X)<E>P|?[8|+VaOr-t|@oCpS');
define('NONCE_SALT',       'Kx#M)y?d$ sFrRSJ}O_-o|5c9Y7bx=j<7+>]]b|-5Qr$W8DceD3y4)x]h;-+,g:y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpAHD_';

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
