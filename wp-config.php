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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         '4 h}-Q52pG/?=84i^1J,flW%AXHyj(y;O4U#l]RaB]74KQ3eDy.d!wPRu^J.dPyt');
define('SECURE_AUTH_KEY',  'vFw)r0ZD$}qds2S#.`s{;.sb(VFIxPn@[Nb@}*uGu;l7*Okrd3w+kiWX,];Us|?h');
define('LOGGED_IN_KEY',    '%UoZ(hvtc$]5`VDs<~j<R&NE~UDM3p-6M;9-*-XV@e9l|^gVhU 83=2*>t.C[L6s');
define('NONCE_KEY',        'u?{DLTmdD9eozt@LDfT&ivwjYT(,sJW{1Bp6ttOV?it~,Sm/ VR|>Wo(03e-2E?y');
define('AUTH_SALT',        'ZSU}S8@ ~qDB3G^+nA=<$Jzd@CWZ40Q)?ZGOXLn9+1g(T.#RMvmotk2YApTZ{R9s');
define('SECURE_AUTH_SALT', '7-ZLc.k|m>dqcZ-ZP2~QFrQ$*GsqSJ?@{WknMQf%yyq*(qgur>iZ2l0}m+|8J&8t');
define('LOGGED_IN_SALT',   ':XH=P|$2x$M2~($yr4aLw6VOZ^?A<,9c:3otT,9r)o{=W>A$F_hVcMx0~Dx?KcY=');
define('NONCE_SALT',       'C$G(-]5nD<Z!hDNH/yJ,Ik907tT!HX@V8;c3$4|wzav5l8Aiw,@0Dhl$TFKI7T5t');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );

/* That's all, stop editing! Happy blogging. */

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
