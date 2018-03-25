<?php

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Layout', 'koffee' ),
        'id'               => 'layout',
        'icon'             => 'el el-website',
        'fields'           => array(

            array(
                'id'             => 'page_content_paddings',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'left' => false,
                'right' => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px',
                'title'          => esc_html__( 'Page Content Paddings', 'koffee' ),
                'default'        => array(
                    'padding-top'    => '55px',
                    'padding-bottom' => '55px',
                ),
                'output' => array('.content-area#primary')
            ),
            array(
                'id'    => 'main_content_bg',
                'type'  => 'background',
                'title' => esc_html__('Main content Background','koffee'),
                'subtitle'  => esc_html__('Controls the background of the main content area which is everything below header and above footer.','koffee'),
                'default'  => array(
                    'background-color' => '#FFFFFF',
                    'background-repeat' => 'no-repeat',
                    'background-size' => 'inherit',
                    'background-attachment' => 'scroll',
                    'background-position' => 'left top',
                ),
                'output' => array('.content-area#primary')
            ),
        /////////
        )
    ));