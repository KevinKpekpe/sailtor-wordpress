<?php 
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '5.3.3');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), null);
    wp_enqueue_style('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', array(), null);
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', array(), null);
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', array(), null);
    wp_enqueue_style('google_gstatic','https://fonts.gstatic.com',array(), null);
    wp_enqueue_style('google_apis','https://fonts.googleapis.com',array(), null);
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',[],null);
    
    // Enregistrement des scripts
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);
    wp_enqueue_script('php-email-form', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array(), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array(), null, true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', array(), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js', array(), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/vendor/waypoints/noframework.waypoints.js', array(), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
});

add_filter('wpcf7_form_elements', function(string $content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    $content = str_replace('<p>', '', $content);
    $content = str_replace('</p>', '', $content);
    return $content;
});