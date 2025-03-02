<?php
if (post_password_required()) {
    return;
}

require_once('inc/walkers/Custom_Comment_Walker.php');
?>

<?php if ( have_comments() ) : ?>
    <section id="blog-comments" class="blog-comments section">
        <div class="container">
            <h4 class="comments-count">
                <?php
                printf( _nx( '1 Comment', '%1$s Comments', get_comments_number(), 'comments title', 'sailtor' ),
                    number_format_i18n( get_comments_number() ) );
                ?>
            </h4>

            <?php
            wp_list_comments( array(
                'walker'      => new Custom_Comment_Walker(),
                'style'       => 'div',
                'short_ping'  => true,
                'avatar_size' => 60,
                'reply_text'  => '<i class="bi bi-reply-fill"></i> Reply'
            ) );
            ?>
        </div>
    </section>
<?php endif; ?>

<?php if ( comments_open() ) : ?>
    <section id="comment-form" class="comment-form section">
        <div class="container">
            <?php
            $comment_form_args = array(
                'title_reply' => 'Post Comment',
                'comment_notes_before' => '<p>Your email address will not be published. Required fields are marked *</p>',
                'fields' => array(
                    'author' => '<div class="col-md-6 form-group"><input name="author" type="text" class="form-control" placeholder="Your Name*" required></div>',
                    'email'  => '<div class="col-md-6 form-group"><input name="email" type="email" class="form-control" placeholder="Your Email*" required></div>',
                    'url'    => '<div class="col form-group"><input name="url" type="text" class="form-control" placeholder="Your Website"></div>',
                ),
                'comment_field' => '<div class="col form-group"><textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea></div>',
                'submit_button' => '<button type="submit" class="btn btn-primary">Post Comment</button>'
            );
            
            comment_form( $comment_form_args );
            ?>
        </div>
    </section>
<?php endif; ?>