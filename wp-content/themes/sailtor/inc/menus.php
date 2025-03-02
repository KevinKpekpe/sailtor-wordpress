<?php 

require_once ('widgets/Footer_About_Widget.php');
require_once ('widgets/Footer_Links_Widget.php');
require_once ('widgets/Footer_Newsletter_Widget.php');
require_once ('widgets/Footer_Services_Widget.php');

add_action('after_setup_theme', function () {
    register_nav_menu('header', __('Navigation principale', 'sailtor'));
    add_image_size('custom-thumbnail', 80, 60, true);
});

add_action('widgets_init', function () {
    register_widget(Footer_About_Widget::class);
    register_widget(Footer_Links_Widget::class);
    register_widget(Footer_Newsletter_Widget::class);
    register_widget(Footer_Services_Widget::class);
    
    register_sidebar( array(
        'name'          => __( 'Pied de page - À propos', 'sailtor' ),
        'id'            => 'footer-about',
        'description'   => __( 'Ajoutez des widgets ici pour apparaître dans la section "À propos" de votre pied de page.', 'sailtor' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Pied de page - Liens utiles', 'sailtor' ),
        'id'            => 'footer-links-useful',
        'description'   => __( 'Ajoutez des widgets ici pour apparaître dans la section "Liens utiles" de votre pied de page.', 'sailtor' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Pied de page - Nos services', 'sailtor' ),
        'id'            => 'footer-links-services',
        'description'   => __( 'Ajoutez des widgets ici pour apparaître dans la section "Nos services" de votre pied de page.', 'sailtor' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Pied de page - Newsletter', 'sailtor' ),
        'id'            => 'footer-newsletter',
        'description'   => __( 'Ajoutez des widgets ici pour apparaître dans la section "Newsletter" de votre pied de page.', 'sailtor' ),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
});
