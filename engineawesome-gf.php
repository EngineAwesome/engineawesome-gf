<?php
/*
Plugin Name: Engine Awesome / Gravity Forms Integrator
Plugin URI: https://engineawesome.com
Description: Enhances the integration with Engine Awesome and Gravity Forms.
Version: 1.2
Stable: 1.2
Author: Engine Awesome
License: GPL-2.0+
Text Domain: engineawesome-gf
Domain Path: /languages
*/

// If Gravity Forms is loaded, bootstrap our plugin.
add_action( 'gform_loaded', array( 'EAwesome_GF_Bootstrap', 'load' ), 5 );

/**
 * Class EAwesome_GF_Bootstrap
 */
class EAwesome_GF_Bootstrap {

	public static function load() {

		/** 
		 * Load if Gravity Forms Webhooks plugin is activated
		*/
		if ( class_exists( 'GF_Webhooks_Bootstrap' ) ) {
			 require_once( 'class-ea-gf-webhooks.php' );
		}

	}

}
