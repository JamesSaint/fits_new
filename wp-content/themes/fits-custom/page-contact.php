
<?php get_header(); ?>
<?php /* Template Name: Contact Page */ ?>

<!-- ==============================================
Parallax Intro Section
=============================================== -->
<section class="inner-intro bg-img1 overlay-light parallax parallax-background2">
<div class="overlay">
    <div class="container">
        <div class="row title">
            <h1 class="h1"><?php the_title(); ?></h1>
            <div class="page-breadcrumb noPrint">
                <a href="<?php echo home_url(); ?>">Home</a>/<span><?php the_title(); ?></span>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="clearfix"></div>
<!-- ==============================================
/ Parallax Intro Section
=============================================== -->

<!-- ==============================================
Contact Section
=============================================== -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Should you have any questions or require any assistance we would be delighted to help you in any way we can.</p>
            </div>
        </div>
        <div class="spacer-75"></div>
        <div class="row">
            <div class="col-md-5 contact">
                <div class="contact-box-left mb-45">
                    <div class="contact-icon-left"><i class="ion ion-ios-location"></i></div>
                    <h4>UK Headquaters</h4>
					<address class="uk-address">
						<ul class="list-none address">
							<li class="address-one"> Surrey Technology Centre</li>
							<li class="address-one"> 40 Occam Road</li>
							<li class="address-one"> Guildford</li>
							<li class="address-one"> GU2 7YG</li>
							<li class="address-one"> Surrey</li>
							<li class="address-one"> United Kingdom</li>
							<li><i class="fa fa-phone fa-lg"> </i> <a href="tel:+442081233338"> +44 (0) 208 123 33 38</a></li>
							<li><i class="fa fa-globe fa-lg"> </i> <a href="http://www.fits.institute"> www.fits.institute</a></li>
							<li><i class="fa fa-envelope fa-lg"> </i> <a href="mailto:members@fits.institute"> members@fits.institute</a></li>
						</ul>
					</address>
                </div>

                <div class="contact-box-left mb-45">
                    <div class="contact-icon-left"><i class="ion ion-ios-clock"></i></div>
                    <h4>Business Hours</h4>
                    <p>
                        <span>Mon - Fri: 9am to 5pm</span>
                    </p>
                </div>
                <div class="contact-box-left mb-45">

                    <h4>Follow Us</h4>
                    <ul class="list-none social">
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-md-offset-1">
                <!-- Contact FORM -->
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
/ Contact Section
=============================================== -->

<!-- ==============================================
Map Section
=============================================== -->
<section class="wow fadeIn map">
    <div id="map"></div>
</section>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/plugins/map/map.min.js"></script>
<!-- ==============================================
/ Map Section
=============================================== -->

<?php get_footer(); ?>