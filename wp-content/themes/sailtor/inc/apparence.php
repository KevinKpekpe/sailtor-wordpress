<?php 
add_action('customize_register', function(WP_Customize_Manager $wp_customize){
        // Section Clients
        $wp_customize->add_section('clients_section', array(
            'title'    => __('Logos Clients', 'mon-theme'),
            'priority' => 30,
        ));
    
        // Répétiteur de logos
        for ($i = 1; $i <= 6; $i++) {
            $wp_customize->add_setting("client_logo_$i", array(
                'default'   => '',
                'transport' => 'refresh',
            ));
    
            $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "client_logo_$i", array(
                'label'    => __("Logo Client $i", 'mon-theme'),
                'section'  => 'clients_section',
                'settings' => "client_logo_$i",
            )));
        }
});