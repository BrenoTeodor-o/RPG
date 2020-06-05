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
define( 'DB_NAME', 'd6vams7o9irke5' );

/** MySQL database username */
define( 'DB_USER', 'umerbnpnknwimh' );

/** MySQL database password */
define( 'DB_PASSWORD', '6e2f7b5189327e58ac6b527eccf9db6c4cb9ecbc4d4def517d3d67b4a3cd843b' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-52-202-146-43.compute-1.amazonaws.com:5432' );

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
define( 'AUTH_KEY',         'sq(Qf690mcFapCZt,IeJlY^w4tMl>dL(Gz,* T||ICV/GohF0mldXqn[ZJ[~9j!H' );
define( 'SECURE_AUTH_KEY',  'SYGXok!(;$xD&oyM%PtFpZ?jF)Labf~@>=]vJL=Pn_ibWu&peO48`/i_w@H!{R{[' );
define( 'LOGGED_IN_KEY',    'Eix*#5]rU?ZhY]!WxL#T>tl@~EVVvD@L<`gx DH&J0&lbSgZ`t?-2`R{Z#fO~h7U' );
define( 'NONCE_KEY',        '4Psg?Y*,*jr]G5Utd)z:jr3$=SY,>6(*xOM!WkP/xlG1rCD`h49Tck%I/Ok8mKpf' );
define( 'AUTH_SALT',        'iIFFG(UDHFP+e}O[AVlK`1?C*JR,ZP~b!nDA iuY:fqQcG/GX,ki-|Q(#N2H;bQ0' );
define( 'SECURE_AUTH_SALT', '5]?ht2xG|?p*FAz,j-PuHhKUK,[$!G*JoAjJOJ?6@#0GYh@Q$A$!fhjEOU>a.&](' );
define( 'LOGGED_IN_SALT',   'Ll |xCI{L$g!Pq?uC45kKBXBjh03I%_l!4DC6o4n5zgGCFi> VHI`G(cQQK^W1v+' );
define( 'NONCE_SALT',       'Jb#Gwc&,&uP+i(lPk>Ji?L4&GJulj{(4*eCKdkNmH&^{PvhKi9k]:n0WhKTL1%[Y' );

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
