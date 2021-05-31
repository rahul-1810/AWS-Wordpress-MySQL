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
define( 'DB_NAME', 'mydb2' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin123' );

/** MySQL hostname */
define( 'DB_HOST', 'database-2.cdgin0nyvxgw.ap-south-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'IO#ttk%Aav-t)s=F*mRoR2NQm8QtIJ`8|h<ghjo@mb75I,W%TLEF-_M9qZ>HzS1!' );
define( 'SECURE_AUTH_KEY',  '+3|k,N-wq[cgRXknRQ;d4im&yZz9(,r&|9:>i@P#oQZSQzt->*KiDbSPpXb@`G&*' );
define( 'LOGGED_IN_KEY',    'JP:C0[:v9_8=S0kcYXiy{j*7X.cICp(dGAPXUvkV7sew/_OdtN4o+]@K+OsLDQs&' );
define( 'NONCE_KEY',        '.[em$0I3DPpA2rp,=PHX/1&/=y7tNOL:<je0CaCYQL/:{%eAs~xwAnEMOrUwfZ1t' );
define( 'AUTH_SALT',        'ZDzpeR{AoSyVN;B_zd_7*aBUq7&WqK/<rBUE WcBTunh1, +>Z}>]Mx<n+FR5pU,' );
define( 'SECURE_AUTH_SALT', '~];+_yDE+W0kvK G8X[i%4P{:vR3uIK0xyw(t7oOa7%6G5imbd4<81E)c}ity ui' );
define( 'LOGGED_IN_SALT',   '^}Zqy$!tq8ng$Uo/_3E!wKO2&j&*KDs<0-QZcmmrVI(F5$ScXB{wnE[6<dA!Anqk' );
define( 'NONCE_SALT',       'Egp[0SuvQb5S0F@sqW_0f8Zjp68ue:&B<Pt1st8yd3EOa2E)$w?q!yFIIKniCc~b' );

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
