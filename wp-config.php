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
define( 'DB_NAME', 'wp_averspay' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'FXbnxI=?l6Ctc-5]ez$uTKfKpDBqBlKG5~@kBE=s?-cEDuW$x*,`/uImoQBT0yMM' );
define( 'SECURE_AUTH_KEY',  'h,$:P|HzR0t?G^3gZ5o#*Tte.onX@RXdqFe@DlC|T~}<<~MXB=/NDF|3c7x@M-Cz' );
define( 'LOGGED_IN_KEY',    '1TkiGvt0c&8J9E%U]45bAi9~W$)PXE{xF8mWovl-.4F~dx:61<l4!JC{<~0QE(]O' );
define( 'NONCE_KEY',        '/:9t5!>ERtnonX#XCVm^r|=)`F=RSb*8Drsl00Ebmi_m#fU`;|c|=5M_FAt(>3M-' );
define( 'AUTH_SALT',        'Q4/ARJ!%qzr~#ggZN+Tde?zpPvN.f2u0!`1y[@8|Pc&PXWqI=!JpR A|CQF>DzOC' );
define( 'SECURE_AUTH_SALT', 'Qd(3FyjOZteSXsd!aYP`}]rrF?d#S02fL.-^6u%.:k^=3~%WOcQy>5#2/$Mng]O(' );
define( 'LOGGED_IN_SALT',   '*QowJivd;uUb5FlYmY.F&@m&MeKF!9wu.1Mf$i3O.b6kjCn((F-s+lfWk$<Az&l`' );
define( 'NONCE_SALT',       'z|4V_mA6~jw*TE>z3yS](*Dr?5(VdI#UjSnc>myZa9D&+wqGoPz.+u!>&7:[!^B;' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_averspay';

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
