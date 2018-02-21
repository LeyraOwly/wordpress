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

// install local
define('FS_METHOD', 'direct');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ',{0/EY>iN9iu4t[K+Xzw$n_=CsH<SUr+jj_@Dda@>Wc>|F:}j&%!~pl3j?xUS=VX');
define('SECURE_AUTH_KEY',  'fVvLP$V3DJa}Gk3=fGFdu}FsBh/fbrty7&8De__R{7yoownlQ$G.mJNr&eLsMp$E');
define('LOGGED_IN_KEY',    'Qojioz{UR)EsY?~Ym5Ci4VGGX75@-w!.{,;|+#I0.U|RD 0/z$>Mp|fQAL1o3JV?');
define('NONCE_KEY',        '/E65,*m@Y(u_2&<P6:K $+#}8d6*8#&#wl9M*UWeVgw0>XsJS9*?x!Pd1t>]?A*N');
define('AUTH_SALT',        'P)@wCWRhneL 7lNu`XrMdgUls=y7/#@+%U+,>ZC%!S#J:VCX;`C{UL3Fgn^#}RB_');
define('SECURE_AUTH_SALT', 'mBkK:nJKj_5=hfnac4b<zr#]qp)Xof8gI86Gdc1n_D<XsaPGIyauvge6>Uk+@3KA');
define('LOGGED_IN_SALT',   '4&XaW^77Zg7D< 4luxWtx{&B~{D#V,y!4N&RUM8YE72w_q*/@/c*Z%l]nF&u[`pq');
define('NONCE_SALT',       '6(}A-!zL`g:r2t&.2(Lv|V;*Va)?C/zOY* r{),6;>?3_E3j4.Akd 4GP-P;(NA)');

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
