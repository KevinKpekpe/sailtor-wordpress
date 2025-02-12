<?php
// widgets/footer-links-widget.php
class Footer_Links_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'footer_links_widget',
            __('Footer Links Widget', 'votretheme'),
            array( 'description' => __('Widget pour la section "Liens utiles" du footer', 'votretheme') )
        );
    }

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $nav_menu = $instance['nav_menu'];

        echo $args['before_widget'];
        if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];

        if ( ! empty( $nav_menu ) ) {
            wp_nav_menu( array(
                'menu' => $nav_menu,
                'container' => false,
                'items_wrap' => '<ul>%3$s</ul>',
            ) );
        }

        echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = $instance[ 'title' ] ?? '';
        $nav_menu = $instance[ 'nav_menu' ] ?? '';
        $menus = wp_get_nav_menus();
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'nav_menu' ); ?>"><?php _e( 'Select Menu:' ); ?></label>
            <select class="widefat" id="<?php echo $this->get_field_id( 'nav_menu' ); ?>" name="<?php echo $this->get_field_name( 'nav_menu' ); ?>">
                <option value="">— Select —</option>
                <?php foreach ( $menus as $menu ) : ?>
                    <option value="<?php echo esc_attr( $menu->term_id ); ?>" <?php selected( $nav_menu, $menu->term_id ); ?>><?php echo esc_html( $menu->name ); ?></option>
                <?php endforeach; ?>
            </select>
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['nav_menu'] = ( ! empty( $new_instance['nav_menu'] ) ) ? absint( $new_instance['nav_menu'] ) : '';
        return $instance;
    }
}