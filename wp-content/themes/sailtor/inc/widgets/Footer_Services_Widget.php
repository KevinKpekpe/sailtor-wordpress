<?php
// widgets/footer-services-widget.php
class Footer_Services_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'footer_services_widget',
            __('Footer Services Widget', 'votretheme'),
            array( 'description' => __('Widget pour la section "Nos services" du footer', 'votretheme') )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );

        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
        ?>
        <ul>
            <?php
            $args_services = array(
                'post_type' => 'services', // Remplacez par le nom de votre custom post type
                'posts_per_page' => -1, // Récupérer tous les services
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $services_query = new WP_Query( $args_services );

            if ( $services_query->have_posts() ) {
                while ( $services_query->have_posts() ) {
                    $services_query->the_post();
                    ?>
                    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php
                }
                wp_reset_postdata(); // Réinitialiser les données de post globales
            }
            ?>
        </ul>
        <?php
        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = $instance[ 'title' ] ?? '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        return $instance;
    }
}