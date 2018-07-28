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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'Prueba');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w&3r!poh21oq^MT^?JcQ T*U*wb39nQaFNCoU!eG:P|Kcb=_u4pAs+dRkUcf` %K');
define('SECURE_AUTH_KEY',  '0Ckr)=jM|5Y*i_*8nlTS({j<lFksDo;2ASum`HrQ^m[tg(B3Sw,ZU#}rxno<fJT3');
define('LOGGED_IN_KEY',    'odzJk!n@(;DeBa86YS|rovLC>CL)FVy`C(lhWKH.nb|O2Dl*yGs_OAYmhQ@n&0*Z');
define('NONCE_KEY',        '(4S`7UC)Tw#gjHxagDee$T0d=Pf&#Pw-XN<e#->ca-:Lqvm_ZJyG7zZ{g7y-7s8M');
define('AUTH_SALT',        '<]<fEn;7dh7D#MU.tRj!=;y)mj%A68p7)6dG5sh5|~J15;,W:[;V-s10jI;c-mV{');
define('SECURE_AUTH_SALT', '6%:SYP$}NU,{l3z`x&%Q5.v_U+)3xuo2y-Z37Sm@C3#:O=K5fEJG7=,=gW}RSv0^');
define('LOGGED_IN_SALT',   'q<v+nup~3< nAcTY.dIbMHxLlm#$c`jrVD7OL5Dz=+__@6~wRJW3=r4UEN4^sMDq');
define('NONCE_SALT',       'U^z-aL=&AZ+:2#P(r$zm$Hx>w^540DGXh8,?(*-WyO`t.lc^d|V%P6tQ>M,0|ufY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
