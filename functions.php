<?php
/**
 * Customization and new functionalities
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */



/**
 * Constant
 * 
 */	
define( 'EM_THEME_URI', get_stylesheet_directory_uri() );

define( 'EM_THEME_DIR', get_stylesheet_directory() );

define( 'EM_THEME_TEMPLATE_DIR', EM_THEME_DIR . '/inc/templates' );


/**
 * Includes
 * 
 */	
require EM_THEME_DIR . '/inc/class/class-scripts-and-styles.php';

require EM_THEME_DIR . '/inc/class/class-utilities.php';

require EM_THEME_DIR . '/inc/class/class-shortcodes.php';
