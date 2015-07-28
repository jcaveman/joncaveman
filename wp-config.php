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
define('DB_NAME', 'db72220_joncaveman');

/** MySQL database username */
define('DB_USER', 'db72220');

/** MySQL database password */
define('DB_PASSWORD', '}V[lYa0t9@w');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s72220.gridserver.com');

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
define('AUTH_KEY',         'g[~%1F|U%O$`{cE@%(A]Gu;G}k.d^+&.g+}QZG*IP}5t*qv+XM5?j`Q)dcrCtfqQ');
define('SECURE_AUTH_KEY',  'S`hb5<|-Q&A^Pf1#y-`%@[S:z:i7=2|ln.lN-^&N#S-w+LxYftV^(IroGnr9(ii]');
define('LOGGED_IN_KEY',    'l?1d6~6oy8.+*lOP0E5T`VYp7F9:WMk!+TF-RJR_8%vh{T]thvym9-FeK$we)WU*');
define('NONCE_KEY',        'PlXNwzcMX-+)fedp_XSMRPLz=MXD}|}tt2-}6kj,Lx+Z]+V4&--YnfHpU1imA}-:');
define('AUTH_SALT',        '$L/HA]jBJ__ilO#_^;|moY-+/G5nYWpT|a$j(6g0wx=M.},F|qn_-hnmA@JKWk|R');
define('SECURE_AUTH_SALT', 'q|PU_iIGmtY)b[F7b;)Da-~$|,]Qt7F:-k!=H[uzR< z6#(pCfHhk3=(@k~1AaQA');
define('LOGGED_IN_SALT',   '*BSoZb}[O6;^lv6oo~85-u,1fj<2TrSmeB^O>Z/qPSJ%S[kf-H0Rhn$rSc.W;^|u');
define('NONCE_SALT',       'JT4>a+8a8N lm[+MBwPX4A|,Q11jE.Nk*3U=mW@I&1RyDzV1jAZ~=C^%4ECHQN1~');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
