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
define('DB_NAME', 'rrbbpl');

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
define('AUTH_KEY',         'Ryt;L^l+;jc2pcL*^+c1N7%BT84f&*![0}eolj$0r%bM;oaC;z`V#3n>vV4KwHOK');
define('SECURE_AUTH_KEY',  '#UYu>g?s{!@C,df</ujyr9<u(LM]kXy?cinkA`{Y4+]AEiaU8uKG-B=r@Hqy9)P^');
define('LOGGED_IN_KEY',    'N;][a&t!~qF`vmk?QDhG[31$2C_K}uJzi0<tp`[y1,3lF12BS$DcW2xi);sI@JdW');
define('NONCE_KEY',        'Sg-Z[_q5^/HbWV6m&,_STJmk4yh9QL>t2vy2fg&)[]kPpS*3Qf.zl(;j)s5 Ex{m');
define('AUTH_SALT',        'FeSh#gljO6p7CQFr$c~oNn(IFcCvF8.Z%3F}T3@T,s|tE]NgHdUj43qhGu)vR}<V');
define('SECURE_AUTH_SALT', 'Ge(!%G3<a#~ou2HG$@&2>0k7Bi%,x*Ra.X+2wIz=eM>5WYRMvZH4p!n_5+m+UOFo');
define('LOGGED_IN_SALT',   '*R x_[@ulH1mC.r>-Hvu4cF34~-wFxtHwZrd1VCE OX^5)x<a;7^O-KHF]=l@`YL');
define('NONCE_SALT',       '66<nhOaJIxuyOOc1l-1Kt6dvONolKp$s?W-ARel?&.asUgumw;m{1o],v#u@zzBh');

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
