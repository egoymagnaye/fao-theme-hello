<?php
/**
 * Helper methods
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class EM_Theme_Utilities {


	/**
	 * Hooks and methods initiatilization.
	 *
	 */
	public function __construct(){

		//add_action( 'hook', array( $this, 'method_name' ) );


		// Add ACF Settings
		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page(array(
				'page_title' 	=> 'Theme General Settings',
				'menu_title'	=> 'Theme Settings',
				'menu_slug' 	=> 'theme-general-settings',
				'capability'	=> 'edit_posts',
				'redirect'		=> false
			));
		}

	}


	/**
	 * Method description
	 *
	 */	
	public function method_name(){	
	
		// Method

	}


	/**
	 * Helper method to get themes template.
	 *
	 */	
	public static function import_template( $tpl, $vars = array() ) {
		$tpl  = ltrim( $tpl, '/' ) . '.php';
		$path = locate_template( array( $tpl ) );
		if ( empty( $path ) ) {
			throw new LogicException( "Cannot locate the template '$tpl'." );
		}
		extract( $vars );
		include $path;
	}

}

new EM_Theme_Utilities();