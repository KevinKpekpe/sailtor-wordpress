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
            // Section pour les Skills
    $wp_customize->add_section( 'skills_section', [
        'title'    => __( 'Skills Section', 'sailtor' ),
        'priority' => 30,
    ] );

    // Titre de la section
    $wp_customize->add_setting( 'skills_section_title', [
        'default'           => 'Skills',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skills_section_title', [
        'label'    => __( 'Section Title', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );

    // Sous-titre de la section
    $wp_customize->add_setting( 'skills_section_subtitle', [
        'default'           => 'Check Our Skills',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skills_section_subtitle', [
        'label'    => __( 'Section Subtitle', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );

    // --- Skill 1 ---
    $wp_customize->add_setting( 'skill1_name', [
        'default'           => 'HTML',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skill1_name', [
        'label'    => __( 'Skill 1 Name', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );
    $wp_customize->add_setting( 'skill1_percentage', [
        'default'           => 100,
        'sanitize_callback' => 'absint',
    ] );
    $wp_customize->add_control( 'skill1_percentage', [
        'label'       => __( 'Skill 1 Percentage', 'sailtor' ),
        'section'     => 'skills_section',
        'type'        => 'number',
        'input_attrs' => [
            'min' => 0,
            'max' => 100,
        ],
    ] );

    // --- Skill 2 ---
    $wp_customize->add_setting( 'skill2_name', [
        'default'           => 'CSS',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skill2_name', [
        'label'    => __( 'Skill 2 Name', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );
    $wp_customize->add_setting( 'skill2_percentage', [
        'default'           => 90,
        'sanitize_callback' => 'absint',
    ] );
    $wp_customize->add_control( 'skill2_percentage', [
        'label'       => __( 'Skill 2 Percentage', 'sailtor' ),
        'section'     => 'skills_section',
        'type'        => 'number',
        'input_attrs' => [
            'min' => 0,
            'max' => 100,
        ],
    ] );

    // --- Skill 3 ---
    $wp_customize->add_setting( 'skill3_name', [
        'default'           => 'JavaScript',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skill3_name', [
        'label'    => __( 'Skill 3 Name', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );
    $wp_customize->add_setting( 'skill3_percentage', [
        'default'           => 75,
        'sanitize_callback' => 'absint',
    ] );
    $wp_customize->add_control( 'skill3_percentage', [
        'label'       => __( 'Skill 3 Percentage', 'sailtor' ),
        'section'     => 'skills_section',
        'type'        => 'number',
        'input_attrs' => [
            'min' => 0,
            'max' => 100,
        ],
    ] );

    // --- Skill 4 ---
    $wp_customize->add_setting( 'skill4_name', [
        'default'           => 'PHP',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skill4_name', [
        'label'    => __( 'Skill 4 Name', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );
    $wp_customize->add_setting( 'skill4_percentage', [
        'default'           => 80,
        'sanitize_callback' => 'absint',
    ] );
    $wp_customize->add_control( 'skill4_percentage', [
        'label'       => __( 'Skill 4 Percentage', 'sailtor' ),
        'section'     => 'skills_section',
        'type'        => 'number',
        'input_attrs' => [
            'min' => 0,
            'max' => 100,
        ],
    ] );

    // --- Skill 5 ---
    $wp_customize->add_setting( 'skill5_name', [
        'default'           => 'WordPress/CMS',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skill5_name', [
        'label'    => __( 'Skill 5 Name', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );
    $wp_customize->add_setting( 'skill5_percentage', [
        'default'           => 90,
        'sanitize_callback' => 'absint',
    ] );
    $wp_customize->add_control( 'skill5_percentage', [
        'label'       => __( 'Skill 5 Percentage', 'sailtor' ),
        'section'     => 'skills_section',
        'type'        => 'number',
        'input_attrs' => [
            'min' => 0,
            'max' => 100,
        ],
    ] );

    // --- Skill 6 ---
    $wp_customize->add_setting( 'skill6_name', [
        'default'           => 'Photoshop',
        'sanitize_callback' => 'sanitize_text_field',
    ] );
    $wp_customize->add_control( 'skill6_name', [
        'label'    => __( 'Skill 6 Name', 'sailtor' ),
        'section'  => 'skills_section',
        'type'     => 'text',
    ] );
    $wp_customize->add_setting( 'skill6_percentage', [
        'default'           => 55,
        'sanitize_callback' => 'absint',
    ] );
    $wp_customize->add_control( 'skill6_percentage', [
        'label'       => __( 'Skill 6 Percentage', 'sailtor' ),
        'section'     => 'skills_section',
        'type'        => 'number',
        'input_attrs' => [
            'min' => 0,
            'max' => 100,
        ],
    ] );

});
