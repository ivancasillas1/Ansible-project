<?php
/**
 * Configuración de WordPress
 *
 * Este archivo contiene la configuración de WordPress. Este archivo se utiliza
 * por el instalador de WordPress durante el proceso de instalación. También se
 * utiliza para definir las constantes de WordPress y configurar la conexión a la base de datos.
 *
 * @link https://codex.wordpress.org/es:Archivo_de_Configuraci%C3%B3n_de_WordPress
 *
 * @package WordPress
 */

// ** Configuración de MySQL - Puedes obtener esta información de tu proveedor de alojamiento ** //

/** Nombre de la base de datos de WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nombre de usuario de MySQL */
define( 'DB_USER', 'vagrant' );

/** Contraseña del usuario MySQL */
define( 'DB_PASSWORD', 'Viewnext' );

/** Dirección del servidor de MySQL */
define( 'DB_HOST', '172.26.203.192' );

/** Codificación de caracteres de la base de datos */
define( 'DB_CHARSET', 'utf8mb4' );

/** Collation de la base de datos. No cambies esto si no sabes lo que estás haciendo. */
define( 'DB_COLLATE', '' );

/** Claves únicas de autenticación y encriptación. */
define( 'AUTH_KEY',         'pon_aquí_tu_clave_única' );
define( 'SECURE_AUTH_KEY',  'pon_aquí_tu_clave_única' );
define( 'LOGGED_IN_KEY',    'pon_aquí_tu_clave_única' );
define( 'NONCE_KEY',        'pon_aquí_tu_clave_única' );
define( 'AUTH_SALT',        'pon_aquí_tu_clave_única' );
define( 'SECURE_AUTH_SALT', 'pon_aquí_tu_clave_única' );
define( 'LOGGED_IN_SALT',   'pon_aquí_tu_clave_única' );
define( 'NONCE_SALT',       'pon_aquí_tu_clave_única' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
