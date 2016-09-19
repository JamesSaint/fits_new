<?php get_header(); ?>

<!-- ==============================================
Parallax Intro Section
=============================================== -->
<section class="inner-intro bg-img1 overlay-light parallax parallax-background2 noPrint">
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
Single.php Post Content Section
=============================================== -->
<section class="ptb ptb-sm-80">
    <div class="container">
        <div class="row">
            <!-- Post Bar -->
            <div class="col-lg-9 col-md-9 blog-post-hr">
                <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="blog-post mb-30 <?php post_class(); ?>">
                    <div class="post-meta"><span>by <?php the_author(); ?>,</span> <span><?php the_time('F jS, Y'); ?></span></div>

                    <div class="post-header">
                        <h2 id="post-<?php the_ID(); ?>">
                            <a href="<?php the_permalink(); ?>" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a>
                        </h2>
                    </div>

                    <div class="post-media">
                        <?php echo get_the_post_thumbnail($page->ID, 'blog_post'); ?>
                    </div>

                    <div class="post-entry">
                        <?php the_content(); ?>
                    </div>

                    <div class="post-tag pull-left"><span><?php the_tags(); ?></span></div>
                </div>

                <hr />

                <div class="post-author">
                <div class="post-author-img pull-left">
                    <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
                </div>
                <div class="post-author-details pull-left">
                    <h6><?php the_author(); ?></h6>
                    <ul class="social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>

            <hr />
            <!-- ==============================================
            Comments Section
            =============================================== -->
            <div class="clearfix"></div>
            <div class="post-comment mtb-30 noPrint">
                            <h4>Comments <span class="comment-numb">(2)</span></h4>
                            <ul class="comment-list mt-30">
                                <li>
                                    <div class="comment-avatar">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/user-av.jpg">
                                    </div>
                                    <div class="">
                                        <div class="comment-detail">
                                            <h6>John Doe</h6>
                                            <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                            <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                        </div>

                                        <div class="comment-reply">
                                            <div class="comment-avatar">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/user-av.jpg">
                                            </div>
                                            <div class="">
                                                <div class="comment-detail">
                                                    <h6>John Doe</h6>
                                                    <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                                    <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="comment-reply">
                                            <div class="comment-avatar">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/user-av.jpg">
                                            </div>
                                            <div class="">
                                                <div class="comment-detail">
                                                    <h6>John Doe</h6>
                                                    <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                                    <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li>
                                    <div class="comment-avatar">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/user-av.jpg">
                                    </div>
                                    <div class="">
                                        <div class="comment-detail">
                                            <h6>John Doe</h6>
                                            <div class="post-meta"><span>March 16, 2015</span> | <span><a class="comment-reply-btn"><i class="fa fa-reply"></i>Reply</a></span></div>
                                            <p>Blandit vel, luctus pulvinar hendrerit id Maecenas tempus tellus eget lorem.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- ==============================================
                        Comment Form
                        =============================================== -->
                        <?php get_comments(); ?>
                        <!-- ==============================================
                        / Comments Form
                        =============================================== -->

                        <!-- ==============================================
                        / Comments Section
                        =============================================== -->
            <?php endwhile; ?>
            </div> 

            <?php else: ?>
            <!-- No posts found -->
            <?php endif; ?>

            <!-- ==============================================
            Siderbar
            =============================================== -->
            <?php get_sidebar('sidebar'); ?>
            <!-- ==============================================
            / Sidebar
            =============================================== -->

        </div>
    </div>
</section>
<!-- ==============================================
/ Single.php Post Content Section
=============================================== -->

<div class="clearfix"></div>

<!-- ==============================================
Pagination
=============================================== -->
<section class="mb-60 noPrint">
    <div class="container">
        <div class="row">
            <div class="item-nav">
                <a class="item-prev" href="<?php echo previous_posts_link(); ?>">
                    <div class="prev-btn"><i class="fa fa-angle-left"></i></div>
                        <div class="item-prev-text xs-hidden">
                            <h6>Previous Post</h6>
                        </div>
                </a>

                <a class="item-all-view">
                <h6><a href="<?php bloginfo('url'); ?>/?page_id=171">All Posts</a></h6>
                </a>

                <a class="item-next" href="<?php echo next_posts_link(); ?>">
                    <div class="next-btn"><i class="fa fa-angle-right"></i></div>
                        <div class="item-next-text xs-hidden">
                            <h6>Next Post</h6>
                        </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- ==============================================
/ Pagination
=============================================== -->

<?php get_footer(); ?>