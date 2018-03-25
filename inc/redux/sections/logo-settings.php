<?php

    /**
     * Logo
     */
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Logo', 'koffee' ),
        'id'               => 'logo-section',
        'icon'             => 'el el-plus-sign',
        'fields'           =>array(
            array(
                'id'       => 'website_logo_or_title',
                'type'     => 'button_set',
                'title'    => esc_html__( 'Use logo as', 'koffee' ),
                'options'  => array(
                    '1' => 'Image',
                    '2' => 'Text'
                ),
                'default'  => '1'
            ),

            
            array(
                'id'       => 'site_logo',
                'type'     => 'media',
                'title'    => esc_html__( 'Logo image', 'koffee' ),
                'subtitle' => esc_html__( 'Upload website logo. Logo size should be 133px x 47px', 'koffee' ),
                'default' => array( 'url' => get_template_directory_uri() . '/assets/img/logo/logo.png' ),
                'required' => array('website_logo_or_title' , 'equals' , '1')
            ),
            // Title
            array(
                'id' => 'website_title',
                'type' => 'text',
                'title' => esc_html__('Website Title','koffee'),
                'default' => get_bloginfo('name'),
                'required' => array('website_logo_or_title' , 'equals' , '2')
            ),
        )
    ));