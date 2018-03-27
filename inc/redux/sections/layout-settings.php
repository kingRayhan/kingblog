<?php

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Layout', 'kingblog' ),
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
                'title'          => esc_html__( 'Page Content Paddings', 'kingblog' ),
                'default'        => array(
                    'padding-top'    => '55px',
                    'padding-bottom' => '55px',
                ),
                'output' => array('#page-content')
            ),
            array(
                'id'    => 'body_bg',
                'type'  => 'background',
                'title' => esc_html__('Body Background','kingblog'),
                'default'  => array(
                    'background-repeat' => 'no-repeat',
                    'background-size' => 'inherit',
                    'background-attachment' => 'scroll',
                    'background-position' => 'left top',
                    'background-image' => get_template_directory_uri() . '/assets/img/pattern.svg'
                ),
                'output' => array('body')
            ),
        /////////
        )
    ));