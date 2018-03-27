<?php

   /**
     * Blog
     */
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Banner', 'kingblog' ),
        'id'               => 'banner',
        'icon'             => 'el el-file-edit',
        'fields'           => array(
/////////// Options start from here...
array(
    'id'       => 'show_banner_in',
    'type'     => 'checkbox',
    'title'    => __('Show banner in', 'kingblog'),
 
    //Must provide key => value pairs for multi checkbox options
    'options'  => array(
        'index' => 'Index Page',
        'single' => 'Single',
        'page' => 'Page'
    ),
 
    //See how default has changed? you also don't need to specify opts that are 0.
    'default' => array(
        'index' => 1,
        'single' => 1,
        'page' => 1
    )
),

array(
    'id' => 'show_banner_tagline',
    'type' => 'switch',
    'title' => 'Show Tagline',
    'on' => 'Show',
    'off' => 'Hide',
    'default' => true
),

array(         
    'id'       => 'page-banner-background',
    'type'     => 'background',
    'title'    => __('Body Background', 'redux-framework-demo'),
    'subtitle' => __('Body background with image, color, etc.', 'redux-framework-demo'),
    'desc'     => __('This is the description field, again good for additional info.', 'redux-framework-demo'),
    'default'  => array(
        'background-color' => '#1e73be',
        'background-image' => get_template_directory_uri() . '/assets/img/pattern.png'
    ),
    'output' => array('#banner')
),


array(
    'id' => 'banner-spice-letters-color',
    'type' => 'color',
    'title' => 'Title Splice letter color',
    'output' => array('#site-title')
)



/////////////////////////////

        )
    ));