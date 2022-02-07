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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')HX>iIG2fv3$X9y8>#o6KcP90[r[k&,k}|4r3t a-@?Ds;yZ~0:&+,H$OVc?p3=i' );
define( 'SECURE_AUTH_KEY',  'g!`Aj6xw/pOZ2ld=HbumFC!>-hrIUZDcr .1xuF&(R=x1Ooit];43EsXBV#$HN!S' );
define( 'LOGGED_IN_KEY',    '>rr2XYLbB}#IoB u|80Oe1G5ab84`>Ic>oF/&Bk5r+oZn_d_$[qS9mbMDbXm&6m^' );
define( 'NONCE_KEY',        '|R5hUz.nX_,/SHM!~~.)8X=@<0+]`QIDcq)#5t+2MZAgwkH9Ua4/E]e`Ge?q|L~z' );
define( 'AUTH_SALT',        'v.)`ngQx9p8?p,X+_,60dsBd{UD:J~==G]m}a-|Orwx(NQd,h%Lj74YFb/D$k+Y[' );
define( 'SECURE_AUTH_SALT', '{3ct|~41oCi&!F;Ng`n-fd[e.w<r%2a{L]ksN<Yh#UnZC8BwcQjXu.v`R-kc4Q73' );
define( 'LOGGED_IN_SALT',   '}qey16v^wV6zuQ] 9J<bx[[AQ4yks+KeR1x#|Mx3g#<]7aoW7*#L(b80pDVV1zQ?' );
define( 'NONCE_SALT',       'x%z0r z&CddmZVW0M@bFLiU=iS_fDogZvVVL7M A9H,QJWj$GVD6OL+?<!~|.~q,' );

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
