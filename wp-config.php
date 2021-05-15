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
define( 'DB_NAME', 'potchie' );

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
define( 'AUTH_KEY',         'aeb_&lxI&6>C<@5l02wZB_z*<%$?kj&$8/5*|`C23byl5Jp_,}P~P)[[r6E7Q6j+' );
define( 'SECURE_AUTH_KEY',  'ntEhXcRbX(ENhtT,O#>_Ap.MUja$fq`Jv+%@NnB5TJeyi3[<QpT1Tx~%$j>.DDyQ' );
define( 'LOGGED_IN_KEY',    '+$u=PO^j:S1;|[|K]4_Tl_%u?=e!@n_354W$&+JmUj<)J!t)`%jh$U;QG&eDg= _' );
define( 'NONCE_KEY',        '?URmAB7K`aZm6F.@7kkJ[Ua$bMs%HM:ak/R,PycK)?~vxd[OHI&dCP[t5X__^; /' );
define( 'AUTH_SALT',        'asHY4|MPM9GYJ2zH2-;G{NdUcU_Zv+ffK vnHWm6eG4^Ikc 0CeK5eNKahX6~*QW' );
define( 'SECURE_AUTH_SALT', 'A6IG#,s3wU+0+YS$lNz2Rhv~E`O<B&xf3,!E75riNcT~ jQ$gl[v5|#uYyHkK4[;' );
define( 'LOGGED_IN_SALT',   'np@[t`22$:m@p]>g<h9_1-PtH`8J=+,=Fe1*{wx^Y8}@hY_ ]3wl}L.:CO^QP=kE' );
define( 'NONCE_SALT',       '4G>W2X@e0yi+i3SX_#>g3i*5zvr(|8Io]qo$wwO6]%@y|2F(Od=22$WAr%j$gT_r' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'charlotte_';

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
