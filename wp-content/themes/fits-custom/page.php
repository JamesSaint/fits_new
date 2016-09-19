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
Page.php Content
=============================================== -->
<section class="ptb ptb-sm-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<div <?php post_class(); ?>>
						<!-- <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1> -->
							<?php echo get_the_post_thumbnail($page->ID, 'page_image'); ?>
						<div class="post-content">
							<?php the_content(); ?>
						</div>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<!-- ==============================================
/ Page.php Content
=============================================== -->
<?php get_footer(); ?>