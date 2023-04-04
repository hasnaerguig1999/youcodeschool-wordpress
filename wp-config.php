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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ycs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '){{%Il5w>rm XUexcKEpn`TC0?6cNsFI.9I.xeiH{C=u#F_?[zrMD5M.X/?]gPPK' );
define( 'SECURE_AUTH_KEY',  'lg4=e#(%6$:WD5N^pe6C]~wa(YFPF|L.9!2F)^f=x7-%NKTd(bC@k9W{|i5v5Sz(' );
define( 'LOGGED_IN_KEY',    'V/CV%5Ah@lN$(>Iu[}79Nj~ 6r#[N7Ud=m+hWw -Xiq{`7]!`$N=-|tUI]%`3J-6' );
define( 'NONCE_KEY',        'RINp/,w$`!CR0?%BJ`nQ]22,{1Rlq#8UX5n11Q}zspQFCg0~P|XVhDC[p*N6_qAR' );
define( 'AUTH_SALT',        '0pG<TOEOqr,h; AL.~{H|i5lJK|CN_.1N8~77O06=1,Huzg1L$ZtxlETqZVd(XEq' );
define( 'SECURE_AUTH_SALT', '-f?M4eVE`|Z~ncNB-@3-}A,zM<T~V_RJ![Pq=:D6pQA0Q89R=U@.xeg(R+,#3MRh' );
define( 'LOGGED_IN_SALT',   'h8l[N6ZCeh{`NQ/Ms#htH%N[{NI?c<@)Cax=tVFRTt8pU<%y#=/hO18+SI0(Lo;4' );
define( 'NONCE_SALT',       'BXuOg&ue/5S(|k6Y3`Wf U<)Mku7&r[6HVkaX~&;&wRym~Hbc#{lf-F<.W V(!$K' );

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
