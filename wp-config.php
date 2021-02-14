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
define( 'DB_NAME', 'emmet' );

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
define( 'AUTH_KEY',         'zf}.@$m..OA{cbv78;%EGthG~kH8Q6qOv)q h<$UcE,m1V?F?!3V}-p)(NCMfZC$' );
define( 'SECURE_AUTH_KEY',  '6YRwMNl@$;]#E0Pj#k_7b/&Y6*Y0YdZh}60NrJjhwiU)sA_dCtb-^>-{3rU?.v$x' );
define( 'LOGGED_IN_KEY',    '-@C_2H}P0l(7X[>R8=sNHj8W[]{aW=;bv%FrD$jS2%~g0!4(LB+bIktju/DlTZ4I' );
define( 'NONCE_KEY',        'q^K,cz9W9t-n5oiC<&1w6~]O{7<BW%?f [dqyr)3.iOeX0-) G1F8d_&+E,Mg`N|' );
define( 'AUTH_SALT',        'DaO0Pj~q</T.Cs#:L,N[jn_g^ z[0 ewo<Y)y&9Q)z21RtY:1VM[3My5j-D3fnj[' );
define( 'SECURE_AUTH_SALT', 'R.LE goo|8?C|<ioyY(+xx8&CrM4fSAE+O(Xa)G?bA<FV^m+PdPX5IdtQoVv#;Wd' );
define( 'LOGGED_IN_SALT',   'ghoLNe4b9g^>+h)=SrDZ$,YUASIB$u!G}l&*ujo]{Uh3ioL}T8H<eis/Fhnt7Is*' );
define( 'NONCE_SALT',       'AEYJ):,zp_exiI+_KKcZ+fAZ3n]Ax>ga?e_WEGlqN;fT21+_Yom<8Fxa>n,!*a-_' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
