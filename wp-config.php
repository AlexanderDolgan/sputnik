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
define('DB_NAME', '449115_wp1');

/** MySQL database username */
define('DB_USER', '449115_wp1');

/** MySQL database password */
define('DB_PASSWORD', '3Hr9yVqgH');

/** MySQL hostname */
define('DB_HOST', 'z9496.spectrum.myjino.ru');

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
define('AUTH_KEY',         '-ljfUDOL<O/^>*{WeX3eJ>J2S-B)w3+|<vZqzR=ORTB#|$%PMs,3A*n94Ok>s3}0');
define('SECURE_AUTH_KEY',  'MokWs4IA_-dZGk9wwx<(9>Q+E-x[G`6v0Gd91G `yb?+W,F(f$k|8ZJ+%Hpl9UM(');
define('LOGGED_IN_KEY',    '@|+}ara=2dl=*Zew;LM^f^OF:F&w6PW94K{Tlt y[cNw5|WmEC1ooJ#ZMJa|E.CW');
define('NONCE_KEY',        'xSf5zf_TODh[S+,UL?0Il*D=Ug)V);+1U2k`iCW>FUV5 })vH.;|=#fK*W_4)i*;');
define('AUTH_SALT',        'K~e,E>AO:eo!(NZE.]C;~a`pF>,nA}1%|1|.TBI69l`WhM(sS=}fw]J2$ud%N+^Q');
define('SECURE_AUTH_SALT', 'N{E0uqP6H-^bToAjP3dl+az.[9|)&pX+XYnt7mew^;kHOtwxn4d;hmd+Z >gIM(V');
define('LOGGED_IN_SALT',   'cRFA4Ciw{3*P$!u,NmF!I(r{po2r*3p|LS+xfxz,tI<CgLqmNc>3$g0[;W9*d?;u');
define('NONCE_SALT',       '.}-;NyBr5|32vT*;a /m;0sNqlf/%&y:|Zr>OdX4|{]-cQMS?@rDz&UMfAkeAHA.');

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
