<?php

   /**
     * Typography section
     */
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Typography', 'koffee' ),
        'id'               => 'typography',
        'icon'             => 'el el-fontsize',
    ));


    // Body typography
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Body typography', 'koffee' ),
        'id'               => 'body-typography-section',
        'subsection'       => true,
        'fields'           =>array(
            array(
                'id'        =>    'body_typography',
                'title'     =>  esc_html__('Body Typography','koffee'),
                'subtitle'  =>  esc_html__('These settings control the typography for all body text.','koffee'),
                'type'      => 'typography',
                'subsets'   => false,
                'default'   => array(
                    'font-family' => 'Raleway',
                    'font-weight' => '400',
                    'text-align'  => 'inherit',
                    'font-size'   => '14px',
                    'line-height' => '22px',
                    'color'       => '#606060',
                ),
                'output' => array('body' , 'body p')
            ),
            array(
                'id'        => 'body_link_color',
                'title'     => esc_html__('Link Color','koffee'),
                'subtitle'  => 'Controls the color of all text links.',
                'type'      => 'color',
                'default'   => '#606060',
                'output'    => array('body a')
            ),
            array(
                'id'        => 'body_link_color_hover',
                'title'     => esc_html__('Link Hover Color','koffee'),
                'subtitle'  => 'Controls the color of all text links hover.',
                'type'      => 'color',
                'default'   => '#614A3D',
                'output'    => array('body a:hover')
            ),
        )
    ));


    // Headers typography
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Headers typography', 'koffee' ),
        'id'               => 'headers-typography',
        'subsection'       => true,
        'fields'           =>array(
            array(
                'id'        =>    'h1_typography',
                'title'     =>  esc_html__('H1 Headers Typography','koffee'),
                'subtitle'  =>  esc_html__('These settings control the typography for all H1 Headers.','koffee'),
                'type'      => 'typography',
                'subsets'   => false,
                'default'   => array(
                    'font-family' => 'Raleway',
                    'font-weight' => '700',
                    'text-align'  => 'inherit',
                    'font-size'   => '36px',
                    'line-height' => '45px',
                    'color'       => '#606060',
                ),
                'output' => array('h1')
            ),
            array(
                'id'        =>    'h2_typography',
                'title'     =>  esc_html__('H2 Headers Typography','koffee'),
                'subtitle'  =>  esc_html__('These settings control the typography for all H1 Headers.','koffee'),
                'type'      => 'typography',
                'subsets'   => false,
                'default'   => array(
                    'font-family' => 'Raleway',
                    'font-weight' => '500',
                    'text-align'  => 'inherit',
                    'font-size'   => '30px',
                    'line-height' => '45px',
                    'color'       => '#606060',
                ),
                'output' => array('h2')
            ),
            array(
                'id'        =>    'h3_typography',
                'title'     =>  esc_html__('H3 Headers Typography','koffee'),
                'subtitle'  =>  esc_html__('These settings control the typography for all H3 Headers.','koffee'),
                'type'      => 'typography',
                'subsets'   => false,
                'default'   => array(
                    'font-family' => 'Raleway',
                    'font-weight' => '500',
                    'text-align'  => 'inherit',
                    'font-size'   => '24px',
                    'line-height' => '45px',
                    'color'       => '#606060',
                ),
                'output' => array('h3')
            ),
            array(
                'id'        =>    'h4_typography',
                'title'     =>  esc_html__('H4 Headers Typography','koffee'),
                'subtitle'  =>  esc_html__('These settings control the typography for all H4 Headers.','koffee'),
                'type'      => 'typography',
                'subsets'   => false,
                'default'   => array(
                    'font-family' => 'Raleway',
                    'font-weight' => '400',
                    'text-align'  => 'inherit',
                    'font-size'   => '18px',
                    'line-height' => '35px',
                    'color'       => '#606060',
                ),
                'output' => array('h4')
            ),
            array(
                'id'        =>    'h5_typography',
                'title'     =>  esc_html__('H5 Headers Typography','koffee'),
                'subtitle'  =>  esc_html__('These settings control the typography for all H5 Headers.','koffee'),
                'type'      => 'typography',
                'subsets'   => false,
                'default'   => array(
                    'font-family' => 'Raleway',
                    'font-weight' => '400',
                    'text-align'  => 'inherit',
                    'font-size'   => '14px',
                    'line-height' => '30px',
                    'color'       => '#606060',
                ),
                'output' => array('h5')
            ),
            array(
                'id'        =>    'h6_typography',
                'title'     =>  esc_html__('H6 Headers Typography','koffee'),
                'subtitle'  =>  esc_html__('These settings control the typography for all H6 Headers.','koffee'),
                'type'      => 'typography',
                'subsets'   => false,
                'default'   => array(
                    'font-family' => 'Raleway',
                    'font-weight' => '400',
                    'text-align'  => 'inherit',
                    'font-size'   => '12px',
                    'line-height' => '30px',
                    'color'       => '#606060',
                ),
                'output' => array('h6')
            ),

        )
    ));