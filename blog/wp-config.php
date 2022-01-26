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
define('DB_NAME', 'tohawaii_kakablog');

/** MySQL database username */
define('DB_USER', 'tohawaii_nbeter');

/** MySQL database password */
define('DB_PASSWORD', '^4x]b=pJN2MUAn');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'e=~v=4Pr^H(BD,E1-p*:w29Rb+RMz(2W.vsd+O/=^4(a)lru{<66GBr#7=.pn|,g');
define('SECURE_AUTH_KEY',  '9B|{+F+P-D(eT!y-$QM0fhM$-)-9W[-IY:sYT.|Yrnb$ Z)JY^n*qd6d(MO}?j37');
define('LOGGED_IN_KEY',    '[&5XY7bih%+40Q2[sR2n+XW]|fSAArv`7mtf5I;4iIUDi~~^p1Ox[z6U %mT)Fa&');
define('NONCE_KEY',        '~H9|%(kZFz|#209x:7}C$k:zYAtET-|yVDIdpj3zQt!O%B0>J|qM?l6:;I<++,>s');
define('AUTH_SALT',        'r%qX|--;sE+.18m@}5y&:F4vV+lb!@4h+^JS%;Zod5+]vq4?{r[g:xT?(^yi64?i');
define('SECURE_AUTH_SALT', 'y|N#~M-<1FB8C5LD{)_(VjMB`JeUK5%a8%P!$HH.kbv9;uXe[|<~F6rd W^L9sG+');
define('LOGGED_IN_SALT',   'fKw ;6H?-baUC9:)h-fAIbO/(` UUd%|6x:&rwro-spdpJ?XilL|5-,@P(cNhgy1');
define('NONCE_SALT',       'YPob(* K5hRHnw W+gDE}84r aiEQpH fx1a.&6$(p#@w*Mw{5bnvnR$TE^[[1Vj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'iikai_';

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
