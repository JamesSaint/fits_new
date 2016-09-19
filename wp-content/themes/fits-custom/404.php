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
                <a href="<?php echo home_url(); ?>">Error 404</a>
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
Error 404 Content
=============================================== -->

<section class="ptb ptb-sm-80">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="error-callout">
							<div class="col-md-6 col-md-offset-3">
								<h2 class="error-heading">Ooops.... Sorry!<br/>Something seems to be wrong!</h2>
								<p>Either the page you requested has moved or didn't exist.</p>
								<p>Please try navigating somewhere else.</p>
								<br/>
								<a href="<?php echo home_url('/'); ?>" class="btn btn-primary btn-lg"><i class="fa fa-angle-double-left"></i> Back To Home</a>
<!-- 								<form method="get" action="">
									<input class="error-input" type="text" name="s" placeholder="Search"/>
									<input class="btn btn-primary btn-lg search-submit" type="submit" role="button"/>
								</form> -->
							</div> <!-- /.col-md-6 col-md-offset-3 -->
						
						</div>
					</div>
				</div>
			</div>

</section> <!-- /.section-white -->


<!-- ==============================================
/ Error 404 Content
=============================================== -->

<?php get_footer(); ?>