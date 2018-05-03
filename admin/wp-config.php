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
define('DB_NAME', 'irenti-react');

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
define('AUTH_KEY',         'Qf4QK6Z=@_{(XB|:BWwN !e9{G:ADd>hiPf2,xG^5DVuLysnLwcg&[u9#?4tZ4rg');
define('SECURE_AUTH_KEY',  'unhW^@] mnVwI8gRIbIZ)d!P*F}SEn$:}bZ&pPr<k=n!uvylLS4Qn(~ZNytNvs]*');
define('LOGGED_IN_KEY',    '~U[7h=.g40-Y@jW^iNe^3%!0C7Y^CJp!v(>*@ZJH]qdjL#f7}k#^XFs.%zxeR2`U');
define('NONCE_KEY',        'LBcZ|yv_+HaUEZlD+L|?C}X#Q{X^H8WhnKI08>U|z]paLi$qbv%qQ};F.j=c|Ls)');
define('AUTH_SALT',        '4Yt>`7.cy8,W=+HS h*j(csLckUqu)GqzN[IaJv=yYyKp;C*1k7Y-7EZ9]J#T;?d');
define('SECURE_AUTH_SALT', 'k7_]_;8aEvTG-E=<8y0 Ki[pAnG|{JNw*F1dUByYGP9vk4V!KS8 g)^3]eWTed6g');
define('LOGGED_IN_SALT',   '2:[I44dXqt$LO0H4uC+Sx*Qw%S0 zgjp^^+v/IuhY?{WZcC>BA,2=PN/xNWp,4l&');
define('NONCE_SALT',       '#_*k9lk}FQnx</.cD2[SYDiGk2qSU$G[0QmhXw doQ6q+W`R&.sW yJGGHD(VbsI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
