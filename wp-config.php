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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dgpl' );

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
define( 'AUTH_KEY',         'FW,aWzHqH=?ukX~sPMlw/JG&li |7bXg2`)xXSanHW!m3%9^0-@ZpAK4_l$U@cN4' );
define( 'SECURE_AUTH_KEY',  'OQJW}qyGA(`yqEp2#Bxelg<Kj)(iC{K2TV93y~;3/Ev9sHk,dRtv+/yJtiFlB&*F' );
define( 'LOGGED_IN_KEY',    '*@ms4epLDmK:KTn9z3d$c_9t*#!o{q`g75 Q~?BR{enJn2teE fh3#X};/90P|G^' );
define( 'NONCE_KEY',        'X 7)CA52{yj!7}?dRP2,in(/ti}Gx<t=kuApa9arFW@k#vD0wWRWHW$[5a7!F0AM' );
define( 'AUTH_SALT',        'k$tWFetTP7o+A %A*|a>-4{70x~Vqjm1?.0),thwdWKFqKeHIhveXd mOn}C;x?L' );
define( 'SECURE_AUTH_SALT', 'Haio8&PcD*v:B1&{kk%+|=bAh7qHGQVIzc>^1&h1LTc9G^/1g35]nn{`=AXsZ`T3' );
define( 'LOGGED_IN_SALT',   '7J])KEVa#n_]w7l=G*IC?>4nE KXiXUfygUK<an=Mmo9?BwRrdi,Jrp)d=.BOwd9' );
define( 'NONCE_SALT',       'miK~)vX8a@,Y3ASUPia.hkb/X/J5qMdbH%N!&x<YuwhS.JzDvd;=y!U,<kM*bycg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
