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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoppingcorner_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' TP]=>?w#WDOe!hXj}R|$S[pZZIyE  g3$``.Vk)A,_QM9:-gt!3!XoD_w|Gb[Z-' );
define( 'SECURE_AUTH_KEY',  'U%enziCW14dR`#/zim|W]SGl?i:V ~i>Q]T#D7hcYt]Qo/, zaR$N(}oLzrmAzps' );
define( 'LOGGED_IN_KEY',    '~?w#i[qE<hejNr;v# 3t`#9cbyCPp9l[Kpm|oMV|u0g_/fZfU}|#}c^M_~f/Mqj`' );
define( 'NONCE_KEY',        '0pqp26cl)sW1tzkVVh+?8)7|>fM:8YkSaAn7<FgOJS-&,>B6|o!XHW<0><*M_INb' );
define( 'AUTH_SALT',        'A#{}(w@&fRUi}9lhCS8nK!N+_Fn=sBgXZk82de]IK{ 75/t1Q`*D<o:Z*,U51A&H' );
define( 'SECURE_AUTH_SALT', 'vo89KhOid-=xIiGXy<V/HUVVBoUS/r1IXG/{dV^;ESgFm#LK.)s9YV!Zf9!a<)h*' );
define( 'LOGGED_IN_SALT',   '4`.;&RQ=af%oji^ujj8t_W%@4R^wT-cpYZoo=q6@7ngELb.@oEw50*wyZw.eflIV' );
define( 'NONCE_SALT',       'qBD7v,F&tQzjuD5aKAUFt.tGz]B*>@R8Wc2HAQ%) NSa*F]Ep$2:Tfi#jgX-<BL|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
