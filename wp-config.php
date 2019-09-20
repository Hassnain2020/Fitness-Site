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
define('DB_NAME', 'synet_paleora');

/** MySQL database username */
define('DB_USER', 'synet_nex');

/** MySQL database password */
define('DB_PASSWORD', 'A1nexstair477@');

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
define('AUTH_KEY',         '9y&d]GcIy&?KjQ3[>-i/@bNfRvTC:WW58=C]T|TH:g;R}(Ci?+c{Z9@GeKKBSP[%');
define('SECURE_AUTH_KEY',  'gu2$c,D?%%pk$R~J[MRvGXY&q>si)4Y9!Yw$ou%ihK.*}Qo]*RP[1l^5@21}drUm');
define('LOGGED_IN_KEY',    'I`7 [PF#61^]/ SH=i4]@dNMN7gz;=(.lV)I<9Rm`2]1*>Cc.(dO`eaV#[uh>N)N');
define('NONCE_KEY',        'tMgVd|XN`}|02X`4{bwp#Y&Sv09}vmb=i^wWOE_&ZpH$gr$v9,eGc]RuW2d;I^9,');
define('AUTH_SALT',        's0(@2*u0BB)0QtAS0op^)hVXTTbum!qH-88OITNf?@Wn$M13Kf,V[ MHwcdFbZC{');
define('SECURE_AUTH_SALT', 'RJ-qbTw[*9(v221*R;rEc2.#md_7gru>O?S.nt]>2L?lBjoO`[F.._QKK>E(&1@L');
define('LOGGED_IN_SALT',   'C+qoZBQzQ|h5,4P*%/Lc{0&rW8^4Owk5)!y-PVj#iUpiBJJ*4r:1k#?KxpmT8nph');
define('NONCE_SALT',       '_%A*bAK+yu-W7AG%W[^`/uLBbkJK8Hsq~V?CccA#]@B%h$#ea9$~s.*~{p&75CT%');

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
