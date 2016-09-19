<?php 
function footer_widgets_init() {
 
    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'footer' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'footer' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
 
    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'footer' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'footer' ),
        'before_widget' => '<div class="col-md-3 widget widget-two"> <div class="foot-nav-wrap">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
 
    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'footer' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'footer' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
 
    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'footer' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'footer' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h5 class="widget-title">',
        'after_title' => '</h5>',
    ) );
         
}
 




// Register sidebars by running footer_widgets_init() on the widgets_init hook.

<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>



add_action( 'widgets_init', 'footer_widgets_init' );





 ?>


				<div class="col-md-3 widget widget-one">
				<h5>Contact Our Team</h5>
				<address class="uk-address">
					<ul class="uk-list-address">
						<li><a href="https://www.google.co.uk/maps/place/The+Surrey+Technology+Centre/@51.2397983,-0.611969,17z/data=!4m7!1m4!3m3!1s0x4875d11f5c02db9f:0xd2355a2b18c9770f!2sThe+Surrey+Technology+Centre!3b1!3m1!1s0x4875d11f5c02db9f:0xd2355a2b18c9770f" target="_blank"><i class="fa fa-building fa-lg"> </i> Surrey Technology Centre</a></li>
						<li class="address-one"> 40 Occam Road</li>
						<li class="address-one"> Guildford</li>
						<li class="address-one"> GU2 7YG</li>
						<li class="address-one"> Surrey</li>
						<li class="address-one"> United Kingdom</li>
						<li><i class="fa fa-phone fa-lg"> </i> <a href="tell:+442081233338"> +44 (0) 208 123 33 38</a></li>
						<li><i class="fa fa-globe fa-lg"> </i> <a href="http://www.fits.institute"> www.fits.institute</a></li>
						<li><i class="fa fa-envelope fa-lg"> </i> <a href="mailto:members@fits.institute"> members@fits.institute</a></li>
					</ul>
				</address>
				</div>

				<div class="col-md-3 widget widget-two">
				<h5>Useful Links</h5>
				<div class="foot-nav-wrap">
				<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
					</div><!--/ footer-nav-wrap-->
				</div> <!-- /.widget-two -->

				<div class="col-md-3 widget widget-three">
				<h5>Latest News</h5>
				<div class="latest-posts-wrap">
					<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
					</div><!--/ Latest Post Links-->
				</div> <!-- /.widget-three -->

				<div class="col-md-3 widget widget-four">
				
				<h5>Partner Programme</h5>
				<div class="partners-wrap">

					<ul class="slides">
					<?php
					$partnerslider = new WP_Query();
					$partnerslider ->query(array(
					'post_type'=> partner_slides,
					'posts_per_page' => -1,
					'order' => ASC
					)); ?>

					<?php while ($partnerslider -> have_posts()) : $partnerslider -> the_post(); ?>

					<li><a href=""><?php echo get_the_post_thumbnail($page->ID, 'partner_slide'); ?></a></li>

					<?php endwhile; ?>
					<?php wp_reset_postdata() ?>
					</ul>
					</div><!--/ partners flexslider-->
				</div> <!-- /.widget-four -->