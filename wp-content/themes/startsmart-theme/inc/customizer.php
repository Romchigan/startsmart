<?php

function start_smart_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'front-page' , array(
        'title'      => __( 'Контент головної сторінки', 'start-smart' ),
        'priority'   => 1,
    ) );
    $wp_customize->add_setting( 'about-us-title' , array(
        'default'   => 'About us',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about-us-title', array(
        'label'      => __( 'About us title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'about-us-title',
    ) ) );
    $wp_customize->add_setting( 'about-us-description' , array(
        'default'   => 'About us description',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'about-us-description', array(
        'label'      => __( 'About us description', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'about-us-description',
    ) ) );
    $wp_customize->add_setting( 'about-us-image' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about-us-image', array(
        'label'      => __( 'About us image', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'about-us-image',
    ) ) );
    $wp_customize->add_setting( 'learning-title' , array(
        'default'   => 'Learning',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'learning-title', array(
        'label'      => __( 'Learning title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'learning-title',
    ) ) );
    $wp_customize->add_setting( 'team-title' , array(
        'default'   => 'Learning',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'team-title', array(
        'label'      => __( 'Team title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'team-title',
    ) ) );
    $wp_customize->add_setting( 'recent-posts-title' , array(
        'default'   => 'Recent posts title',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'recent-posts-title', array(
        'label'      => __( 'Recent posts title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'recent-posts-title',
    ) ) );
    $wp_customize->add_setting( 'recent-posts-description' , array(
        'default'   => 'Recent posts description',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'recent-posts-description', array(
        'label'      => __( 'Recent posts description', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'recent-posts-description',
    ) ) );
    $wp_customize->add_setting( 'contact-us-section-title' , array(
        'default'   => 'Get in touch',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-us-section-title', array(
        'label'      => __( 'Contact us title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'contact-us-section-title',
    ) ) );
    $wp_customize->add_setting( 'contact-us-section-description' , array(
        'default'   => 'description',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-us-section-description', array(
        'label'      => __( 'Contact us description', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'contact-us-section-description',
    ) ) );
    $wp_customize->add_setting( 'address-title' , array(
        'default'   => 'Find us',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'address-title', array(
        'label'      => __( 'Address title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'address-title',
    ) ) );
    $wp_customize->add_setting( 'address-info' , array(
        'default'   => 'Find us',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'address-info', array(
        'label'      => __( 'Address info', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'address-info',
    ) ) );
    $wp_customize->add_setting( 'message-us-title' , array(
        'default'   => 'Message us',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'message-us-title', array(
        'label'      => __( 'Message us title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'message-us-title',
    ) ) );
    $wp_customize->add_setting( 'message-us-mail' , array(
        'default'   => 'startsmartdevelopment@gmail.com',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'message-us-mail', array(
        'label'      => __( 'Message us mail', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'message-us-mail',
    ) ) );
    $wp_customize->add_setting( 'message-us-social' , array(
        'default'   => 'vk.com/startsmart_ck',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'message-us-social', array(
        'label'      => __( 'Message us social', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'message-us-social',
    ) ) );
    $wp_customize->add_setting( 'contact-form-title' , array(
        'default'   => 'Contact us',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact-form-title', array(
        'label'      => __( 'Contact from title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'contact-form-title',
    ) ) );
}
add_action( 'customize_register', 'start_smart_customize_register' );


function start_smart_customize_preview_js() {
	wp_enqueue_script( 'start_smart_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'start_smart_customize_preview_js' );
