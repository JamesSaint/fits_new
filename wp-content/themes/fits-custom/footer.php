<div class="clearfix"></div>

<!-- ==============================================
Footer Widget Section
=============================================== -->
<footer class="wow fadeIn widget-foot">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php dynamic_sidebar( 'address-footer-widget-area' ); ?>
				<?php dynamic_sidebar( 'useful-links-footer-widget-area' ); ?>
				<?php dynamic_sidebar( 'recent-posts-footer-widget-area' ); ?>
				<div class="col-md-3 widget widget-four noPrint">
				<h5>Collaborative Partners</h5>
					<?php
					$partnerslider = new WP_Query();
					$partnerslider ->query(array(
					'post_type'=> partners,
					'posts_per_page' => -1,
					'order' => ASC
					)); ?>
					<div class="owl-carousel partner-slide">
					<?php while ($partnerslider -> have_posts()) : $partnerslider -> the_post(); ?>
					
						<div class="item">
							<a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>"><img src="<?php the_field('partner_logo'); ?>" alt="<?php echo the_title(); ?>"></a>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_postdata() ?>
					</div>
				</div> <!-- /.widget-four -->
			</div>
		</div>
	</div>
</footer>
<!-- ==============================================
/ Footer Widget Section
=============================================== -->

<!-- ==============================================
Final Legal & Copyright Footer
=============================================== -->

<footer class="last-foot">
	<div class="col-md-12">
		<p class="text-muted"><a href="<?php bloginfo('url'); ?>/legal/" target="_blank">&copy; Copyright <?php echo date("Y") ?></a> | <a href="<?php bloginfo('url'); ?>/legal/" target="_blank">Legal</a> | <a href="<?php bloginfo('url'); ?>/legal/" target="_blank">Privacy</a> | <a href="#" target="_blank">Press &amp; Media</a></p>
	</div>	
</footer>
<!-- ==============================================
/ Final Legal & Copyright Footer
=============================================== -->

<!-- ==============================================
Scroll to Top
=============================================== -->
<a class="scroll-top">
    <i class="fa fa-angle-double-up noPrint"></i>
</a>
<!-- ==============================================
/Scroll to Top
=============================================== -->
</div>
<!-- ==============================================
/ Site Wrapper 
=============================================== -->

<!-- ==============================================
JavaScript Plugins
=============================================== -->

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/preloader/preloader.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/background-check/background-check.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/fitvids/jquery.fitvids.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/viewport-checker/jquery.viewportchecker.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/images-loaded/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/isotope/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/masonry/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/easing/jquery.easing.compatibility.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/ease-pack/EasePack.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/tween-lite/TweenLite.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/pollyfill/pollyfill.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/fraud-loss-countup/fraud-loss-countup.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/wow/wow.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/stellar/jquery.stellar.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/colorbox/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/images-loaded/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/mediaelement-and-player/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/tipper/jquery.fs.tipper.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/ie-fixes/ie10-viewport-bug-workaround.min.js"></script> <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/custom.min.js"></script> 
<!-- ==============================================
/ JavaScript Plugins
=============================================== -->

<?php wp_footer(); ?>
</body>
</html>