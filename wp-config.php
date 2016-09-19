<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wwwfits_p99');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '/n#mc{>vd%eRG|a_DpxTv6<!ZF1I][$A*pSO.^P]uL{J]ZX$s@MM`4:[;,~ZSD^>');
define('SECURE_AUTH_KEY',  'i@p+2l7jvgu2iGOr+/{!mSM0`Mhbx9K &=]X0$}_ocVaIHT]RDcX_^;pc8^d=9S0');
define('LOGGED_IN_KEY',    '11_/mU=&+34&awz[gGehjKK[I4?qG^u5pk?|:u0 DAgq+0iSl2fT+1A-1v0-JTTG');
define('NONCE_KEY',        'i3(l,aw+JZlrOiEj<QNpMm=a @D,)8?-og Meoy#Gp||>m,-+90md-j<IMr*,bm-');
define('AUTH_SALT',        '5iWZmiZ~PW5tZpXd/UEZn_`wuv)D95;NrDy|Dl,:jLm7fL@%|7z0&oj)=T2#d+h!');
define('SECURE_AUTH_SALT', '5O%H~T~4b3$RJwAT}Dy(PrEm((M4CXWs(pJ0T0pMZfx4u]~a)1$6,G)?aMSf|8M!');
define('LOGGED_IN_SALT',   'L,!cK7`sUAO9*Og9pYzL69dg|qX92zG2TP>8|?_$<tr*-{E}JXl~mklt.O:`ZEoI');
define('NONCE_SALT',       'Cxq-87(|uj)/`srb2RWmYX]S!?+`[7;So)p+-$2wBry/B{H,ynW!&ZN6;!_xt5R(');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define( 'WPCF7_AUTOP', false );
define( 'WPCF7_LOAD_CSS', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
