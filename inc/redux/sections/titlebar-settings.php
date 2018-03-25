<?php


    // Titlebar & Breadcrumbs

    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Titlebar & Breadcrumbs', 'koffee' ),
        'id'               => 'titlebar-breadcrumbs',
        'icon'             => 'el el-adjust-alt',
        'fields' => array(


            array(
                'id'             => 'breadcrumbs_separator',
                'type'           => 'text',
                'title'          => esc_html__( 'Breadcrumbs separators', 'koffee' ),
                'default'        => '//',
            ),


            array(
                'id'             => 'page_breadcrums_margin',
                'type'           => 'spacing',
                'mode'           => 'margin',
                'all'            => false,
                'left' => false,
                'right' => false,

                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px', 
                'title'          => esc_html__( 'Margins', 'koffee' ),
                'default'        => array(
                    'margin-top'    => '0px',
                    'margin-bottom' => '0px',
                ),
                'output' => array('.breadcrumb-area')
            ),
            array(
                'id'             => 'page_breadcrumb_padding',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'left' => false,
                'right' => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px', 
                'title'          => esc_html__( 'Paddings', 'koffee' ),
                'default'        => array(
                    'padding-top'    => '160px',
                    'padding-bottom' => '200px',
                ),
                'output' => array('.breadcrumb-area')
            ),

        )
    ));