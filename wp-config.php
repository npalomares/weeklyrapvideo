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
define('DB_NAME', 'weeklyrap');

/** MySQL database username */
define('DB_USER', 'weeklyrap');

/** MySQL database password */
define('DB_PASSWORD', 'siLLyBill0102');

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
define('AUTH_KEY',         ';@Hnpx/TUP.^ X-ra$t:p??jKqTrP>1Lb*t=tY]W0W<W0^]Tzh%Iq]b@OPG./Win');
define('SECURE_AUTH_KEY',  'M8D!M<~_7@rUXg5;`9C%9&<N?m/p_5XUow:s_*4YgLM&0.(eVTQN[jUaETw +W7>');
define('LOGGED_IN_KEY',    's}PJoyW&-jPw=T|PJ|+rGGN$[1z}=DM7Bh)axLeBE{OK_YUcGRx}k:v_^8g]8V>%');
define('NONCE_KEY',        'nm5q@=NiCgYKZpeR?F}u<5&R%aLVV.(G_rQ4c,-KN&o7Z+qSxqb+h$V:ZL1XEFkW');
define('AUTH_SALT',        'VkVe)b`23Y,LY.2&twj8m-WOteqDe[@00-x>M+=j}[W+GVAS;s:VpO4,O|9?Ezd4');
define('SECURE_AUTH_SALT', 'Lc@:h/nJv]!48yCosc*5XThmw[]Qx7Nukv^4g|*/i<kz$wT8fi0rdg,kjEK5e0+y');
define('LOGGED_IN_SALT',   'wDF+2,EA *GlL&xM?%g0>&Psn1;.RYn+zT2GuuMnY,(=_9.Pb;5P}RAre|-{7% [');
define('NONCE_SALT',       '##Be6f2R-+gPo6ny@Z>n|Eb;t>W{7XI(!_KcpT3h64BkMj1.$Wz-|&[g{Y(r7/{R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_wp';

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
