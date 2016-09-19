<?php get_header(); ?>

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
Single-Team Page Section
=============================================== -->
<section class="ptb ptb-sm-80">
    <div class="wow fadeIn container">
        <div class="row">
            <div class="col-md-12">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="-partner-post mb-30 <?php post_class(); ?>">
<!--                 <div class="partner-post-header">
                        <h2 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h2>
                    </div> -->
                    <div class="partner-post-media">
                        <?php echo get_the_post_thumbnail($page->ID, 'partner_page_image'); ?>
                    </div>
                    <div class="post-entry">
                        <?php the_content(); ?>
                    </div>
                </div>
                <hr />
            <?php endwhile; ?>
            </div>
            <?php else: ?>
            <!-- No posts found -->
            <?php endif; ?>          
            
        </div>
    </div>
</section>
<!-- ==============================================
Single-Team Page Section
=============================================== -->
<?php get_footer(); ?>