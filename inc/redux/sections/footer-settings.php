<?php
    // Footer Section
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer', 'koffee' ),
        'id'               => 'footer',
        'icon'             => 'el el-arrow-down',
    ));

    /**
     * Footer top
     */
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Top', 'koffee' ),
        'id'               => 'footer-top',
        'desc'             => esc_html__( 'These are really basic fields!', 'koffee' ),
        'customizer_width' => '400px',
        'subsection' => true,
        'fields' => array(


            array(
                'id'       => 'enable_footer_widget_area',
                'type'     => 'switch', 
                'title'    => esc_html__('Enable Footer widget area', 'koffee'),
                'on'       => esc_html__('Enable','koffee'),
                'off'       => esc_html__('Disable','koffee'),
                'default'  => true,
            ),

            /**
             * Footer layout
             */
            array(
                'id' => 'footer-sidebar-layout',
                'type' => 'image_select',
                'title' => esc_html__('Footer sidebar layout' , 'koffee'),
                'required' => array('enable_footer_widget_area','equals','1'),
                //
                   'options'  => array(
                        '1'  => array(
                            'alt'   => '1 Column', 
                            'img'   => get_template_directory_uri() . '/inc/footer-layout-img/fs-1.png'
                        ),
                        '2'  => array(
                            'alt'   => '1 Column', 
                            'img'   => get_template_directory_uri() . '/inc/footer-layout-img/fs-2.png'
                        ),
                        '3'  => array(
                            'alt'   => '1 Column', 
                            'img'   => get_template_directory_uri() . '/inc/footer-layout-img/fs-3.png'
                        ),
                        '4'  => array(
                            'alt'   => '1 Column', 
                            'img'   => get_template_directory_uri() . '/inc/footer-layout-img/fs-4.png'
                        ),

                    ),
                   'default' => '4'


            ), // first
            ///////////////////
            array(
                'id'       => 'footer_widget_area_bg',
                'type'     => 'background', 
                'title'    => esc_html__('Background', 'koffee'),
                'required' => array('enable_footer_widget_area','equals','1'),
                'default'  => array(
                    'background-repeat' => 'no-repeat',
                    'background-size' => 'inherit',
                    'background-attachment' => 'scroll',
                    'background-position' => 'left top',
                    'background-image' => get_template_directory_uri() . '/assets/img/footer-bg.jpg'

                ),
                'output' => array('.footer-widget-area')
            ),
            array(
                'id'       => 'footer_top_border',
                'type'     => 'border',
                'title'    => esc_html__( 'Border', 'koffee' ),
                'required' => array('enable_footer_widget_area','equals','1'),
                'left'     => false,
                'right'     => false,
                'all'      => false,
                'output'   => array('.footer-widget-area')
            ),
            array(
                'id'             => 'footer_top_margin',
                'type'           => 'spacing',
                'mode'           => 'margin',
                'left'     => false,
                'right'     => false,
                'units'          => array( 'em', 'px', '%' ), 
                'required' => array('enable_footer_widget_area','equals','1'),
                'units_extended' => 'true',
                'display_units' => 'px', 
                'title'          => esc_html__( 'Margins', 'koffee' ),
                'output'         => array('.footer-widget-area')
            ),
            array(
                'id'             => 'footer_top_padding',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'left'     => false,
                'right'     => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px', 
                'title'          => esc_html__( 'Paddings', 'koffee' ),
                'required' => array('enable_footer_widget_area','equals','1'),
                'default'        => array(
                    'padding-top' => '100px',
                    'padding-bottom' => '13px',
                ),
                'output' => array('.footer-widget-area')
            ),
        ) // fields
    ) );

    /**
     * Footer bottom
     */
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Bottom', 'koffee' ),
        'id'               => 'footer-bottom',
        'subsection' => true,
        'fields' => array(
            array(
                'id'       => 'enable_footer_bottom_area',
                'type'     => 'switch', 
                'title'    => esc_html__('Enable Footer bottom area', 'koffee'),
                'on'       => esc_html__('Enable','koffee'),
                'off'       => esc_html__('Disable','koffee'),
                'default'  => true,
            ),
            array(
                'id'       => 'footer_bottom_area_bg',
                'type'     => 'background', 
                'title'    => esc_html__('Background', 'koffee'),
                'default'  => array(
                    'background-color' => '#614A3D',
                    'background-repeat' => 'no-repeat',
                    'background-size' => 'inherit',
                    'background-attachment' => 'scroll',
                    'background-position' => 'left top',

                ),
                'required' => array('enable_footer_bottom_area' , 'equals' , '1'),
                'output' => array('.footer-text-area')
            ),
            array(
                'id'       => 'footer_bottom_border',
                'type'     => 'border',
                'title'    => esc_html__( 'Border', 'koffee' ),
                'output'   => array( '.site-header' ),
                'left' => false,
                'right' => false,
                'all'      => false,
                'required' => array('enable_footer_bottom_area' , 'equals' , '1'),
                'output' => array('.footer-text-area')
            ),
            array(
                'id'             => 'footer_bottom_margin',
                'type'           => 'spacing',
                'mode'           => 'margin',
                'all'            => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'left' => false,
                'right' => false,
                'display_units' => 'px', 
                'title'          => esc_html__( 'Margins', 'koffee' ),
                'default'        => array(
                    'margin-top'    => '0px',
                    'margin-bottom' => '0px',
                ),
                'required' => array('enable_footer_bottom_area' , 'equals' , '1'),
                'output'    => array('.footer-text-area')
            ),
            array(
                'id'             => 'footer_bottom_padding',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'left' => false,
                'right' => false,
                'display_units' => 'px', 
                'title'          => esc_html__( 'Paddings', 'koffee' ),
                'default'        => array(
                    'padding-top'    => '20px',
                    'padding-bottom' => '20px',
                ),
                'required' => array('enable_footer_bottom_area' , 'equals' , '1'),
                'output'    => array('.footer-text-area')
            ),
            array(
                'id'      => 'footer-copyright-text',
                'type'    => 'editor',
                'title'   => esc_html__( 'Footer copyright text', 'koffee' ),
                'default' => '<p><a href="'. home_url() .'">'. get_bloginfo('name') .'</a> '.date('Y').'. All Rights Reserved.</p>',
                'args'    => array(
                    'media_buttons' => true,
                    'textarea_rows' => 5,
                    'teeny'         => false,
                    //'tinymce' => array(),
                    'quicktags'     => false,
                ),
                'required' => array('enable_footer_bottom_area' , 'equals' , '1')
            ),

        ) // fields
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Footer Typography', 'koffee' ),
        'id'               => 'footer_typo',
        'customizer_width' => '400px',
        'subsection' => true,
        'fields' => array(
            array(
                'id' => 'widget_typography_title',
                'title' => esc_html__('Widget Title','koffee'),
                'indent' => true,
                'type' => 'section'
            ),
            array(
                'id' => 'footer_widget_title_color',
                'title' => esc_html__('Color','koffee'),
                'type' => 'color',
                'default' => '#FFFFFF',
                'output' => array('color' => '.footer-widget-area .widget-title')
            ),
            array(
                'id'             => 'footer_widget_font_size',
                'type'           => 'dimensions',
                'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
                'units_extended' => 'true',  // Allow users to select any type of unit
                'title'          => esc_html__( 'Font Size', 'koffee' ),
                'height'         => false,
                'default'        => array(
                    'width' => '18',
                    'unit'  => 'px'
                )
            ),
            array(
                'id'             => 'footer_widget_title_padding',
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
                    'padding-bottom' => '0px',
                    'padding-top' => '0px',
                ),
                'output' => array('.footer-widget-area .widget-title')
            ),
            array(
                'id' => 'footer_text_typography_title',
                'title' => esc_html__('Footer Text','koffee'),
                'indent' => true,
                'type' => 'section'
            ),
            array(
                'id' => 'footer_text_color',
                'title' => esc_html__('Text color','koffee'),
                'type' => 'color',
                'default' => '#FFFFFF',
                'output' => array('.footer-widget-area' , '.footer-widget-area p')
            ),
            array(
                'id' => 'footer_text_link_color',
                'title' => esc_html__('Link color','koffee'),
                'type' => 'color',
                'default' => '#FFF',
                'output' => array('color' => '.footer-widget-area a')
            ),
            array(
                'id' => 'footer_text_link_hover_color',
                'title' => esc_html__('Link hover color','koffee'),
                'type' => 'color',
                'default' => '#614A3D',
                'output' => array('.footer-widget-area a:hover')
            ),

        )
    )
);