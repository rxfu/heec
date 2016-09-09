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
define('DB_NAME', 'heec');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root911');

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
define('AUTH_KEY',         '5,/EVQG}[`EMUy<_lLmm?q(,kAyNGy* [MJ^c{4@QF0W*_%{X#Vq+@g=-E!ekVZB');
define('SECURE_AUTH_KEY',  'P{SaQ2CVC<}U^p0_<p9q1WlDF?1mW=;gYWPS3Ao3hVh+{d-W4*Mrr^vCg88in}kL');
define('LOGGED_IN_KEY',    'T>qZpvP@(L{]N3v/sM<<)whZw6ljGI_N`,oA0YX]Qp4FZD,H%2|_L)`+h)XLq!AC');
define('NONCE_KEY',        'k|nKiD=bD)@9b_CSvo0>=yC!kD6p&nogE.`xfL9fM^}seO X-@rB>Mb1lkMq`)Mt');
define('AUTH_SALT',        'JMLGt5kV:~s^U]HD1^@Sptf[u{`0$_8pT$/=zP*1S<5kN|ZWV#[Aa)_8KH<L^mm.');
define('SECURE_AUTH_SALT', 'ja:k_DO3>k8YV=N};uc|x8RjFP**<0G8,|l<j/<;z9Q?M~`VV)47k!Ar&a/{%zuS');
define('LOGGED_IN_SALT',   '-I;v;o-$$De4Pt:d2b;k@W^n/8M0>m[^F{a-A5CvL4ZAJ#{#f(^wk57!9oz[,k/M');
define('NONCE_SALT',       'T-p-?mKUb_!a/#!$ZmLyJ7YV}3jG_njeS+ S&W|O!Oq%zaQ<;p$,c4Mq@_QGK~@P');

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
