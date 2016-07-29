<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div id="footer-container">
			<footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
                <div class="footer-info row">
                    <div class="info medium-6 large-4 columns">
                        <h4>Location</h4>
                            <p><?php echo get_option('address'); ?></p>

                        <h4>Hours</h4>
                            <p><?php echo get_option('hours'); ?></p>

                        <a href="https://www.google.com/maps/place/1604+Smittys+Blvd,+Ritzville,+WA+99169/@47.1189022,-118.366313,17z/data=!3m1!4b1!4m12!1m6!3m5!1s0x549ede614f78651b:0x77f99437fe97e33!2sCow+Creek+Mercantile!8m2!3d47.1195821!4d-118.3632726!3m4!1s0x549ede614f82a265:0x6b86a1fc783bec51!8m2!3d47.1191205!4d-118.3640554" target="_blank"><i class="fa fa-map"></i> Get Directions</a>

                        <br>
                        <a href="<?php echo wp_login_url(); ?>">Staff Login</a>

                    </div>
                    <div class="social medium-6 large-3 columns">
                        <h4>Get Connected</h4>
                            <ul class="social-menu menu">
                                <?php if(get_option('facebook')) { ?>
                                    <li><a href="<?php echo get_option('facebook');?>" target="_blank"><i class="fa fa-facebook"></i></a><li>
                                <?php } ?>
                                <?php if(get_option('twitter')) { ?>
                                    <li><a href="<?php echo get_option('twitter');?>" target="_blank"><i class="fa fa-twitter"></i></a><li>
                                <?php } ?>
                                <?php if(get_option('instagram')) { ?>
                                    <li><a href="<?php echo get_option('instagram');?>" target="_blank"><i class="fa fa-instagram"></i></a><li>
                                <?php } ?>
                                <?php if(get_option('yelp')) { ?>
                                    <li><a href="<?php echo get_option('yelp');?>" target="_blank"><img class="leafly" src="<?php echo get_template_directory_uri() ?>/assets/images/leafly.png" /></a><li>
                                <?php } ?>
                            </ul>

                        <h4>Contact</h4>
                            <a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></br>
                            <a href="tel:<?php echo get_option('phone'); ?>"><?php echo get_option('phone'); ?></a>
                    </div>
                    <div class="disclaimer medium-12 large-5 columns">
                        <h4>Warning</h4>
                        <p>This product has intoxicating effects and may be habit forming. Marijuana can impair concentration, coordination, and judgment. Do not operate a vehicle or machinery under the influence of this drug. There may be health risks associated with consumption of this product. For use only by adults twenty-one and older. Keep out of the reach of children.</p>
                    </div>
                </div>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
