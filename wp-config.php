<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'dddd' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'szv ^NxWGiP4nyxvns4bL^)4h*w]IfFs%j/$+r+c2FTY&ZT%e;?zi{HT}jEW7^cM' );
define( 'SECURE_AUTH_KEY',  '-|x~#$!V2~8oare`z&r:[I|,jwkh&LaDr/3A5Mr~KKn(S,H]$#^d+V%4q$}T~SC_' );
define( 'LOGGED_IN_KEY',    'd_pz9E}z$js;?hQg.I5]Zo,6KDjBXQnc9isTsqzD+v/>O?5o>[,=ZQ@;lOH*>u{j' );
define( 'NONCE_KEY',        '-?VnS3=WbA.w^od9i/MfB]<::lH~F|Y)|&dAv()3.v~D1T4iU|sj.DgAxcPX@L*s' );
define( 'AUTH_SALT',        'YLj6$3kO[3V eerYBew1aV%.S7HT2#ujZuHf2]9?6WS9xL%~lik_:^R}Q :p.7%b' );
define( 'SECURE_AUTH_SALT', 'N:4.D3kcl&<cg)1xDGtv<%Q|CnalWWb1o[s).uc;_0L&!5%BfB2k8|XH2y[fUOry' );
define( 'LOGGED_IN_SALT',   ')[cJpvpSU={}DxfC62*SB `1|]#-oDnd.[rv@a2X[a|2Lg=>rxb6Cq>gQ;-#E/M_' );
define( 'NONCE_SALT',       '5,Se@eaRPai*(`9(Jc3)gA|;h7:()([ ^wfeG.EWXf[TIMEsUh?1ZHK/zc?c9)-%' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
