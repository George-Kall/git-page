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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gitpage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Z>L1Jw]B(oQ4Cl+IxD%NZ/_vc#|rlH$!r6bsZxuzN~DZ$(9!Yeix|oKt&p/0Kb9>' );
define( 'SECURE_AUTH_KEY',  '-V1M6:#.];y}o;Mti;=%!sOLO@W,73o2j6(~,QP;vQcm(`fYye8u&x&!L4Y{4=,P' );
define( 'LOGGED_IN_KEY',    '$jwBNDZnu}K*`i:vFc6xl42IG7h%)-Q?AL?B|wU9:njqoBV,DF)*=nrN~0kq=K[c' );
define( 'NONCE_KEY',        'QmZqt%z2R1F@QI_n;~r2afPW!?d.h7A!R5[NDGk[8yl5*EI40vl!75F,8)tor+mJ' );
define( 'AUTH_SALT',        'JH|J/`[2SNuyuBlX1z(2+Nx;l@qm?}B6F@.L ov%JCA,ZU%w0Rblx08$7{N^|pHa' );
define( 'SECURE_AUTH_SALT', 'z(^c22TZec)=%}}<K86u+TL_m.Qt%{[<o^{RDpGn.a~V}Y!/sks=/`XMRdQT9qpu' );
define( 'LOGGED_IN_SALT',   '=#~-Ynw6Q *dlsnSF<s]8c~!M%6|sK9t#6lQRI|<clKw|-|Yojqbz0:eN=|O!TYI' );
define( 'NONCE_SALT',       'A5dg^B2pfoiC~o0kNy.~&1DJg2{LdbkT*9tqlqB=z76c^?/{K8RDczl.|a&+].oN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
