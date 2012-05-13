<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp34');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '`qAsC::<)1X1 Tb&@+he!B[3HHz2FDa6=~#szdZtc0z?J2FVq@A5!BwdX:<@xW<O');
define('SECURE_AUTH_KEY',  ']|vS+xm9-JF$pgRm<K5G /pVY`mLn`k*H]=_N<D<!RJU?E+J0um=XJB7+0N;9NRL');
define('LOGGED_IN_KEY',    '[4mx)>l7N)|/bQ{>B49@CH_ictI;?8CS$[.zGB^ne. cUdvlq{PB&8HLvsd@F+f%');
define('NONCE_KEY',        '`:;R<_*M(GTr!rG9jZG($jS(?YQ,G&FqaMh&GpV/g}]RQ_-Yz.PC=Z4:/HkLHA9J');
define('AUTH_SALT',        'CSwrZTe9h5W-BP5xMR}kOP&zGvg_6QIOxZ2<-SCn_Bekmb<X<}ZfQe&6Lv]j3^$$');
define('SECURE_AUTH_SALT', '{k3J^. Z s]U;azx(f]P{T<I*k_$xy1DOTIH?;/OLbVMjk2=x_*uC[oXCp^imv. ');
define('LOGGED_IN_SALT',   'AtY{3KQJ+0<@]C`Eic^@|S~busnHdRm(prnkl>V xM2e!t]sa&v(XiC!9E4LF,,]');
define('NONCE_SALT',       'WGkFb!oJUn8A<Y6^:Lb08q*~Nby*;!W4fg>n4N{,[/5e@~e)Y9+n@$9dRCPOsPR_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

