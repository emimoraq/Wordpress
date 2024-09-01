<?php

if (ob_get_level()) {
    ob_end_clean();
}

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
define( 'DB_NAME', 'primer proyecto' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'BS!{NXhWau2D A73m<lDG*1_~,2o>Yk:o&G-Nt>eP5KINT8nF;pP9}n@WL<mT27)' );
define( 'SECURE_AUTH_KEY',  '@Cy,ydoIfu!}sEr$WB}sf]J/oVDou06gBG)Ahi6b*W^xTeq$[Jzc/(VM@.Q_SKMf' );
define( 'LOGGED_IN_KEY',    'L<Hwu{-hHHP[@G70/*fZOPmagOqzUSF(RQG(1>.dyWu,CPpLf*WRy7s=X_&h-Jdx' );
define( 'NONCE_KEY',        '?EMSt}2)7UrH%:F7HIGcs?ol2cIseSVe2jDso)Yq)U+}9x$hr~%#HJ=cvuQ,U<RV' );
define( 'AUTH_SALT',        'N!~MqaSqHI~JnDx(,?~?o%?daK-KZ~jv|afv,#-!T_jC^WH^AOY^ao~DbX5{[MaI' );
define( 'SECURE_AUTH_SALT', ',8SesMYdvROo4`F$%6Ba_q*IPSgehQ=P9|^Vsderqxs&:mME/HS_st1MFRQhFQ=j' );
define( 'LOGGED_IN_SALT',   ';!y!e3)/UOs-$u@}.[V0`AQiJX;lW1`~x>o?Zt^.K*2}Jq?YM}La*DXjU`3n&@Lf' );
define( 'NONCE_SALT',       'Yv*axJ.)#HL>m%<{=BBq:}(LiG8z^4b!zK%BBzh^qlyiIj?&u_0H%|&i%p1%Z5eP' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
