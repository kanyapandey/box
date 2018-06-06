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
define('DB_NAME', 'box');

/** MySQL database username */
define('DB_USER', 'box');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'v3,m~z57[iEOj9.low^Nw[9{g)=wb09/G32kQvqM8uDAQw1mU0nhu_-3ktI96d@:');
define('SECURE_AUTH_KEY',  '}C`E|?I|8|)boM}QN_MpqDln-d$MAjnhzYa3~e$kH&!axM<#%ufwrc#h2Y =Xu-h');
define('LOGGED_IN_KEY',    '60^*<_v(PJ>D(Mo[w$:f+FbY)X6DMeg~O4~ =Qm.c|:2smoJZ?x}cvyB0uK*AR)Q');
define('NONCE_KEY',        'KjSm#M^f1)?!luh /KO|(3[u!|h$n$]ZEdALwqI[Glo3{&B{t;s<BKM8f33tf{^E');
define('AUTH_SALT',        '}N|o;9cNVAPVgqq4J%P^>l`{vD5tkSr0[5.M#?sja<R7uKZ$U1,:OP20[A2I{LRX');
define('SECURE_AUTH_SALT', 'pnRolZ~8CHg.F krg~G9[/?U9`MB`WgC~r)lOj9r4WcQU_zpLZx[NmNn9>:v5Q&f');
define('LOGGED_IN_SALT',   'Y-SxOpci:g+;TjQ& Ki}?>0u({O$qsXY>2#{!bUMPsCZk(}/t+=K:7GKvQN[K/wx');
define('NONCE_SALT',       '[b;V_@xBwy:8P?fS_LfG45WebF@{RDsQm!J?8;tx}%oPYC=QQxE,_aUt`]N,LNGj');

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
