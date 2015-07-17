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
define('DB_NAME', 'joncaveman');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'UTIoL1_+L{gQ+H|+2L3.W%=GE0|3gClH$w]|+3AO$LBu0@uRgK&._}ZS*8$bEf,q');
define('SECURE_AUTH_KEY',  '-m6vQevUyi^E-hMWwG8P!1c[b&L|@Kao.(<mXYX`z(Al/i3cP&,cLTcq+uE2bu:v');
define('LOGGED_IN_KEY',    'QluPT6Q8S3uKL)&}py]roq)mSxvnB{1a<T27PN94PrW1c@pHwiu8gK6d0@eYbHTI');
define('NONCE_KEY',        'Zer_dLbGBEmKbeNJY|d(:/9c~g$VL/8$)zDla|w^3av9y!RcV0E~F>pBwGM=-$5w');
define('AUTH_SALT',        'vg=&W6+3qV!O-:>-%GSq]Z4+I 5oEVw|?n=.Yf1uf3DC>~F+ltkG,hf:XT?-0Z;D');
define('SECURE_AUTH_SALT', 'FSmH_|T;(8lvE+|YE+IKg.A-f%#;G-Y)zrYp5!0n(Z.,ly.{/h:M:`?,;Le-*J9^');
define('LOGGED_IN_SALT',   'j&-T|~ P&`I6LWe^[XTXXV68e?gZ&#C)d#m;LNmE-o$jwDX<E<FG-5+c|7+O[/<*');
define('NONCE_SALT',       '>^=U%QY;M:wxhKm3z>Jo$yX)R{51uX:4J6w.>GQPw1vSW.wfg45H,-1#bEW&|9<B');

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
