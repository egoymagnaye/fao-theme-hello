<?php
/**
 * Shortcodes declarations
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class EM_Theme_Shortcodes {


	/**
	 * Hooks and methods initiatilization.
	 *
	 */
	public function __construct(){

		//add_shortcode( 'shortcode_name', array( $this, 'cb' ) );

	}


	/**
	 * Shortcode CB:
	 *
	 */
	public function cb($atts) {

		ob_start(); 

		return ob_get_clean();

	}


}

new EM_Theme_Shortcodes();