<?php 
class Custom_Walker_Comment extends Walker_Comment {
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        // Ne rien faire pour éviter l'ajout de wrappers supplémentaires
    }

    public function end_lvl( &$output, $depth = 0, $args = array() ) {
        // Ne rien faire
    }

    public function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
        $depth++;
        $tag = 'div';
        $comment_id = $comment->comment_ID;
        $add_below = 'div-comment';

        // Classes CSS
        $comment_classes = array( 'comment' );
        if ($depth > 1) {
            $comment_classes[] = 'comment-reply';
        }

        $output .= '<div id="comment-' . $comment_id . '" class="' . implode(' ', get_comment_class($comment_classes, $comment, $comment_id)) . '">';
        $output .= '<div class="d-flex">';

        // Avatar
        $output .= '<div class="comment-img">' . get_avatar($comment, 80) . '</div>';
        $output .= '<div>';

        // Auteur + lien de réponse
        $output .= '<h5 class="comment-author">';
        $output .= get_comment_author_link($comment);
        $output .= ' ' . get_comment_reply_link(array_merge(
            $args,
            array(
                'add_below' => $add_below,
                'depth'     => $depth,
                'max_depth' => $args['max_depth'],
                'reply_text' => '<i class="bi bi-reply-fill"></i> Reply',
                'before'    => '<span class="reply">',
                'after'     => '</span>'
            )
        ));
        $output .= '</h5>';

        // Date
        $output .= '<time datetime="' . get_comment_date('c', $comment) . '" class="comment-date">' . get_comment_date('', $comment) . '</time>';

        // Contenu
        $output .= '<div class="comment-content">';
        if ('0' == $comment->comment_approved) {
            $output .= '<p class="comment-awaiting-moderation">' . esc_html__('Your comment is awaiting moderation.', 'textdomain') . '</p>';
        }
        $output .= '<p>' . get_comment_text($comment) . '</p>';
        $output .= '</div>'; // .comment-content
    }

    public function end_el( &$output, $comment, $depth = 0, $args = array() ) {
        $output .= '</div>'; // Ferme le div interne
        $output .= '</div>'; // Ferme .d-flex
        $output .= '</div>'; // Ferme le commentaire principal
    }
}