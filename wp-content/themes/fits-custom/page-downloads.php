
<?php get_header(); ?>
<?php /* Template Name: FITS Downloads Page */ ?>

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
Downloads Page Content Section
=============================================== -->
<!-- <section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section> -->
<!-- ==============================================
/ Downloads Page Content Section
=============================================== -->

<!-- ==============================================
Downloads Section
=============================================== -->
<section class="pb pb-sm-80">
    <div class="wow fadeIn container">
        <div class="row">
            <div class="downloads-wrap">
                <?php
                $fits_Downloads = new WP_Query();
                $fits_Downloads ->query(array(
                'post_type'=> downloads,
                'posts_per_page' => 8,
                'order' => ASC
                )); ?>
                <?php while ($fits_Downloads -> have_posts()) : $fits_Downloads -> the_post(); ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 downloads-item">
                        <div class="downloads-item-img">
                            <?php echo get_the_post_thumbnail($page->ID, 'downloads_page_image'); ?>
                            <h3 class="download-heading"><?php the_title(); ?></h3>
                            <div class="Downloads-item-detail">
                            <p style="text-align:center;margin-top:20px;margin-bottom:20px;"><a class="btn btn-primary btn-lg" href="<?php the_field('download_url'); ?>" target="_blank" role="button">Download PDF <i class="icon-cloud-download"> </i></a></p>
                            </div>
                        </div>
                    </div><!-- /.downloads-item -->
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>
            </div> <!-- /.downloads-wrap -->
        <div class="clearfix"></div>
        <!-- Pagination Nav -->
        <?php bootblog_pagination(); ?>
        <!-- End Pagination Nav -->
        </div>
    </div>
</section>

<!-- ==============================================
/ Downloads Section
=============================================== -->

<?php get_footer(); ?>