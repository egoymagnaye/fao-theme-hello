<?php
/**
 * Declare all enqueue scripts and styles.
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class EM_Theme_Scripts_And_Styles {


	/**
	 * Hooks and methods initiatilization.
	 *
	 */
	public function __construct(){

		add_action( 'wp_enqueue_scripts', array( $this, 'add_scripts' ) );

		add_action( 'wp_enqueue_scripts', array( $this, 'add_stylesheets' ) );

		add_action( 'login_enqueue_scripts', array( $this, 'login_styles' ) );

	}


	/**
	 * Scripts
	 *
	 */
	public function add_scripts(){

		// Theme JS
		//wp_enqueue_script('em-theme-js', EM_THEME_URI .'/assets/js/script.js', array('jquery'), '1.0', true);

		wp_enqueue_script( 'em-globals-script', EM_THEME_URI .'/assets/js/em-globals.js', [], false, true);

		wp_enqueue_script( 'em-globals-script' );

	}


	/**
	 * Stylesheet
	 *
	 */
	public function add_stylesheets(){

		// Enqueue styles
		wp_enqueue_style( 'em-style', EM_THEME_URI . '/assets/css/styles.css', );

	}


	/**
	 * Custom login styles
	 *
	 */
	public function login_styles(){

		wp_enqueue_style('login-styles', EM_THEME_URI .'/assets/css/login.css');

	    //wp_enqueue_script( 'login-js', EM_THEME_URI . '/assets/js/login-script.js', array( 'jquery' ), '1.0', true );

	}


}

new EM_Theme_Scripts_And_Styles();