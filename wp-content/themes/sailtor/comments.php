<?php 
    require('inc/walkers/Custom_Comment_Walker.php');
?>
<!-- Blog Comments Section -->
<section id="blog-comments" class="blog-comments section">
    <div class="container">
        <?php if (have_comments()) : ?>
            <h4 class="comments-count">
                <?php
                    printf(
                        _n('%s Comment', '%s Comments', get_comments_number(), 'sailtor'),
                        number_format_i18n(get_comments_number())
                    );
                ?>
            </h4>

            <?php 
                wp_list_comments(array(
                    'walker'      => new Custom_Walker_Comment(),
                    'style'       => 'div',
                    'short_ping' => true,
                    'avatar_size' => 80,
                ));
            ?>
        <?php endif; ?>

        <?php if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'sailtor'); ?></p>
        <?php endif; ?>
    </div>
</section>

<!-- Comment Form Section -->
<section id="comment-form" class="comment-form section">
    <div class="container">
        <?php
            $comment_form_args = array(
                'title_reply' => 'Post Comment',
                'title_reply_before' => '<h4>',
                'title_reply_after' => '</h4>',
                'comment_notes_before' => '<p class="comment-notes">Your email address will not be published. Required fields are marked *</p>',
                'fields' => array(
                    'author' => '<div class="col-md-6 form-group"><input id="author" name="author" type="text" class="form-control" placeholder="Your Name*" required></div>',
                    'email' => '<div class="col-md-6 form-group"><input id="email" name="email" type="email" class="form-control" placeholder="Your Email*" required></div>',
                    'url' => '<div class="col form-group"><input id="url" name="url" type="text" class="form-control" placeholder="Your Website"></div>',
                ),
                'comment_field' => '<div class="col form-group"><textarea id="comment" name="comment" class="form-control" placeholder="Your Comment*" required></textarea></div>',
                'submit_button' => '<button type="submit" class="btn btn-primary">Post Comment</button>',
                'class_form' => 'comment-form',
                'class_submit' => 'btn btn-primary',
            );

            comment_form($comment_form_args);
        ?>
    </div>
</section>