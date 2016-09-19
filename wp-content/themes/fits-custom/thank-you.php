<?php get_header(); ?>
<?php /* Template Name: Thank You - Newsletter Subscribe */ ?>

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
Thank you for subscribing Page
=============================================== -->
<section class="ptb ptb-sm-80">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="error-callout">
					<div class="col-md-6 col-md-offset-3">
						<h2 class="error-heading">Thank You!<br/>You've Subscribed To Our NewsLetter!</h2>
						<br/>
						<p>We'll email you shortly to confirm you would like to recieve our newsletter.</p>
						<br/>
						<a href="<?php echo home_url('/'); ?>" class="btn btn-primary btn-lg"><i class="fa fa-angle-left left"></i> Back To Home</a>	
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ==============================================
/ Thank you for subscribing Page
=============================================== -->

<?php get_footer(); ?>