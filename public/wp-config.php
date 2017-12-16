<?php
// =======================================
// Load wp-config in the private directory
// =======================================
define( 'PRIVATE_DIR', dirname( __FILE__ ) . '/../private' );

$wpcfg = array(
    'dev' => PRIVATE_DIR . '/wp-config.dev.php',
    'test' => PRIVATE_DIR . '/wp-config.test.php',
    'production' => PRIVATE_DIR . '/wp-config.php'
);

if ( file_exists( $wpcfg['dev'] ) ) {
    define( 'ENVIRONMENT', 'dev' );
    include( $wpcfg['dev'] );
} elseif ( file_exists( $wpcfg['test'] ) ) {
    define( 'ENVIRONMENT', 'test' );
    include( $wpcfg['test'] );
} elseif ( file_exists( $wpcfg['production'] ) ) {
    define( 'ENVIRONMENT', 'production' );
    include( $wpcfg['production'] );
} else {
    die( 'wp-config not found' );
}

// ========================
// Custom content directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content' );
if ( isset( $_SERVER['HTTP_HOST'] ) ) {
    define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
} else {
    define( 'WP_CONTENT_URL', '/wp-content' );
}

// ====================================
// DB charset, mostly leave it as it is
// ====================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// =======================
// Load WordPress Settings
// =======================
$table_prefix  = 'wp_';

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
}
require_once( ABSPATH . 'wp-settings.php' );
