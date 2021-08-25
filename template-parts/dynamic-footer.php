<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<footer id="site-footer" class="em-footer--container" role="contentinfo">
	<div class="em-footer--inner">
		<div class="em-footer--row">
			<div class="em-footer--icons">
				<h5>Connect with Flor & Order</h5>
				<ul class="em-footer--social-media">
					<li><h6>Follow me on:</h6></li>
					<li><a href="#!"><span><?php EM_Theme_Utilities::import_template('assets/img/icons/facebook'); ?></span></a></li>
					<li><a href="#!"><span><?php EM_Theme_Utilities::import_template('assets/img/icons/instagram'); ?></span></a></li>
					<li><a href="#!"><span><?php EM_Theme_Utilities::import_template('assets/img/icons/linkedin'); ?></span></a></li>
    			</ul>
			</div>
			<div class="em-footer--signup">
				<h5>What weekly goal smashing inspiration?</h5>
				<?php 
				if(get_field('email_subscription_form_shortcode', 'option')){
					echo do_shortcode(get_field('email_subscription_form_shortcode', 'option'));
				}
				?>
			</div>
		</div>
	</div>
	<div class="em-footer--row2">
		<div class="em-footer--terms">
			<p>@ 2021 <a href="/">florandorder</a>. Developed by <a href="https://www.egoymagnaye.com/" target="_blank">Egoy Magnaye</a></p>
			<p><a href="<?php echo get_field('terms_and_conditions_link', 'option') ? get_field('terms_and_conditions_link', 'option') : '#!' ?>">Terms and Conditions</a> | <a href="<?php echo get_field('privacy_policy_link', 'option') ? get_field('privacy_policy_link', 'option') : '#!' ?>">Privacy Policy</a></p>
		</div>	
	</div>
</footer> <!-- .em-footer--container -->