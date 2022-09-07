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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '|zlb$:$KF4tOf-5l]MG*JDitV?U.X t `g=4-g|`c3$`f}^WIl-{IMhC*h&RhI//' );
define( 'SECURE_AUTH_KEY',  '+j8in2ZhNhQuos!5jWZ5U)?z7?~|keWqfNrxvNmS,ZN}3~T4H`eT;ErC%Fjf 1bv' );
define( 'LOGGED_IN_KEY',    ',jSQyV_R}c|Yh!<Vo:D>hKx!}qwl}}:3g_2hWw%b<2(KRAOquY hoRwfF]Ym!l.M' );
define( 'NONCE_KEY',        '`n.zv^ Mn:BZiWv1fO_;VYOy{)Z[@|a:>|2W9c+QtFT9(R[crJf{Vz_%fZcQ5w(N' );
define( 'AUTH_SALT',        '2b4EUD&RV!{j{b<p~_N0H.]c}btYxH8SJ`yWZk-TzJPl7bv>qLmrPAH.6 * /jZu' );
define( 'SECURE_AUTH_SALT', '&02_H%+k|wUykToNkCl*EB;=fnS3THL M428CTI6#>_0iD[->F%}Vk=vX]&D,e~u' );
define( 'LOGGED_IN_SALT',   'eYY ~0qM3-7nIhOG*6hoc36ZaF2Y{#hP_Id%|^ngCPs*raVc0o<.5=5mZ]U(Fxh;' );
define( 'NONCE_SALT',       'pMBpR^Kp.+VZ^]CXI~@2sp?ekr WoQBy=3^e3]8Y&SmKhYlS93g@zmUo=M_P`r>E' );

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
