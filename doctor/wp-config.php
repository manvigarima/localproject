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
define('DB_NAME', 'doctor');

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
define('AUTH_KEY',         '~5D^mzm<%m?uKhtncKw2[VtdK?GH}:VF:K`<DHv!R91/L3Nz0<R^H;M(-vFzM}NR');
define('SECURE_AUTH_KEY',  '{}]EdlX34m1+sO0K9tp)WY/KvnMXU6R>O~0Ib2O10=o1z(mh+O/BNx98:y..zEa#');
define('LOGGED_IN_KEY',    'J%!v[#wF?ucId$<r<y=F~`j:/V|>oU4R2<-U,b0|hX_|g)t_f0^2YSnB_`` :|:h');
define('NONCE_KEY',        '@W1qmDJ?]I<E2G!s(s#wg-m-BrPWX8 0c-mYjC0ybwj_Y[jkN;:d?UJj;49%0H`b');
define('AUTH_SALT',        'PoY{cn:mi^eR6%8L 6GLX|i+ -:=JL@M1!o>V1hBAoq5^bdoK^b7X0X5AmUjuH~$');
define('SECURE_AUTH_SALT', '7H%~|irD.4 1q0UqdF{?=KWiXIGxxll(W22/G`I>%#2.Y0F55YP/@J~Wo.K-0P]/');
define('LOGGED_IN_SALT',   'm8?*DO_U%>_}hPn:x{}yqI(`xS:60gmpmch,p;#~w?J*Ba(^9b-NO0!8ZrKZ+$zL');
define('NONCE_SALT',       '1K/7L@&{jXR`gkSC/l`0$Mf<#(?j#N<~en8-QB6yv(6GF_9|r~h<k15+`6Bw_QnV');

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
define('WP_DEBUG', true);
set_time_limit(180);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
