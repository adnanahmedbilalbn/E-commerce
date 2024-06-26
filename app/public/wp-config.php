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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          'vE)2KjxKYyQdE@);X@T}ijVH7nEA;pFOXDL?`VnD$O5&x9IywrhXH3jY`#M!]c~s' );
define( 'SECURE_AUTH_KEY',   '`s1Ja{bS+bU(Ay%9LA6Hwv#2sJNoOeP.8ovSj_MCTK(xS%=[0qKop|0N.g$c<Y@&' );
define( 'LOGGED_IN_KEY',     '6K0y?_*1alN=D@mtpIDaBR| q*?R= ~RA2o9Z`&oLq4T9$~3!/sE;1nU%.HMog1C' );
define( 'NONCE_KEY',         '~;)l?zVJV=tBc^FGmsslXA?qf,;Rl-14L%w^g|=$~EUS<ppM}nzyle2]#5>`S %l' );
define( 'AUTH_SALT',         '}J HJGe~I=(Dow.9]dhlExAL(jVR_,6}]!x%tV.7uOv.w26p>nLz{X~Z<_e8U@ti' );
define( 'SECURE_AUTH_SALT',  'BUJ??-]b9+!Glb{/?m^THo>._0t~ t;sea[|$-7}LQwuxV~Q`rAuwzYPc G${~#t' );
define( 'LOGGED_IN_SALT',    'buHVp=1#qIng+kG0|94x^q=MpGa?/T)N86PLk.5_3itS~vlhNNRBQUnjd(}G1}}(' );
define( 'NONCE_SALT',        '`+i>uD[4Z_%PW=7,pi5NiymW$zYrh2&t{4zw7I-bSRhgf>n_IOphVcQ}S.kG*?hr' );
define( 'WP_CACHE_KEY_SALT', '%Ahkl>`~xIMvjj]L<$tg&P:G~Hp;[Q/2<QF3LzQs9l >o%TS2H]@rzn]2$GD*yS4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
