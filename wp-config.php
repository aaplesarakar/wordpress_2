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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'http://digitalsevagov.co.in/' );

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
define( 'AUTH_KEY',         '+<(vd:-!6AgMKh17<gE`RU~QB(`0=:Km|rP@F^BM*9J|vWH G{>{>CgH<40}=FG_' );
define( 'SECURE_AUTH_KEY',  '$QM7eU9_F^Cn=Nd.wxkc?P(*nuJlLTa PiK|SaY8A_hv8Y~Yt2G)peP:M ux~l3z' );
define( 'LOGGED_IN_KEY',    'u*F*^w.qB5(r<y_idTt=hw~fA^LY7e6 D:r#/KeT75]^jb@(sAu`Q=.{w.F0DRxg' );
define( 'NONCE_KEY',        '5>*m5%j5W:GUev*Mn8 G|d.7JXZT-Cp<bkyC9O6cn5}K4AOY~|b81oWQa>Hfg2}]' );
define( 'AUTH_SALT',        '85|IF4V9))[{Sx pA9Y7<V<i~~CI1B=++!MXl;ckV&H<q_iyx7*V%0*J^3`hCh>X' );
define( 'SECURE_AUTH_SALT', 'S<j_EzC<8jg#wP [Lff~~Fl^8NcfhhlfSAWxt^x9Da{/4]u^C#v4J$L_w~eVPDeB' );
define( 'LOGGED_IN_SALT',   'CN(,JR#ekZF>`$Gugo&tD2z)dlvH$Ix/+fm]qc2@Y4I} Q}L!HMF_ liCL)!1COb' );
define( 'NONCE_SALT',       'ugBLk$(nFiZ3ia7q!BULjL-ko<$-+H|[m]E*jKo9O_O|uGj}uid%;Mimwud`5d!J' );

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
