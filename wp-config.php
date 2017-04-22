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
define('DB_NAME', 'ebatechcorp');

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
define('AUTH_KEY',         '#1GMMjg1Ez<w^e#PUI/mRQX(/tzW6m/HPDWqs9k?19vt?i4zFxW01Kv{+jeEnFuh');
define('SECURE_AUTH_KEY',  ']@DW96J7Y4H;8r9:GrWP3q2&<jKtC a<kxt6>5Oz6x=)hDKoN1V-3^?)(*?61PZ~');
define('LOGGED_IN_KEY',    'Hr4Di;fokDG?Pjfy-pR9S>.G)`yIjLVT$c*HR %WE R.}D6[^,@Ne+7_MRxt>OBx');
define('NONCE_KEY',        'D@3.z>CHv&0I=u2z74.&p<m@a7K`j*0Vj)+UYc;FG<q;J+U/-),al@M0Ox@Z&NJz');
define('AUTH_SALT',        '}Ni]e*R.kRT01f?END8B_Cltz=8/[Tj2Xm+?V3Y2Vt5r!mJ`8VZoKRFH1duc8%$E');
define('SECURE_AUTH_SALT', 'dqHYT<d)r$0 6Ha=Y&+=drh3=/JKi!^BwWnT:^lOL<|(1A&{v%O^v.Rx]@+u&_[m');
define('LOGGED_IN_SALT',   '1|FxVC1]=Tj _( _h[YD-paiFN^itIya7(-U&<@3B/D67!G$9-f<#$*f>`La&;/`');
define('NONCE_SALT',       '02mM+MBF6r7i^t3Ut4BsCW8%Lt8=6&hCcmOCR25^}yVJ[0zVP>#iR}AaPJ&}|u-=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ebatechcorp_';

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
