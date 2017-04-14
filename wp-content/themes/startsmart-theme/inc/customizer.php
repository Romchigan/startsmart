<?php

function start_smart_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    $wp_customize->add_section( 'front-page' , array(
        'title'      => __( 'Контент головної сторінки', 'start-smart' ),
        'priority'   => 1,
    ) );
    $wp_customize->add_setting( 'landing-title' , array(
        'default'   => 'Landing title',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landing-title', array(
        'label'      => __( 'Landing title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'landing-title',
    ) ) );
    $wp_customize->add_setting( 'landing-sub-title' , array(
        'default'   => 'Landing sub title',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landing-sub-title', array(
        'label'      => __( 'Landing sub title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'landing-sub-title',
    ) ) );
    $wp_customize->add_setting( 'landing-logo' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'landing-logo', array(
        'label'      => __( 'Landing logo', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'landing-logo',
    ) ) );
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
    $wp_customize->add_setting( 'recent-posts-blog-page-title' , array(
        'default'   => 'Recent posts title',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'recent-posts-blog-page-title', array(
        'label'      => __( 'Recent posts on blog page title', 'start-smart' ),
        'section'    => 'front-page',
        'settings'   => 'recent-posts-blog-page-title',
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


/* === Footer customizer register === */
    $wp_customize->add_section( 'footer_soc_section' , array(
        'title'      => __( 'Footer Social Customizer', 'start-smart' ),
        'priority'   => 30,
    ) );

/* --- Footer courses block  --- */
    $wp_customize->add_setting( 'footer_courses_title' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_courses_title', array(
        'label'       => __( 'Courses title'),
        'type'        => 'text',
        'section'     => 'footer_soc_section',
        'settings'    => 'footer_courses_title',
    ) ) );

    $wp_customize->add_setting( 'footer_courses_descript' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_courses_descript', array(
        'label'       => __( 'Courses description'),
        'type'        => 'text',
        'section'     => 'footer_soc_section',
        'settings'    => 'footer_courses_descript',
    ) ) );


/* --- Footer social customizer  --- */
    //  Show social links ?!
    $wp_customize->add_setting( 'soc_chec' , array(
        'default'   => 'true',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'soc_chec', array(
        'label'       => __( 'Show Social links block?'),
        'type'        => 'checkbox',
        'section'     => 'footer_soc_section',
        'settings'    => 'soc_chec',
    ) ) );

    // Social title
    $wp_customize->add_setting( 'soc_title' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'soc_title', array(
        'label'       => __( 'Social title'),
        'type'        => 'text',
        'section'     => 'footer_soc_section',
        'settings'    => 'soc_title',
    ) ) );


    // VK link
    $wp_customize->add_setting( 'vk_chec' , array(
        'default'   => 'true',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk_chec', array(
        'label'       => __( 'Show VK link?'),
        'type'        => 'checkbox',
        'section'     => 'footer_soc_section',
        'settings'    => 'vk_chec',
    ) ) );

    $wp_customize->add_setting( 'vk_link' , array(
        'default'   => 'https://vk.com/',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk_link', array(
        'label'       => __( 'Path to your VK'),
        'type'        => 'text',
        'section'     => 'footer_soc_section',
        'settings'    => 'vk_link',
    ) ) );

    // Facebook link
    $wp_customize->add_setting( 'fb_chec' , array(
        'default'   => 'true',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb_chec', array(
        'label'       => __( 'Show facebook link?'),
        'type'        => 'checkbox',
        'section'     => 'footer_soc_section',
        'settings'    => 'fb_chec',
    ) ) );

    $wp_customize->add_setting( 'fb_link' , array(
        'default'   => 'https://www.facebook.com/',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb_link', array(
        'label'       => __( 'Path to your facebook'),
        'type'        => 'text',
        'section'     => 'footer_soc_section',
        'settings'    => 'fb_link',
    ) ) );

    // Instagram link
    $wp_customize->add_setting( 'insta_chec' , array(
        'default'   => 'true',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'insta_chec', array(
        'label'       => __( 'Show Instagram link?'),
        'type'        => 'checkbox',
        'section'     => 'footer_soc_section',
        'settings'    => 'insta_chec',
    ) ) );

    $wp_customize->add_setting( 'insta_link' , array(
        'default'   => 'https://www.instagram.com/',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'insta_link', array(
        'label'       => __( 'Path to your Instagram'),
        'type'        => 'text',
        'section'     => 'footer_soc_section',
        'settings'    => 'insta_link',
    ) ) );

    // YouTube link
    $wp_customize->add_setting( 'you_chec' , array(
        'default'   => 'true',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'you_chec', array(
        'label'       => __( 'Show YouTube link?'),
        'type'        => 'checkbox',
        'section'     => 'footer_soc_section',
        'settings'    => 'you_chec',
    ) ) );

    $wp_customize->add_setting( 'you_link' , array(
        'default'   => 'https://www.youtube.com/',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'you_link', array(
        'label'       => __( 'Path to your YouTube chanel'),
        'type'        => 'text',
        'section'     => 'footer_soc_section',
        'settings'    => 'you_link',
    ) ) );

}
add_action( 'customize_register', 'start_smart_customize_register' );

//
//function start_smart_customize_preview_js() {
//	wp_enqueue_script( 'start_smart_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
//}
//add_action( 'customize_preview_init', 'start_smart_customize_preview_js' );


//
// /* === Footer customizer register === */
//function footer_start_smart_customize_register( $wp_customize ) {
//
////    /* === Header customizer register === */
////    $wp_customize->add_section( 'new_header_section' , array(
////        'title'     => __( 'Header Customizer', 'mytheme' ),
////        'priority'  => 5,
////    ) );
////
////    $wp_customize->add_setting( 'header_blog_name' , array(
////        'default'   => 'MoZ',
////        'transport' => 'refresh',
////    ) );
////
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'author_name', array(
////        'label'     => __( 'Author name', 'Name' ),
////        'type'      => 'text',
////        'section'   => 'new_header_section',
////        'settings'  => 'header_blog_name',
////    ) ) );
//
////    /* === Footer social customizer register === */
////    $wp_customize->add_section( 'footer_soc_section' , array(
////        'title'      => __( 'Footer Social Customizer', 'mytheme' ),
////        'priority'   => 20,
////    ) );
////
////    //  Show social links ?!
////    $wp_customize->add_setting( 'soc_chec' , array(
////        'default'   => 'true',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'soc_chec', array(
////        'label'       => __( 'Show Social links block?'),
////        'type'        => 'checkbox',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'soc_chec',
////    ) ) );
////
////
////    // VK link
////    $wp_customize->add_setting( 'vk_chec' , array(
////        'default'   => 'true',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk_chec', array(
////        'label'       => __( 'Show VK link?'),
////        'type'        => 'checkbox',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'vk_chec',
////    ) ) );
////
////    $wp_customize->add_setting( 'vk_link' , array(
////        'default'   => 'https://vk.com/',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'vk_link', array(
////        'label'       => __( 'Path to your VK'),
////        'type'        => 'text',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'vk_link',
////    ) ) );
////
////    // Facebook link
////    $wp_customize->add_setting( 'fb_chec' , array(
////        'default'   => 'true',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb_chec', array(
////        'label'       => __( 'Show facebook link?'),
////        'type'        => 'checkbox',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'fb_chec',
////    ) ) );
////
////    $wp_customize->add_setting( 'fb_link' , array(
////        'default'   => 'https://www.facebook.com/',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'fb_link', array(
////        'label'       => __( 'Path to your facebook'),
////        'type'        => 'text',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'fb_link',
////    ) ) );
////
////    // Instagram link
////    $wp_customize->add_setting( 'insta_chec' , array(
////        'default'   => 'true',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'insta_chec', array(
////        'label'       => __( 'Show Instagram link?'),
////        'type'        => 'checkbox',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'insta_chec',
////    ) ) );
////
////    $wp_customize->add_setting( 'insta_link' , array(
////        'default'   => 'https://www.instagram.com/',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'insta_link', array(
////        'label'       => __( 'Path to your Instagram'),
////        'type'        => 'text',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'insta_link',
////    ) ) );
////
////    // YouTube link
////    $wp_customize->add_setting( 'you_chec' , array(
////        'default'   => 'true',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'you_chec', array(
////        'label'       => __( 'Show YouTube link?'),
////        'type'        => 'checkbox',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'you_chec',
////    ) ) );
////
////    $wp_customize->add_setting( 'you_link' , array(
////        'default'   => 'https://www.youtube.com/',
////        'transport' => 'refresh',
////    ) );
////    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'you_link', array(
////        'label'       => __( 'Path to your YouTube chanel'),
////        'type'        => 'text',
////        'section'     => 'footer_soc_section',
////        'settings'    => 'you_link',
////    ) ) );
//
//
//    /* === Contact-page customizer register === */
//
//    $wp_customize->add_section( 'contact_page' , array(
//        'title'      => __( 'Contact Page Customizer', 'blogname' ),
//        'priority'   => 30,
//    ) );
//
//    // Contact title
//    $wp_customize->add_setting( 'contact_title' , array(
//        'default'   => '',
//        'transport' => 'refresh',
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_title', array(
//        'label'       => __( 'Contact title'),
//        'type'        => 'text',
//        'section'     => 'contact_page',
//        'settings'    => 'contact_title',
//    ) ) );
//
//    // Contact description
//    $wp_customize->add_setting( 'contact_description' , array(
//        'default'   => '',
//        'transport' => 'refresh',
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_description', array(
//        'label'       => __( 'Contact description'),
//        'type'        => 'textarea',
//        'section'     => 'contact_page',
//        'settings'    => 'contact_description',
//    ) ) );
//
//    // --- Contact info section ---
//    $wp_customize->add_setting( 'cont_info_chec' , array(
//        'default'   => 'true',
//        'transport' => 'refresh',
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cont_info_chec', array(
//        'label'       => __( 'Show contact info section?'),
//        'type'        => 'checkbox',
//        'section'     => 'contact_page',
//        'settings'    => 'cont_info_chec',
//    ) ) );
//
//    // Phone number
//    $wp_customize->add_setting( 'phone_number' , array(
//        'default'   => '123.456.7890',
//        'transport' => 'refresh',
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'phone_number', array(
//        'label'       => __( ' Your phone number'),
//        'type'        => 'text',
//        'section'     => 'contact_page',
//        'settings'    => 'phone_number',
//    ) ) );
//
//    // Contact info decription ( under phone number )
//    $wp_customize->add_setting( 'cont_info_decript' , array(
//        'default'   => '',
//        'transport' => 'refresh',
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cont_info_decript-info-decription', array(
//        'label'       => __( 'Contact info decription ( under phone number )'),
//        'type'        => 'textarea',
//        'section'     => 'contact_page',
//        'settings'    => 'cont_info_decript',
//    ) ) );
//
//    // Mail
//    $wp_customize->add_setting( 'cont_info_mail' , array(
//        'default'   => 'info@domain.com',
//        'transport' => 'refresh',
//    ) );
//    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cont_info_mail', array(
//        'label'       => __( ' Your mail'),
//        'type'        => 'text',
//        'section'     => 'contact_page',
//        'settings'    => 'cont_info_mail',
//    ) ) );
//
//    //WP_Customize_Image_Control
//    $wp_customize->add_setting( 'cont_banner_img' , array(
//        'transport' => 'refresh',
//    ) );
//    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cont_banner_img', array(
//        'label'       => __( ' Chose banner image'),
//        'section'     => 'contact_page',
//        'settings'    => 'cont_banner_img',
//    ) ) );
//
//}
//add_action( 'customize_register', 'footer_start_smart_customize_register' );
//
