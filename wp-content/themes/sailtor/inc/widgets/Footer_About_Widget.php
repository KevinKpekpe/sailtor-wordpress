<?php 
class Footer_About_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'footer_about_widget',
            __('Footer About Widget', 'votretheme'),
            array( 'description' => __('Widget pour la section "À propos" du footer', 'votretheme') )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $description = $instance['description'];
        $address = $instance['address'];
        $phone = $instance['phone'];
        $email = $instance['email'];

        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        ?>
        <div class="footer-contact pt-3">
            <p><?php echo esc_html($address); ?></p>
            <p class="mt-3"><strong>Phone:</strong> <span><?php echo esc_html($phone); ?></span></p>
            <p><strong>Email:</strong> <span><?php echo esc_html($email); ?></span></p>
        </div>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = $instance[ 'title' ] ?? '';
        $description = $instance[ 'description' ] ?? '';
        $address = $instance[ 'address' ] ?? '';
        $phone = $instance[ 'phone' ] ?? '';
        $email = $instance[ 'email' ] ?? '';
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
            <label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'address' ); ?>" name="<?php echo $this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Phone:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['description'] = ( ! empty( $new_instance['description'] ) ) ? sanitize_textarea_field( $new_instance['description'] ) : '';
        $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? sanitize_text_field( $new_instance['address'] ) : '';
        $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? sanitize_text_field( $new_instance['phone'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? sanitize_email( $new_instance['email'] ) : '';
        return $instance;
    }
}