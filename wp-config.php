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
define('DB_NAME', 'wordpress-demo');

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
define('AUTH_KEY',         'FaA<DQiZoC3@duZ5TFR?KLRx#cp)B/O,w6>!p]A?GeXHd*(#Sj] 0]0T4{M[HX|_');
define('SECURE_AUTH_KEY',  'ARbP>G}2XH`/BF=DCMCR :[W9n.T$o^-0=|1wPPz4%cJpiU4>s:nT 0Ijrb+dr8y');
define('LOGGED_IN_KEY',    '{}>>eo~MCi/?fRk^3.q*`:XIRiX~(R;[-cgZx8dc}[lw{SorWI0Wxuc>#l](!/nz');
define('NONCE_KEY',        'dFs_;`#$`@W=eOcJSG*o++keY(Ls;:!`$WE(U4Iif5G>LR0n?M%=PhiPs;amO=IS');
define('AUTH_SALT',        'Z5*S50Ux(r9%aYo~: 7#7>$KF%iH14uMingRIYc`whdCb#OJyk!}7 b6|Pf}5$?r');
define('SECURE_AUTH_SALT', 'Q{z)Sm{yprLR*%o!vJ~?&Q|^#2Y=@6Vm+MBQOsQz|_PX!+t~FjCqe}BnbssS*w*_');
define('LOGGED_IN_SALT',   'xbpI`)@jq)xK!^AL_bZm3z4HV-Hj?;~SA?Z~Z|.kSI]{vDW:ok+Q!tl?^nPQ21QX');
define('NONCE_SALT',       'lb}dv]!5f E&q9uJu.f0tCM.?$YRG4S{aS9C^q2^bt}/$Jr^4;NcL;}>YOd^^%D`');

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
