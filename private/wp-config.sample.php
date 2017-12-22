<?php
// ==================
// DB connection info
// ==================
define( 'DB_NAME', 'wordpress' );
define( 'DB_USER', 'exampleuser' );
define( 'DB_PASSWORD', 'examplepassword' );
define( 'DB_HOST', 'localhost' );

// ===================
// Hide or show errors
// ===================
ini_set( 'display_errors', E_ALL );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG', true );

// ===========================
// Autosave and Post Revisions
// ===========================
define( 'AUTOSAVE_INTERVAL', 90 );
define( 'WP_POST_REVISIONS', 3 );

// =========================
// Disable automatic updates
// =========================
define( 'AUTOMATIC_UPDATER_DISABLED', false );

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ==============================================
// Salt
// https://api.wordpress.org/secret-key/1.1/salt/
// ==============================================
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');
