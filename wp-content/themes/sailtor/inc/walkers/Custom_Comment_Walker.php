<?php
class Custom_Comment_Walker extends Walker_Comment {
    protected function html5_comment( $comment, $depth, $args ) {
        $tag = ( 'div' === $args['style'] ) ? 'div' : 'li';
        $comment_class = ($depth > 1) ? 'comment comment-reply' : 'comment';
        ?>
        <<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class($comment_class, $comment); ?>>
            <div class="d-flex">
                <div class="comment-img">
                    <?php echo get_avatar( $comment, 60, '', '', array('class' => '') ); ?>
                </div>
                <div>
                    <h5 class="comment-author">
                        <?php printf( get_comment_author_link( $comment ) ); ?>
                        <?php
                        comment_reply_link( array_merge( $args, array(
                            'add_below' => 'comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth'],
                            'reply_text' => '<i class="bi bi-reply-fill"></i> Reply'
                        ) ) );
                        ?>
                    </h5>
                    <time class="comment-date" datetime="<?php comment_time( 'c' ); ?>">
                        <?php printf( get_comment_date('d M, Y') ); ?>
                    </time>
                    <div class="comment-content">
                        <?php comment_text(); ?>
                    </div>
                </div>
            </div>
        <?php
    }
}