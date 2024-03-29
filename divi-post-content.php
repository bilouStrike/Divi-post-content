<?php
/*
Plugin Name: Divi Post Content
Plugin URI:  
Description: Divi module to return post content
Version:     1.0.0
Author:      Bilal dif
Author URI:  
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dpc-divi-post-content
Domain Path: /languages

Divi Post Content is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

Divi Post Content is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Divi Post Content. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'dpc_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dpc_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DiviPostContent.php';
}
add_action( 'divi_extensions_init', 'dpc_initialize_extension' );
endif;
