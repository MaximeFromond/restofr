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
define('DB_NAME', 'restofr');

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
define('AUTH_KEY',         '/nm[Fm*06&g*R1g*5ldkXfSemUKDCKbC9PtG->aZVB:;_gWFz-Ru0h3hj,fcf<2Q');
define('SECURE_AUTH_KEY',  '#vX4 Z!X5d.JIcHygoN#bJx8w-/0 [[w)FH(ThD_uDqqc{2OgdBaiskI>AsBbAe1');
define('LOGGED_IN_KEY',    '&(y*YQ+K-8!L$s<x)$Mv.9bRi^/Q~_BI/k)/+QKQ nS}S:#`EIb]<}*w8)zp?L;I');
define('NONCE_KEY',        'CDO~BfLd^b(Fn3ioZ_yoi<NkME*?XrQ5kUwuHgDx/82 h/B;f3n5Gg5dW:o~[8k[');
define('AUTH_SALT',        'rsHAXXp6z>.oZ7}&e?BOek=3EFt_r_T@Ok5`U^lK*-xFCz]:u!Jn@!~yyAX1%};`');
define('SECURE_AUTH_SALT', 'UnRot9^vFYA=]z$*;*u<{$>%rCdPD?4`Y4%[Ek(ws7!% 7>PlSY89!T8nl)0x~k_');
define('LOGGED_IN_SALT',   '7gprCkwDXWf[Z}<qj:8]DXnO9tVB$r-ioJC=Q/>*{[UoHjjQ4Vnk:9_jam@Gz9q*');
define('NONCE_SALT',       'j-W.WnDGnYd]gpY9J a5Z@/-(8(<DH17>;fG{O^_hc4N|Sb7xF#,.Lgr94}uK8WX');

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
