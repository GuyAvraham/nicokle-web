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
define('DB_NAME', 'prifender_main');

/** MySQL database username */
define('DB_USER', 'prifender_main');

/** MySQL database password */
define('DB_PASSWORD', '320320');

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
define('AUTH_KEY',         'dnb4hNo*4bk@;kTpg7/6nGBj8%|NsVQ7/cSXlwQw4jIRGo/`V?LY.JC)FBFgD-r$');
define('SECURE_AUTH_KEY',  'GViMHXDZhKm{,w4%]Ra6(:u`GIQ0njr0Dpwqpi>A_A_+slgaN&93oPLc6TZY{qQ(');
define('LOGGED_IN_KEY',    'd`kY^HM(_mS3>Xc?L>D%l?F2-x--C(I#%gmr`+C6Ab3)^%=<Jy||^8+(m-qN]XP]');
define('NONCE_KEY',        'SR$`LC}j{N,B6_30F>whj[T6|JbZ?K-aDP@BVS3TGS7:7tt]IB%L$V7T-Yf4)Pg^');
define('AUTH_SALT',        'm(b|gkQa`2|k-<fsC[{Ej2(96b|umoGeS&k-Wj+AN.-g?6YM[KtFs,FM9|0@L^or');
define('SECURE_AUTH_SALT', '+^s@)0n+eSm@7;|&Jzy1>UdSqB.2OJrf5%sI~lk~B*v*yy@uyE6{L-1d<++O]8xe');
define('LOGGED_IN_SALT',   'i2fCFg{@@8gJO/=z {zHr-B{*6pSN27~8`8vT-,;Uba#.h>HD_ W!5+hn4|A|K$!');
define('NONCE_SALT',       '3Apr$0-+-E(hB?QUP`m&ra<L-l|,|OFYV(Xr0 )D |q|}+dT]Z ja[?-O)m1-21R');

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
