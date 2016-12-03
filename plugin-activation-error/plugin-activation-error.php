<?php

/**
 * Plugin Name: plugin-activation-error
 * Description: some
 * Version: 1.0.0
 * License:           GPL-2.0+ 
 * Text Domain:       customp
 * Domain Path:       /languages
 */

function _20161203_activated_plugin() {
  update_option( 'plugin_error',  ob_get_contents() );
}

add_action( 'activated_plugin', '_20161203_activated_plugin' );

echo get_option( 'plugin_error' );

file_put_contents( dirname(__FILE__).'error.txt', ob_get_contents() ) ;
