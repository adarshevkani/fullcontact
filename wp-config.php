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
define( 'DB_NAME', 'fullcontact' );

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
define( 'AUTH_KEY',         'IQUtbV~$7S,^)g`w`:5{?RnAB[CJRE&zl<}~i2Dml9V.*)W17gc >Q(@tB]yEB%D' );
define( 'SECURE_AUTH_KEY',  'E}A32DBfijay`TK^c*>0iapJf2,w}H<$e16_eKb85#Jk.[TiEn65O<liGJEl4qGz' );
define( 'LOGGED_IN_KEY',    '}a9Xv*WH:)=_d#[iR} 3=d=zlv`}~L0Bqs!XC3o9:<-c8/C$5_eoW^p<ksvc$&Qs' );
define( 'NONCE_KEY',        'iTzK CGVdQ&HhiJf~e$nqsY/w<KlleBAqL6IY#n&18VoqUx$ uLN0 HEXdT?y3zZ' );
define( 'AUTH_SALT',        '=v.tkdQ}ydO>.Z~SjQJ:2,%)boM|#Z_XR!SqI77mdef:1FSF#f6J,G,#};c;Y1@w' );
define( 'SECURE_AUTH_SALT', 'ai95&&*2EUKw:AY6bM>h1I+TqJSP x70R;Nyj8[`=2~@]uHs{3[jOg0f& Nn*`(T' );
define( 'LOGGED_IN_SALT',   '{PW^:gIO^FWC#Csf P!qid3DT7O]LH+=@}+!XE4:Zl]&qVrtVPT3henxE:ke{#;5' );
define( 'NONCE_SALT',       ',Rq+*~otPZ:T]B7zZ~3AdB/ppzu|4_M4|a4SWv6K<O~$?(!>$Dj+uT<EHNIE+FBP' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fc_';

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
