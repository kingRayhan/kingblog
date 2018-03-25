<?php

   Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Header', 'koffee' ),
        'id'               => 'header',
        'customizer_width' => '400px',
        'icon'             => 'el el-home',
    ));

    /**
     * Menubar style
     */
    Redux::setSection( $opt_name, array(
        'title' => 'Menubar Settings',
        'id' => 'menubar_style',
        'subsection' => true,
        'fields'           => array(
            /**
             * Header style
             */
            array(
                'id'       => 'header_style',
                'type'     => 'select',
                'title'    => esc_html__( 'Header Style', 'koffee' ),
                   'options'  => array(
                        'static' => esc_html__('Static' , 'koffee'),
                        'transparent' => esc_html__('Transparent' , 'koffee'),

                    ),
                   'default' => 'static'
            ),

            array(
                'id'       => 'header_search_icon',
                'type'     => 'switch',
                'title'    => esc_html__( 'Show search icon', 'koffee' ),
                'default' =>  true
            ),


        /**
         * Menu padding
         */
            
            array(
                'id'             => 'menubar_padding',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'output'         => array('.header-area'),
                'all'            => false,
                'left' => false,
                'right' => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px',
                'title'          => esc_html__( 'Menubar padding', 'koffee' ),
                'default'        => array(
                    'padding-top'    => '30px',
                    'padding-bottom' => '30px',
                ),
            ),

            /**
             * Menu item padding
             */
            array(
                'id'             => 'menubar_item_padding',
                'type'           => 'spacing',
                'mode'           => 'padding',
                'all'            => false,
                'top' => false,
                'bottom' => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px',
                'title'          => esc_html__( 'Menubar item padding', 'koffee' ),
                'default'        => array(
                    'padding-left' => '18px',
                    'padding-right' => '18px',
                ),
                'output'    => array('.main-menu ul > li > a')
            ),

    //         /**
    //          * Dropdown item padding
    //          */
            array(
                'id'             => 'menubar_dropdown_item_padding',
                'type'           => 'spacing',
                'output'         => array('.main-menu ul li ul'),
                'mode'           => 'padding',
                'all'            => false,
                'units'          => array( 'em', 'px', '%' ), 
                'units_extended' => 'true',
                'display_units' => 'px',
                'title'          => esc_html__( 'Dropdown Item Padding', 'koffee' ),
                'default'        => array(
                    'padding-top'    => '5px',
                    'padding-bottom' => '5px',
                ),
            ),


            ///////////////////////
        )
    ));
    
    /**
     * Menubar typography
     */
    Redux::setSection( $opt_name, array(
        'id' => 'menubar_typography',
        'title' => esc_html__('Menu Typography','koffee'),
        'subsection' => true,
        'fields' => array(
            array(
                'id'          => 'menubar_bg',
                'type'        => 'color',
                'output'      => array('.main-menu-area'), 
                'title'       => esc_html__( 'Menubar Background', 'koffee' ),
                'description'       => 'Only applicable for <b>static</b> menu',
                'default'     => '#614A3D',
                'transparent' => false,
                'output'      => array(
                    'background-color' => 'header.static'
                )
            ),
            array(
                'id'          => 'stycky_menu_bg',
                'type'        => 'color',
                'title'       => esc_html__( 'Sticky Menu Background', 'koffee' ),
                'default'     => '#1F1F1F',
                'output'      => array(
                    'background-color' => '.header-sticky.sticky',
                )
            ),
            array(
                'id'       => 'mainmenu_typography',
                'output'   => array('.main-menu ul > li > a ' , '.main-menu ul > li > a '),
                'type'     => 'typography',
                'title'    => esc_html__( 'Menu Typography', 'koffee' ),
                'google'   => true,
                'default'  => array(
                    'color'       => '#ffffff',
                    'font-size'   => '16px',
                    'font-family' => 'raleway',
                    'font-weight' => '500',
                    'line-height' => '47px',
                    'text-align'  => 'left'
                )
            ),
            array(
                'id'       => 'dropdown_menu_typography',
                'type'     => 'typography',
                'title'    => esc_html__( 'Dropdown Menu Typography', 'koffee' ),
                'google'   => true,
                'default'  => array(
                    'color'       => '#252525',
                    'font-size'   => '14px',
                    'font-family' => 'raleway',
                    'font-weight' => '500',
                    'line-height' => '26px',
                    'text-align'  => 'left'
                ),
                'output' => array('.main-menu ul li ul > li > a')
            ),
            array(
                'id'       => 'mainmenu_dropdown_panel_bg',
                'type'     => 'color',
                'title'    => esc_html__( 'Dropdown panel color', 'koffee' ),
                'default'  => '#FFFFFF',
                'output'   => array('background-color' => '.main-menu ul li > ul')
            ),
            array(
                'id'       => 'mainmenu_hover_and_active_font_color',
                'type'     => 'color',
                'title'    => esc_html__( 'Hover and active menu item Font Color', 'koffee' ),
                'output'   => array('.main-menu ul li.current-menu-item > a,.main-menu ul li:hover > a' , '.main-menu ul li ul li  > a:hover')
            ),

            ////////////////
        )
    ));
