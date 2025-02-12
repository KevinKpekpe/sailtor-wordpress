<?php 
class Footer_Newsletter_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'footer_newsletter_widget',
            __('Footer Newsletter Widget', 'votretheme'),
            array( 'description' => __('Widget pour la section "Newsletter" du footer', 'votretheme') )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $description = $instance['description'];
        $form_action = $instance['form_action'];

        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        ?>
        <p><?php echo esc_html($description); ?></p>
        <form action="<?php echo esc_url($form_action); ?>" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
        </form>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = $instance[ 'title' ] ?? '';
        $description = $instance[ 'description' ] ?? '';
        $form_action = $instance[ 'form_action' ] ?? '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'description' ); ?>"><?php _e( 'Description:' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'description' ); ?>" name="<?php echo $this->get_field_name( 'description' ); ?>"><?php echo esc_textarea( $description ); ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'form_action' ); ?>"><?php _e( 'Form Action URL:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'form_action' ); ?>" name="<?php echo $this->get_field_name( 'form_action' ); ?>" type="text" value="<?php echo esc_attr( $form_action ); ?>" />
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? sanitize_textarea_field( $new_instance['description'] ) : '';
        $instance['form_action'] = ( ! empty( $new_instance['form_action'] ) ) ? esc_url_raw( $new_instance['form_action'] ) : '';
        return $instance;
    }
}