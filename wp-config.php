<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'noels_db' );

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
define( 'AUTH_KEY',         'S3f0ivdOdkBxkl.(36>&o4@$;3!OT(JI-U)X_{D<jP83begjiAEV2wF.q_384|G]' );
define( 'SECURE_AUTH_KEY',  '/=P]3=F[{YHbRY*HNtY7c4xtH:TDOLASQ3Xx vsyI5n)[[gT5s1Aai.LT-eiYemq' );
define( 'LOGGED_IN_KEY',    'Te.!-_.r:C9A&6U@^J.gN{+W29UC90cQ,`[1UHC<Ub&8Z@d2msr-_g;3jNAv(]Nv' );
define( 'NONCE_KEY',        'EZ1:N+RZrQu5R*=@f?KVDF,- x:L~D|C(?q2=Mhbs]J%UI #PIc>Qz3HJ#fg=*KM' );
define( 'AUTH_SALT',        '(79m U.fjWEtWa-Sch:8SV4*->A}w@[luzUANWr8%5;hMRcOSBwwvXeJ{=I!z@^7' );
define( 'SECURE_AUTH_SALT', 'NE{gxJ.i.MmZC}8AzD}F8Fs}[S[[(l}r{5P:[!iog@ZqL;ag:n#v@kWC;Or71f:M' );
define( 'LOGGED_IN_SALT',   '7L p_YWZ.T@rT7t:>LhXT##B=UM7ZOw%TuCKs){97H`}6&gGLHhSNK95*c[b]!>m' );
define( 'NONCE_SALT',       ' `BsI19?iBM)t/dXHy6mh*E?_Y40R|0bR.6Rf01UFF* 7SD,{8WZdNuKjv0C,?C*' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
