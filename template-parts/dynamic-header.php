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
            <div class="menu-primary-menu-container">
              <ul class="em-page-nav--list">
                  <li><a href="#start">ABOUT</a></li>
                  <li><a href="#step-1">WORK WITH ME</a></li>
                  <li><a href="#step-2">SHOP + FREE RESOURCES</a></li>
                  <li><a href="#step-3">BLOG</a></li>
                  <li><a href="#step-4">CONTACT</a></li>
              </ul>
            </div> <!-- menu-primary-menu-container -->
            <!-- <div class="em-header--cart">
              <ul>
                  <li><a href="#!"><img src="/wp-content/themes/em-theme-hello/assets/img/icons/user.svg" alt=""><span>Cart</span></a></li>
                  <li><a href="#!"><img src="/wp-content/themes/em-theme-hello/assets/img/icons/user.svg" alt=""><span>Search</span></a></li>
              </ul>
          </div> -->
        </div>
        
        <div class="em-header--nav-mobile-btn">
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
        
        
	</div>
    <div class="em-header--nav-mobile">
        <?php echo $header_nav_menu; ?>
    </div>
</header> <!-- .em-header--container -->
<div class="em-mobile-nav--container">
    <div class="em-mobile-nav--wrapper">
        <div class="em-mobile-nav--backdrop"></div>
        <div class="em-mobile-nav--list-wrapper">
            <?php echo $header_nav_menu; ?>
            <ul class="em-mobile-nav--icons">
                <li><a href="#!"><span><img src="/wp-content/themes/em-theme-hello/assets/img/icons/user.svg" alt=""></span>Account</a></li>
            </ul>
        </div> <!-- .em-mobile-nav--list-wrapper -->
    </div> <!-- .em-mobile-nav--wrapper -->
</div> <!-- .em-mobile-nav--container -->

