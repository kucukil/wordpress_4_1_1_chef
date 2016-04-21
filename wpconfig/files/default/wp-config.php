<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

define('WP_REDIS_HOST', 'wordpress.dezaek.0001.euw1.cache.amazonaws.com');
define('WP_HOME','http://d2f14ahwfl9ckr.cloudfront.net');
define('WP_SITEURL','http://d2f14ahwfl9ckr.cloudfront.net');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.ci0fwgizkzau.eu-west-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2qH3-{idWgP*Xg33o-f}|e<e+cm!J:XeL#BWG~w6uj|_BP|r,!CNQI*XkdBXyZ`j');
define('SECURE_AUTH_KEY',  '^|wMkKqw4y:#Nw{r`Y9Hw]A&DjI2cA!HUYcUE58^6$Su#[1s<.SC:rfZ:5o3E!IW');
define('LOGGED_IN_KEY',    'lTU3AjxUKAz>hn=[C@)G_/7x+(OlfT#*F<s*L0N]l~c.nrS>hl`^_A~*PLawbyl?');
define('NONCE_KEY',        'u| +W8Nmv&o{=i8BfmciQ>fhf%_MmyBm~ghJ=L|_C6_vf@mVJJB:zV8F}[|#|nR]');
define('AUTH_SALT',        'J{Lg_+;`kwGi;^x4J>b}02WyjnnS{A|x-%Oa1o;-o}I%IU<$cUKka>_$Y!+V)vOu');
define('SECURE_AUTH_SALT', 'w2p3<#{3yy`MXI,9h:zEO-f|%gYa5p-TVB_(q[Zyi@enPYgz={N~IlemkO9upo{3');
define('LOGGED_IN_SALT',   'p)_YvBKf#hn0X@xJHSX30g(CFaK+$|c`v^J1S8f?lX%TAK_gI;Vh.Vvf0-9M[bFI');
define('NONCE_SALT',       '1Uds-7a7hJ^ 9eV1{d(1Ef3F=YV :LyRGlB9Ha<x6dh1S}IiaIFqxAENTt!SwQn+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
