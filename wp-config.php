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
define('DB_NAME', 'geotours');

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
define('AUTH_KEY',         'Ql6)]6HfG%pT%LfLJ$ /ybc0MS lB:rz%,6K@645$IAb@#TblJ-6n |vWP{B][5k');
define('SECURE_AUTH_KEY',  'Y;Lc`X;lyL^!h]IbH/):zJe[o#Y:EG&D7ck eJ?OXgf-=c^+*^%hWk[tvu}06L,.');
define('LOGGED_IN_KEY',    '%ZCSE6U$N+ca*Bx<Z]ku6Eg7s3nrF4~fQuuUW k cau6)t#PnfsGH;o9)VO@&f=d');
define('NONCE_KEY',        'FC<cAYpvmLvDK<YiJZ8?mxTt*uMyYI3rKuu:r5SBC02rSnH,x[tGh%bu$wit6_V{');
define('AUTH_SALT',        'KVz9Um+o<1 Ehv,YGi;uyK~L<rAe:H3ZnCvduB~7Q]Vg5XRQkG*/z]?aXB:W}$G=');
define('SECURE_AUTH_SALT', '|I_8t/WPB:a%uQ^|Q%pv-Gzjm9P~ru  ^M8$/UNZwtK^mc*7v}/HCYgpLvHx;eiy');
define('LOGGED_IN_SALT',   ':O-fjq.ZfS>*Lr-mH=-dI>8Ee 1S0):p0|:PuV@uXsF3g$+^Iig]saB`k|hV+eD]');
define('NONCE_SALT',       '?9NOjin<8ct!b%1LYFC<fZr=o)sHwT*rUSx?>Zx/ZuNARs*UL6|>[E J@P;r.5.D');

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
