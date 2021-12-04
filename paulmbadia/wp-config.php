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
define( 'DB_NAME', 'mp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+kQd#7Zqj*P1@S<@A<@Dfs2rt:DDBO&P`F#LAVxKq,#*8q5*{EpI( g|g;jWuj;#' );
define( 'SECURE_AUTH_KEY',  'Mj@v5-f/a)CpX$x>2Hg}flBIEqDq-~|.Ii_-RgDL5[2WY[>jTX@#nkqcF]v0xAzA' );
define( 'LOGGED_IN_KEY',    'A[EAgjbV_}b|IWTA^Rz5J-_Oj]HeVvwR80V{1yg|Y~Hq8Lc!Hrfn8a5?2GPr*|=.' );
define( 'NONCE_KEY',        'Ox[H=FK>yBW0};4-tvC)]NN&V$1Vu5zd?xyE5a=Um!A=zSGT$dvBIeFL }!it?7 ' );
define( 'AUTH_SALT',        '^:}Qhcn<A P|6Yn]#}@/dLu^1x+R,<uT*L+XX,5^K-26E8qrI~DEcsoyW`BiqRK-' );
define( 'SECURE_AUTH_SALT', '%xN]V-Y(A9LA9WWzavCOZkcFO;wOkoC>+.&y}cac:Is0Hrg?+DIMk=7;ioC_dE1&' );
define( 'LOGGED_IN_SALT',   'yMb=D(xx&>dmut<A0|={5d7,ku=D*_RSIgxpBt]S}]NU-azTDi0}Q+Q86{vLqoh!' );
define( 'NONCE_SALT',       '6#~&AnBNI|_:laLQ=4M/88{QR]Bay:!kcw:Lt&BC?9^{.icx~~M0S?[C]7p^:HvI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mp_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
