<?php get_header(); ?>

<!-- ==============================================
Parallax Intro Section
=============================================== -->
<section class="inner-intro bg-img1 overlay-light parallax parallax-background2">
<div class="overlay">
    <div class="container">
        <div class="row title">
            <h1 class="h1"><?php the_category(); ?></h1>
            <div class="page-breadcrumb noPrint">
                <a href="<?php echo home_url(); ?>">Home</a>/<span><?php the_category(); ?></span>
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
Category.php
=============================================== -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <!-- Post Item -->
        <div class="row container-grid">
            <?php
            $category_UncategorisedLoop = new WP_Query();
            $category_UncategorisedLoop->query(array(
                'category_name'  => ,
                'posts_per_page' => 6
              )); ?>
             
            <?php while ($category_UncategorisedLoop->have_posts()) : $category_UncategorisedLoop->the_post(); ?>
            <div class="col-md-6 col-sm-6 col-xs-12 js-item spacing-grid">
                <div class="blog-post">
                    <div class="post-media">
                        <a href="<?php the_permalink() ?>"><?php echo get_the_post_thumbnail($page->ID, 'blog_roll'); ?></a>
                    </div>
                    <div class="post-meta"><span>by <a><?php the_author(); ?></a>,</span> <span><?php the_time('F jS, Y'); ?></span><span><?php edit_post_link('Edit','','|'); ?></span></div>
                    <div class="post-header">
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    </div>
                    <div class="post-entry">
                        <?php  the_excerpt(40);  ?>
                    </div>
                    <div class="post-tag pull-left"><span><?php the_category(', '); ?>,</span><span><?php the_tags(); ?></span></div>
                    <div class="clearfix"></div>
                    <div class="post-more-link"><a class="btn btn-primary btn-lg" href="<?php the_permalink(); ?>" role="button">Read Full Article <i class="fa fa-angle-double-right"></i></a></div>
                </div>
            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata() ?>
        </div>
        <div class="clearfix"></div>
        <!-- Pagination Nav -->
        <?php bootblog_pagination(); ?>
        <!-- End Pagination Nav -->
    </div>
</section>
<!-- ==============================================
/ Category.php
=============================================== -->

<?php get_footer(); ?>