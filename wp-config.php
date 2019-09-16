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
define( 'DB_NAME', 'demo' );

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
define( 'AUTH_KEY',         '_V2a-,_c@)`6dK|;[gUw|6X<mVLFt-}]wmG} >d02Qa#$8F7(:x;xH~cz=ZpL|&g' );
define( 'SECURE_AUTH_KEY',  'Ed_W2u=A?? jzlO7L{HP>UcJqPL^Q;<lKr$SD5~RV{B9|>fG:/R +d>`-X*VBL~.' );
define( 'LOGGED_IN_KEY',    '6HGG*N/k*y)o&*].W%Iz/|(,8BTu+`SxEx+[~wGFsm.;[[h^ t_/?aU lIe~Z<mE' );
define( 'NONCE_KEY',        '>u{tw^v<CwFa!o/3Jg*tDz@<zf$,xB TrnYW9YlM)+QyRgdCCrD5Ay2YS.cM3&J9' );
define( 'AUTH_SALT',        'C`i<A&&Q7JqBO{T>>|aw}p[YmDn/atTO}+jGx{+{O`qRlNr^>6VzLP9Yx8CKW/Y+' );
define( 'SECURE_AUTH_SALT', '1}dF0x=iR{@n+TQDbzA_^l8D1Z,iNt_FpC`|!gn~ZpR6,(@JO`#Q>bhs4{(r4B>D' );
define( 'LOGGED_IN_SALT',   '9 }_o4u2<Q.;V?g^Tifk`42%u<B5TMt7q.cA^AfZ3pY6/D,QME^I8J(]xgI~<>Ow' );
define( 'NONCE_SALT',       '?A+exqig+#_F;B&2E-$Vr/:)6>AVn7/4vYn$oClxUjX])T)poJ{FuP@siU)@^7kV' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
