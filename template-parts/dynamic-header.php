<?php
/**
 * The template for displaying header.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$header_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-1',
	'fallback_cb' => false,
	'echo' => false,
] );

?>

<?php // the_custom_logo(); ?>
<header id="site-header" class="em-header--container" role="banner">
	<div class="em-header--inner">
        <div class="em-header--branding"><a href="/"><span>flor&order</span></a></div>
        <div class="em-header--nav-desktop">
            <?php echo $header_nav_menu; ?>
        </div>
        <div class="em-header--nav-mobile-btn">
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        <div class="em-header--misc">
            <ul>
                <li><a href="<?php echo get_field('cart_link', 'option') ? get_field('cart_link', 'option') : '#!' ?>"><?php EM_Theme_Utilities::import_template('assets/img/icons/cart'); ?></a></li>
                <li><a href="<?php echo get_field('search_link', 'option') ? get_field('search_link', 'option') : '#!' ?>"><?php EM_Theme_Utilities::import_template('assets/img/icons/search'); ?></a></li>
            </ul>
        </div>        
	</div>
</header> <!-- .em-header--container -->
<div class="em-mobile-nav--container">
    <div class="em-mobile-nav--wrapper">
        <div class="em-mobile-nav--backdrop"></div>
        <div class="em-mobile-nav--list-wrapper">
            <?php echo $header_nav_menu; ?>
            <ul class="em-mobile-nav--icons">
                    <li><a href="<?php echo get_field('cart_link', 'option') ? get_field('cart_link', 'option') : '#!' ?>"><?php EM_Theme_Utilities::import_template('assets/img/icons/cart'); ?> <span>Cart</span></a></li>
                    <li><a href="<?php echo get_field('search_link', 'option') ? get_field('search_link', 'option') : '#!' ?>"><?php EM_Theme_Utilities::import_template('assets/img/icons/search'); ?> <span>Search</span></a></li>
            </ul>
        </div> <!-- .em-mobile-nav--list-wrapper -->
    </div> <!-- .em-mobile-nav--wrapper -->
</div> <!-- .em-mobile-nav--container -->

