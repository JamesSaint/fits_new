
<?php get_header(); ?>
<?php /* Template Name: FITS Partners Page */ ?>

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

<!-- ==============================================
About Partners Section
=============================================== -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p><?php the_content(); ?></p>
            </div>
        </div>

    </div>
</section>
<!-- ==============================================
/ About Partners Section
=============================================== -->

<!-- ==============================================
Partners Section
=============================================== -->
<section class="pb pb-sm-80">
    <div class="wow fadeIn container">
        <div class="row">
            <?php
            $fits_Partners = new WP_Query();
            $fits_Partners ->query(array(
            'post_type'=> partners,
            'order' => ASC
            )); ?>
            <?php while ($fits_Partners -> have_posts()) : $fits_Partners -> the_post(); ?>
            <div class="col-md-12 wow fadeIn partners-wrap">
                <div class="col-md-4 partners-item">
                        <a href="<?php the_permalink() ?>" title="<?php echo the_title(); ?>"><?php echo get_the_post_thumbnail($page->ID, 'partners_page_image'); ?></a>
                </div> <!-- /.partners-item -->
                <div class="col-md-8 partners-item-detail">
                <!-- <a class="partners-heading" href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a> -->
                    <div class="partner-short-para"><?php the_excerpt(30); ?></div> <br/>
                        <a class="btn btn-primary btn-lg partner-read-more"  href="<?php the_permalink() ?>" title="<?php echo the_title(); ?>">Learn More About <?php echo the_title(); ?></a>
                    </div> <!-- /.partners-item-detail -->
            </div> <!-- /.partners-wrap -->      
            <?php endwhile; ?>
            <?php wp_reset_postdata() ?>
        </div>
    </div>
</section>
<!-- ==============================================
/ Partners Section
=============================================== -->

<?php get_footer(); ?>