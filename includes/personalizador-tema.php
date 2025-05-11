<?php

/*
* Amaru FS Inmobiliaria
* @package Amaru FS Inmobiliaria
* @subpackage Amaru FS Inmobiliaria
* @since 1.0
*/

function ama_customize_register($wp_customize)
{
    // -----------------------------------
    //panel encabezado
    $wp_customize->add_panel('ama_header_panel', array(
        'title' => __('Encabezado', 'ama_abogados'),
        'description' => __('Opciones de encabezado', 'ama_abogados'),
        'priority' => 35
    ));

    //Seccion encabezado LOGO
    $wp_customize->add_section('ama_header_normal', array(
        'title' => __('Logo', 'ama_abogados'),
        'description' => __('Opciones de Logo', 'ama_abogados'),
        'priority' => 10,
        'panel' => 'ama_header_panel'
    ));

    //LOGO
    $wp_customize->add_setting('ama_settings[logo]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo', array(
        'label' =>  __('Logo', 'ama_abogados'),
        'description' => __('Carga Logo', 'ama_abogados'),
        'section' => 'ama_header_normal',
        'settings' => 'ama_settings[logo]'
    )));


    // -----------------------------------
    //panel Pie de página
    $wp_customize->add_panel('ama_footer_panel', array(
        'title' => __('Pie de página', 'ama_abogados'),
        'description' => __('Opciones de pre de página', 'ama_abogados'),
        'priority' => 36
    ));

    //Seccion encabezado superior
    $wp_customize->add_section('ama_footer_top', array(
        'title' => __('Footer superior', 'ama_abogados'),
        'description' => __('Opciones de Footer superior', 'ama_abogados'),
        'priority' => 10,
        'panel' => 'ama_footer_panel'
    ));

    //Enlace Instagram
    $wp_customize->add_setting('ama_settings[top_header_instagram_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('top_header_instagram_link', array(
        'label' =>  __('Enlace Instagram', 'ama_abogados'),
        'description' => __('Coloca la URL Instagram', 'ama_abogados'),
        'section' => 'ama_footer_top',
        'settings' => 'ama_settings[top_header_instagram_link]'
    ));

    //Enlace Linkedin
    $wp_customize->add_setting('ama_settings[top_header_linkedin_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('top_header_linkedin_link', array(
        'label' =>  __('Enlace Linkedin', 'ama_abogados'),
        'description' => __('Coloca la URL Linkedin', 'ama_abogados'),
        'section' => 'ama_footer_top',
        'settings' => 'ama_settings[top_header_linkedin_link]'
    ));

    //Enlace Spotify
    $wp_customize->add_setting('ama_settings[top_header_spotify_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('top_header_spotify_link', array(
        'label' =>  __('Enlace Spotify', 'ama_abogados'),
        'description' => __('Coloca la URL Spotify', 'ama_abogados'),
        'section' => 'ama_footer_top',
        'settings' => 'ama_settings[top_header_spotify_link]'
    ));

    //Enlace Whatsapp
    $wp_customize->add_setting('ama_settings[top_header_whatsapp_link]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('top_header_whatsapp_link', array(
        'label' =>  __('Enlace Whatsapp', 'ama_abogados'),
        'description' => __('Coloca la URL Whatsapp', 'ama_abogados'),
        'section' => 'ama_footer_top',
        'settings' => 'ama_settings[top_header_whatsapp_link]'
    ));

    // -----------------------------------
    //Panel Inico
    $wp_customize->add_panel('ama_panel_homepage', array(
        'title' => __('Página de Inicio', 'ama_abogados'),
        'description' => __('Opciones de ppágina de inicio', 'ama_abogados'),
        'priority' => 37
    ));

    //Seccion HEADER
    $wp_customize->add_section('ama_homepage_header', array(
        'title' => __('Sección Header', 'ama_abogados'),
        'description' => __('Opciones del Header', 'ama_abogados'),
        'priority' => 10,
        'panel' => 'ama_panel_homepage'
    ));

    //Item HEADER
    $wp_customize->add_setting('ama_settings[show_header_section]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('show_header_section', array(
        'label' =>  __('Mostar Header', 'ama_abogados'),
        'section' => 'ama_homepage_header',
        'settings' => 'ama_settings[show_header_section]',
        'type' => 'checkbox'
    ));

    //Seccion Servicios
    $wp_customize->add_section('ama_homepage_services', array(
        'title' => __('Sección Servicios', 'ama_abogados'),
        'description' => __('Opciones de Servicios', 'ama_abogados'),
        'priority' => 20,
        'panel' => 'ama_panel_homepage'
    ));

    //Item Servicios
    $wp_customize->add_setting('ama_settings[show_services_section]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('show_services_section', array(
        'label' =>  __('Mostar Servicios', 'ama_abogados'),
        'section' => 'ama_homepage_services',
        'settings' => 'ama_settings[show_services_section]',
        'type' => 'checkbox'
    ));

    //Seccion Clientes
    $wp_customize->add_section('ama_homepage_clientes', array(
        'title' => __('Sección Nuestros Clientes', 'ama_abogados'),
        'description' => __('Opciones de Nuestros Clientes', 'ama_abogados'),
        'priority' => 30,
        'panel' => 'ama_panel_homepage'
    ));

    //Item Clientes
    $wp_customize->add_setting('ama_settings[show_clientes_section]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('show_clientes_section', array(
        'label' =>  __('Mostar Sección Nuestros Clientes', 'ama_abogados'),
        'section' => 'ama_homepage_clientes',
        'settings' => 'ama_settings[show_clientes_section]',
        'type' => 'checkbox'
    ));

    //Seccion Testimonios
    $wp_customize->add_section('ama_homepage_testimonios', array(
        'title' => __('Sección Testimonios', 'ama_abogados'),
        'description' => __('Opciones de Testimonios', 'ama_abogados'),
        'priority' => 40,
        'panel' => 'ama_panel_homepage'
    ));

    //Item Testimonios
    $wp_customize->add_setting('ama_settings[show_testimonios_section]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('show_testimonios_section', array(
        'label' =>  __('Mostar Sección Testimonios', 'ama_abogados'),
        'section' => 'ama_homepage_testimonios',
        'settings' => 'ama_settings[show_testimonios_section]',
        'type' => 'checkbox'
    ));

    //Seccion Spotify
    $wp_customize->add_section('ama_homepage_spotify', array(
        'title' => __('Sección Spotify', 'ama_abogados'),
        'description' => __('Opciones de Spotify', 'ama_abogados'),
        'priority' => 50,
        'panel' => 'ama_panel_homepage'
    ));

    //Item Spotify
    $wp_customize->add_setting('ama_settings[show_spotify_section]', array(
        'default' => '',
        'type' => 'theme_mod'
    ));

    $wp_customize->add_control('show_spotify_section', array(
        'label' =>  __('Mostar Sección Spotify', 'ama_abogados'),
        'section' => 'ama_homepage_spotify',
        'settings' => 'ama_settings[show_spotify_section]',
        'type' => 'checkbox'
    ));
}

add_action('customize_register', 'ama_customize_register');
