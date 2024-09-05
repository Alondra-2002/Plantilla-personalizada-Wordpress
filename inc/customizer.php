<?php 
    function wpb_customize_register($wp_customize){

        //compatibilidad para el titulo

        $wp_customize->add_setting('showcase_heading', array(
            'default' => _x('plantilla wordpress personalizada',
            'render2web'), 
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_heading', array(
            'label' => __('Titulo', 'render2web'), 
            'section' => 'showcase',
            'priority' => 2 
        ));

        //compatibilidad para el texto

        $wp_customize->add_setting('showcase_text', array(
            'default' => _x('Descripcion del texto showcase aqui',
            'render2web'), 
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('showcase_text', array(
            'label' => __('Texto', 'render2web'), 
            'section' => 'showcase',
            'priority' => 3 
        ));

        //compatibilidad para el boton
        $wp_customize->add_setting('btn_text', array(
            'default' => _x('ver mas', 'render2web'), 
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('btn_text', array(
            'label' => __('Texto boton', 'render2web'), 
            'section' => 'showcase',
            'priority' => 5 
        ));

        $wp_customize->add_setting('btn_url', array(
            'default' => _x('https://render2web.com', 'render2web'), 
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control('btn_url', array(
            'label' => __('URL Boton', 'render2web'),  
            'section' => 'showcase',
            'priority' => 4 
        ));

        $wp_customize->add_section('showcase', array(
            'title' => __('Showcase', 'render2web'), 
            'description' => sprintf(__('Opciones de showcase', 'render2web')),
            'priority' => 130
        ));

        //compatibilidad para la imagen 

        $wp_customize->add_setting('showcase_image', array (
            'default' => get_bloginfo('template_directory'). '/img/showcase.jpg',
            'type' => 'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 
            'showcase_image', array(
            'label' => __('Showcase Image', 'render2web'),
            'section' => 'showcase', 
            'settings' => 'showcase_image', 
            'priority' => 1
        )));
    }

    add_action('customize_register', 'wpb_customize_register' );