
<?php get_header(); ?>

<!-- ==============================================
Comment Form
=============================================== -->
<div class="mtb-60">
    <h4><?php comment_form_title( 'Leave a Comment', 'Leave a Comment to %s' ); ?></h4>
    <div class="cancel-comment-reply"> <?php cancel_comment_reply_link(); ?> </div>
    <?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
    <p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
    <?php else : ?>
    <div class="row mt-30">
        <form role="form" class="form-horizontal" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
        <?php if ( is_user_logged_in() ) : ?>
        <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identit; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out</a></p>
            <div>
                <div class="col-md-4">
                    <input type="text" class="input-lg form-full" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" placeholder="Name" <?php if ($req) echo "aria-required='true'"; ?> />
                </div>
                <div class="col-md-4">
                    <input type="text" class="input-lg form-full" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" placeholder="Email" <?php if ($req) echo "aria-required='true'"; ?> />
                </div>
                <div class="col-md-4">
                    <input type="text" class="input-lg form-full" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" placeholder="Website" />
                </div>
                <div class="col-md-12">
                <textarea class="form-full" name="message" id="message" tabindex="4" placeholder="Message"></textarea>
                </div>
                <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-lg" tabindex="5" value="Post Comment" /> <?php comment_id_fields(); ?>
                </div>
            </div>
            <?php do_action('comment_form', $post->ID); ?>
        </form>
    </div>
    <?php endif; // If registration required and not logged in ?>
</div>
<!-- ==============================================
/ Comments Form
=============================================== -->

<?php get_footer(); ?>