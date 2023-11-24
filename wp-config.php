<?php
define( 'WP_ALLOW_MULTISITE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_HOME','http://jantrik.x10.bz');
define('WP_SITEURL','http://jantrik.x10.bz');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lklalnjr_Jantrik' );

/** Database username */
define( 'DB_USER', 'lklalnjr_nguyenthanhdat102' );

/** Database password */
define( 'DB_PASSWORD', 'Thanhdat@1010' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Hx4APsNu9er`U?YxhB(Wl#9ynFE^wN<J=FAo 5/uL(S5XQpWv5jtcLu$fBzsC1s8' );
define( 'SECURE_AUTH_KEY',  'r_C*Me<=[G(`@wl]*piqd**{u_~p:GM~&)[l|P0PE dUZkZ-n+eBTWL8@rn;Qo`z' );
define( 'LOGGED_IN_KEY',    'm-C]c0Y }-*4v0c0kxZh8:P-m/6E7NNnOL*:Ow$82KB$1P.&nk8j^5A|;a:GIAB7' );
define( 'NONCE_KEY',        'c*dysup~Vy_Kj0O@(%SVkU9^B$Jl{f)@P&#hSsafB~dCqY&Mc=Vp1Z{_R`&AM*q,' );
define( 'AUTH_SALT',        'InH[E@d%c;qoL;]B{f^lF;fI3urGhk;,j0+/Djo<,I:P~)-XT6wUC%Ur]Tn+-cak' );
define( 'SECURE_AUTH_SALT', 'Si5DIn@x!36re|82&PCNzwQcwA./X3e8x^Yw_Mo1/(Jz<<1&vWhb<i9B#XJCKlWR' );
define( 'LOGGED_IN_SALT',   'M8<yj)KiBd-};{v#8TqEhs`%MsG(5T}VW<+j::Ie[QU[aUC4>[/i7bq1{wa)`Z1%' );
define( 'NONCE_SALT',       'YR$9^z.Y2Ru{!%bZN^Ufh(Y$TdVhe%b|yY@FTLsXLW@8`}0,aoCyyfpw}vV#];e+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tt17_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'jantrik.x10.bz' );
define( 'PATH_CURRENT_SITE', '/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
