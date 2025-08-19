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
define( 'DB_NAME', 'dreamproject' );

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
define( 'AUTH_KEY',         'Y^E*ewPHfES0$K~0#:|{$BlTeIq_bbY]dgQ,!x?@q3EBE9p]1}M.OGZK~IF]FZQ<' );
define( 'SECURE_AUTH_KEY',  '07Kp$mxXi=#9=mM@,-357bWve P]ak.Rqavy@VH!PuqWG| y2_Rw)5a[xboIm|s&' );
define( 'LOGGED_IN_KEY',    '(^N}RVhcN|iIL@2sfb2SRf-7nJcJK02/{b*Wl`zrr>O2qEOS0*@y8b**,$mr5vd6' );
define( 'NONCE_KEY',        '}JKN.fJs1 }QbOnDNDl).Hj8i%&F+`=tsXrf4RU`e!9JOSdNCF4T|AtW`+?OwIc8' );
define( 'AUTH_SALT',        '?`}(ib}R]&ip%}F|Pzp=rkq;mS+Z.)0$9KB&io&7.BEcmF2x*Fk+F/!enF94~Z=Q' );
define( 'SECURE_AUTH_SALT', '>ql=Zl0[ASzSB6Zl[orXKE.Opv.HP-S8bP?7FatVE<Eu8i7PzAWV[$6KH[.1Vt5^' );
define( 'LOGGED_IN_SALT',   'i`YC@s=^CL?;qD<&~4M?+mIB]5DDT5WKWZbaOi13]XpU}/<[3y$tyS3g#t&0C[)}' );
define( 'NONCE_SALT',       '/dtU><HMf)B<13:x$+0g>b4]~#g#%[OwP{HDr[O<=<7zg;%sDa,r3!]j@rxTFGN@' );

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
