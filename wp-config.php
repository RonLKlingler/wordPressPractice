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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c77c119c59d33dea0fd96d6fd06d72c31ce88e9f8947cf09' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '(AV?UquY>V9}vC`CjN]q9 ;my5`_vi_*dpXc_`[?LLwBnT*8E@l`hLcH4_R4hcTP' );
define( 'SECURE_AUTH_KEY',  '$NpRx=@VDpz5Ckesou:yA?F,3ea09zYPUFz*5[b)H{Df=DU2N=lL-]fl46#W!]g,' );
define( 'LOGGED_IN_KEY',    'H]!$$%l?I|mkpyZQUJu`9>xeCU1Xw dhPUJ[W ABwX^sE+!L^>/28X#:IymP4@+&' );
define( 'NONCE_KEY',        '6mZ0o,_8qHnHfc2Yg9^I!V+nc(~E@(}Zy^4w,?K}^U,QO)AwI(`@/3%b>SWETptr' );
define( 'AUTH_SALT',        '&S{lfE3]r9<`s{K:)9f@]u9`D]js]}g^g,+jQHNLOf44qeJ<>Wm-}4mx e-=pEeY' );
define( 'SECURE_AUTH_SALT', '$a%;b-o3C{n^BT=CsL-h9I?FP^*_gh9:~pWHE(I0@($q8B>m[<,FqA6g_tY@+16D' );
define( 'LOGGED_IN_SALT',   'tW%Y;$FXMxeUnTRbmfyZrf3gxHQ;zr?@vJAyyuN}te*37bTHR`q3jcBZVx;<SVoU' );
define( 'NONCE_SALT',       'p%AKmd]^:?}!yh-w^rVE&~?G%+-m>!]5Rs_)MrL@E|~~*a a~/*fs`:5t!jHfZ91' );

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
