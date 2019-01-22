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
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', 'test');

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
define('AUTH_KEY',         '@OvTYdJ>lPxJdMku_hKR{vm([a~C9-8pnw`8S[fBF@E)n4@9ao?bOId$#aSxEHH5');
define('SECURE_AUTH_KEY',  '!E[i[#ol]q)oKHF6,?!Bw29~-!&v9zMe~ABw5y5U5o3:i{r7(S7f_^7&JHa4X}&h');
define('LOGGED_IN_KEY',    '3SYNMQJh,P_aQlsSmVPoWpyR/0?%MF_TcN^8s^b1.rm$~^VYwj4s~|52=5kwW+ @');
define('NONCE_KEY',        ':O$(a=$p#lM/pkX;$H&A)JEijCm81z+5Ob`4DMIqw#?X[r._ysP~96#Gw)?X9Pf_');
define('AUTH_SALT',        '[IiBTz4ePTlpe7G}n-O)X0Dj$IJ+SJy-G[f8,+RXcO</7WGY!V^9d0Y-&JuNXlMb');
define('SECURE_AUTH_SALT', '3v|ZJVDk*WT0tB:eEq` >mF^L&c}%MsY;Pj1&}H&gTGY>?P%t7DVnGX|/8,@J +W');
define('LOGGED_IN_SALT',   'JCfseHYq`R(9B_*mTs-h$1(D%#V;~uSOs||,%p%7XS{zfEg3VP)v8E*v<Z^nr6SR');
define('NONCE_SALT',       'M4iu&=/5@Gjy>#^tc|v|9$emn 4W3$4Un[>,~_?PG<_T?[91$y(3+}b1Y.6>)d96');

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
define( 'WP_MEMORY_LIMIT', '256M' );
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
