
<?php get_header(); ?>
<?php /* Template Name: FITS Team Page */ ?>

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
<!-- ==============================================
/ Parallax Intro Section
=============================================== -->

<!-- About Section -->
<!-- <section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>A Dedicated Colaborative Team</h2>
                <p class="lead">Nullam dictum felis eu pede mollis pretium leo eget bibendum sodales augue velit cursus. tellus eget condimentum rhoncus sem quam semper libero.</p>
            </div>
            <div class="col-md-6">
                <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.</p>
                <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus.</p>
            </div>
        </div>

    </div>
</section> -->

<!-- ==============================================
Team Section
=============================================== -->
<section class="pb pb-sm-80">
    <div class="wow fadeIn container">
        <div class="row">
                <div class="spacer-60"></div>
                <?php
                $fits_teamMembers = new WP_Query();
                $fits_teamMembers ->query(array(
                'post_type'=> fits_team_members,
                // 'category_name' => management,
                'posts_per_page' => 6,
                'order' => ASC
                )); ?>
                <?php while ($fits_teamMembers -> have_posts()) : $fits_teamMembers -> the_post(); ?>
                <div class="col-md-4 col-sm-6 mb-30">
                    <div class="wow fadeIn team-item">
                        <div class="team-item-img">
                            <?php echo get_the_post_thumbnail($page->ID, 'team_member'); ?>
                            <div class="team-item-detail">
                                <div class="team-item-detail-inner light-color">
                                    <h5><?php the_title(); ?></h5>
                                    <p><?php the_field('short_job_desciption'); ?></p>
                                    <ul class="social">
                                        <li><a href="mailto:<?php the_field('team_member_email'); ?>"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="<?php the_field('team_member_linkedin'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <div class="team-item-info">
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_field('job_title'); ?></p>
                    </div>
                    </div>
                </div> 
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>
        </div>
    </div>
</section>
<!-- ==============================================
/ Team Section
=============================================== -->

<!-- ==============================================
Testimonials
=============================================== -->
<!-- <section id="testimonial" class="overlay-dark80 dark-bg ptb ptb-sm-80" style="background-image: url('<?php bloginfo('template_url'); ?>/assets/img/full/25.jpg');" data-stellar-background-ratio="0.4">
    <div class="container">
        <div class="owl-carousel">
            <div class="item">
                <div class="testimonial text-center dark-color">
                    <div class="container-icon"><i class="fa fa-quote-right"></i></div>
                    <p class="lead">" I got a dummy for Christmas and started teaching myself. I got books and records and sat in front of the practising. I did my first show in the third grade and just kept going. "</p>
                    <h6 class="quote-author">Jeff Dunham <span style="font-weight: 400;">( Appel Studio )</span></h6>
                </div>
            </div>
        </div>
    </div>
</section>
<hr /> -->
<!-- ==============================================
/ Testimonials
=============================================== -->


<!-- ==============================================
Members Logo's
=============================================== -->
<!-- <section id="client-logos" class="wow fadeIn ptb ptb-sm-80">
    <div class="container">
        <div class="owl-carousel client-carousel js-carousel-theme ">
            <div class="item">
                <div class="client-logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/01.png" alt="" />
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ==============================================
/ Members Logo's
=============================================== -->

<?php get_footer(); ?>