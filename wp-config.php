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
define( 'DB_NAME', 'romanwp_db' );

/** Database username */
define( 'DB_USER', 'romanwp_romanwp' );

/** Database password */
define( 'DB_PASSWORD', 'RnmRsCfVo' );

/** Database hostname */
define( 'DB_HOST', 'db24.freehost.com.ua' );

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
define( 'AUTH_KEY',          'V2;{=%o`eK~8z`DG-V?iXu}rcw)C m+3I!pFxn#+WjnOAH)ZtajB&D$*GhOEn]sn' );
define( 'SECURE_AUTH_KEY',   'hv!$;rwkjDY8gr6 o7b5NT?kL7n[DLk~%2*=BH(hy{h/w)#d/s_VNy< + 5 AWjJ' );
define( 'LOGGED_IN_KEY',     'ow>y[b]aR+G<pf)Qq_kZ!j1k1}~v*900LJo1628qh)TBDZiuFBTPUFNofHa=*np:' );
define( 'NONCE_KEY',         'S)+Is7!ARiaz66V`[W9_ok<#9{i)!!YMt|6J{jkX>Q7,69Wr:<*BZHK CafAOGFg' );
define( 'AUTH_SALT',         '>b`d7T8>#Q`6NTc(:>EO/h26-dYh]NU:o|<JSlZ1~6/r,8pip#U@8J/`C;o( [T-' );
define( 'SECURE_AUTH_SALT',  'x0/a T[9rF=:<l#9r#}7(*t*~+:-ZV%BzJd`N[-!f+}PMUW6iWMz4B95htR(tm!7' );
define( 'LOGGED_IN_SALT',    'ayE.YAg9k`002x.UnjF-8AM&#_Y$=}|E(.pb]$e@3f%[e[|hI!d_5&fb3/w-J|HK' );
define( 'NONCE_SALT',        'XA*Q=B0&Um%j/OiL!U^2Cjxh*&,Co^}1D!6nj%v![r}]116o&O#= PwJ4a+LZ_$0' );
define( 'WP_CACHE_KEY_SALT', '$rdn!Mvq<b$|^1`;Ri2b]C5A7r-XTk?^cNnDjrI[/Q}g:&/,HLpjnUPtRU<F}PO$' );


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
