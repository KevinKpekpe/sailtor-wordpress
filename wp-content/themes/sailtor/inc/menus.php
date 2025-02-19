<?php 

require_once ('widgets/Footer_About_Widget.php');

require_once ('widgets/Footer_Links_Widget.php');

require_once ('widgets/Footer_Newsletter_Widget.php');

require_once ('widgets/Footer_Services_Widget.php');
add_action('after_setup_theme', function () {
    register_nav_menu('header', __('Main navigation', 'sailtor'));
    add_image_size('custom-thumbnail', 80, 60, true);
});

add_action('widgets_init', function () {
    register_widget(Footer_About_Widget::class);
    register_widget(Footer_Links_Widget::class );
    register_widget(Footer_Newsletter_Widget::class);
    register_widget( Footer_Services_Widget::class);
    register_sidebar( array(
        'name'          => __( 'Footer About', 'votretheme' ),
        'id'            => 'footer-about',
        'description'   => __( 'Add widgets here to appear in the "About" section of your footer.', 'votretheme' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Useful Links', 'votretheme' ),
        'id'            => 'footer-links-useful',
        'description'   => __( 'Add widgets here to appear in the "Useful Links" section of your footer.', 'votretheme' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Our Services', 'votretheme' ),
        'id'            => 'footer-links-services',
        'description'   => __( 'Add widgets here to appear in the "Our Services" section of your footer.', 'votretheme' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Newsletter', 'votretheme' ),
        'id'            => 'footer-newsletter',
        'description'   => __( 'Add widgets here to appear in the "Newsletter" section of your footer.', 'votretheme' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
});