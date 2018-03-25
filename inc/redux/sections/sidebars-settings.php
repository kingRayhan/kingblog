<?php


    // Sidebar section
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Sidebar', 'koffee' ),
        'id'               => 'sidebar',
        'icon'             => 'el el-website',
    ));
    // Blog sidebar
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Sidebar Layout', 'koffee' ),
        'id'               => 'sidebar-section-layout',
        'subsection'       => true,
        'fields' => array(

            array(
                'id'       => 'select_blog_sidebar_layout',
                'type'     => 'select',
                'title'    => esc_html__( 'Blog Page Sidebar Layout', 'koffee' ),
                'options'  => array(
                    'blog-list-no-sidebar'     => esc_html__( 'No Sidebar', 'koffee' ),
                    'blog-list-right-sidebar'  => esc_html__( 'Right Sidebar', 'koffee' ),
                    'blog-list-left-sidebar'   => esc_html__( 'Left Sidebar', 'koffee' ),
                    'blog-list-both-sidebar'   => esc_html__( 'Both Sidebar', 'koffee' ),
                ),
                'default' => 'blog-list-no-sidebar',
            ),


            array(
                'id'       => 'select_arc_sidebar_layout',
                'type'     => 'select',
                'title'    => esc_html__( 'Archieve Page Sidebar Layout', 'koffee' ),
                'options'  => array(
                    'blog-list-no-sidebar'     => esc_html__( 'No Sidebar', 'koffee' ),
                    'blog-list-right-sidebar'  => esc_html__( 'Right Sidebar', 'koffee' ),
                    'blog-list-left-sidebar'   => esc_html__( 'Left Sidebar', 'koffee' ),
                    'blog-list-both-sidebar'   => esc_html__( 'Both Sidebar', 'koffee' ),
                ),
                'default' => 'blog-list-no-sidebar',
            ),


            array(
                'id'       => 'select_search_sidebar_layout',
                'type'     => 'select',
                'title'    => esc_html__( 'Search Page Sidebar Layout', 'koffee' ),
                'options'  => array(
                    'blog-list-no-sidebar'    => esc_html__( 'No Sidebar', 'koffee' ),
                    'blog-list-right-sidebar'  => esc_html__( 'Right Sidebar', 'koffee' ),
                    'blog-list-left-sidebar'   => esc_html__( 'Left Sidebar', 'koffee' ),
                    'blog-list-both-sidebar'   => esc_html__( 'Both Sidebar', 'koffee' ),
                ),
                'default' => 'blog-list-no-sidebar',
            ),



        )
    ));



    // Sidebar Typography
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Sidebar Typography', 'koffee' ),
        'id'               => 'sidebar-typography-section',
        'subsection'       => true,
        'fields' => array(

            array(
                'id' => 'sidebar_widget_spacing_section',
                'type' => 'section',
                'title' => esc_html__('Single widget spacing','koffee'),
                'indent' => true
            ),
            array(
                'id'             => 'sidebar_widget_paddings',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px', 
                'title'          => esc_html__( 'Paddings', 'koffee' ),
                'default'        => array(
                    'padding-top' => '20px',
                    'padding-bottom' => '20px',
                    'padding-left' => '20px',
                    'padding-right' => '20px',
                ),
                'output' => array('.sidebar .single-widget')
            ),
            array(
                'id'             => 'sidebar_widget_margins',
                'type'           => 'spacing',
                'mode'           => 'margin',
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px', 
                'left' => false,
                'right' => false,
                'title'          => esc_html__( 'Margins', 'koffee' ),
                'default' => array(
                    'margin-top' => '30px',
                    'margin-bottom' => '30px'
                ),
                'output' => array('.sidebar .single-widget')
            ),

            array(
                'id' => 'sidebar_widget_title_typography',
                'type' => 'section',
                'title' => esc_html__('Widget Title','koffee'),
                'indent' => true
            ),

            array(
                'id' => 'sidebar_widget_title_coloR',
                'type' => 'color',
                'title' => esc_html__('Color','koffee'),
                'default' => '#614a3d',
                'output' => array('.sidebar .single-widget > h4')
            ),
            array(
                'id'             => 'sidebar_title_padding',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px', 
                'left' => false,
                'right' => false,
                'title'          => esc_html__( 'Paddings', 'koffee' ),
                'default'        => array(
                    'padding-top' => '0px',
                    'padding-bottom' => '25px',
                ),
                'output' => array('.sidebar .single-widget > h4')
            ),
            array(
                'id'             => 'sidebar_title_margins',
                'type'           => 'spacing',
                'mode'           => 'margin',
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'left' => false,
                'right' => false,
                'display_units' => 'px', 
                'title'          => esc_html__( 'Margins', 'koffee' ),
                'default'        => array(
                    'margin-top' => '25px',
                    'margin-bottom' => '0px',
                ),
                'output' => array('.koffee-sidebar .widgetheading')
            ),

        )
    ));