<?php

   /**
     * Blog
     */
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog', 'koffee' ),
        'id'               => 'blog',
        'icon'             => 'el el-file-edit',
        'fields'           => array(




/**
 * Titlebar and vackground
 */
            array(
                'id'            => 'blog_page_section_titlebar',
                'type'          => 'section',
                'title'         => esc_html__( 'Titlebar and background', 'koffee' ),
                'indent'        => true
            ),
            array(
                'id'            => 'show_blog_page_section_titlebar',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Breadcrumbs and Titlebar', 'koffee' ),
                'default'        => true
            ),
            array(
                'id'            => 'blog_page_titlebar_title',
                'type'          => 'text',
                'title'         => esc_html__( 'Title', 'koffee' ),
                'default'        => esc_html__( 'Our Blog', 'koffee' ),
                'required' => array('show_blog_page_section_titlebar' , 'equals' , '1')
            ),
            array(
                'id'    => 'blog_page_titlebar_bg',
                'type'  => 'background',
                'title' => esc_html__('Background','koffee'),
                'subtitle'  => esc_html__('Controls the background of the main content area which is everything below header and above footer.','koffee'),
                'default'  => array(
                    'background-color' => '#FFFFFF',
                    'background-repeat' => 'no-repeat',
                    'background-size' => 'inherit',
                    'background-attachment' => 'scroll',
                    'background-position' => 'left top',
                    'background-image' => get_template_directory_uri() . '/assets/img/page-header.jpg'
                ),
                'output' => array('.home .breadcrumb-area'),
                'required' => array('show_blog_page_section_titlebar' , 'equals' , '1')
            ),
            array(
                'id'            => 'blog_page_titlebar_title_text_color',
                'type'          => 'color',
                'title'         => esc_html__( 'Text Color', 'koffee' ),
                'default'        => '#FFFFFF',
                'required' => array('show_blog_page_section_titlebar' , 'equals' , '1'),
                'output'   => array('.home .breadcrumb-text h3' , '.home .breadcrumb-bar li' , '.home .breadcrumb-bar li a')
            ),



/**
 * Section Title
 */
            array(
                'id'            => 'blog_page_section_title',
                'type'          => 'section',
                'title'         => esc_html__( 'Section Title', 'koffee' ),
                'indent'        => true
            ),
            array(
                'id'            => 'show_blog_page_section_title',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Section Title', 'koffee' ),
                'default'        => true
            ),
            array(
                'id'            => 'blog_page_section_title_title',
                'type'          => 'text',
                'title'         => esc_html__( 'Title', 'koffee' ),
                'default'        => esc_html__( 'Our Blog', 'koffee' ),
                'required' => array('show_blog_page_section_title' , 'equals' , '1')
            ),

            array(
                'id'       => 'blog_page_section_title_icon',
                'type'     => 'media',
                'title'    => esc_html__( 'Icon', 'koffee' ),
                'default' => array( 'url' => get_template_directory_uri() . '/assets/img/icons/koffee.png' ),
                'required' => array('show_blog_page_section_title' , 'equals' , '1')
            ),

            array(
                'id'            => 'blog_page_section_title_desc',
                'type'          => 'textarea',
                'title'         => esc_html__( 'Description', 'koffee' ),
                'default'        => esc_html__( 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since.', 'koffee' ),
                'required' => array('show_blog_page_section_title' , 'equals' , '1')
            ),





/**
 * Blog List
 */
            array(
                'id'            => 'blog_list_section',
                'type'          => 'section',
                'title'         => esc_html__( 'Blog List', 'koffee' ),
                'indent'        => true
            ),
            array(
                'id'    => 'blog_content_display',
                'title' => esc_html__('Blog Content Display','koffee'),
                'type'  => 'button_set',
                'options' => array(
                    'excerpt' => 'excerpt',
                    'Full_Content'  => 'Full Content'
                ),
                'default'   => 'excerpt'
            ),
            array(
                'id'            => 'blog_excerpt_length',
                'type'          => 'slider',
                'title'         => esc_html__( 'Blog excerpt length', 'koffee' ),
                'default'       => 20,
                'min'           => 1,
                'step'          => 5,
                'max'           => 300,
                'display_value' => 'text',
                'required' => array('blog_content_display','equals','excerpt')
            ),

            array(
                'id'            => 'blog_list_show_fet_img',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show fetured image', 'koffee' ),
                'default'       => true,
            ),

            array(
                'id'            => 'blog_list_show_date',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show publish date', 'koffee' ),
                'default'       => true,
            ),
            array(
                'id'            => 'blog_list_date_format',
                'type'          => 'text',
                'title'         => esc_html__( 'Date Format', 'koffee' ),
                'desc'          => 'Control the date format. Here is <a href=".esc_url("http://php.net/manual/en/function.date.php").">Formatting Date and Time</a>',
                'default'       => 'F d, Y',
                'required'      => array('blog_list_show_date','equals',1)
            ),
            array(
                'id'            => 'show_blog_list_readmore',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show read more', 'koffee' ),
                'default'       => true
            ),
            array(
                'id'    => 'blog_list_read_more_txt',
                'title' => esc_html__('Blog Read More text','koffee'),
                'type'  => 'text',
                'default'   => 'Read more',
                'required'  => array('show_blog_list_readmore','equals',1)
            ),

/**
 * Blog Single page
 */



            array(
                'id'            => 'blog_single_page_section',
                'type'          => 'section',
                'title'         => esc_html__( 'Blog Single Page', 'koffee' ),
                'indent'        => true
            ),
            array(
                'id'            => 'single_show_fet_img',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show featured image', 'koffee' ),
                'default'       => true
            ),
            array(
                'id'            => 'show_blog_author',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Author Name', 'koffee' ),
                'default'       => true
            ),

            array(
                'id'            => 'show_blog_social_icons',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Social Sharing Icons', 'koffee' ),
                'default'       => true
            ),

            array(
                'id'            => 'blog_single_show_date',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show publish date', 'koffee' ),
                'default'       => true,
            ),


            array(
                'id'            => 'show_blog_date_format',
                'type'          => 'text',
                'title'         => esc_html__( 'Date Format', 'koffee' ),
                'desc'          => 'Control the date format. Here is <a href=".echo esc_url("http://php.net/manual/en/function.date.php").">Formatting Date and Time</a>',
                'default'       => 'F d, Y',
                'required'      => array('blog_single_show_date','equals',1)
            ),

            array(
                'id'            => 'show_blog_comment_count',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show comment count', 'koffee' ),
                'default'       => true
            ),
            array(
                'id'            => 'blog_no_comment_text',
                'type'          => 'text',
                'title'         => esc_html__( 'Zero comment text', 'koffee' ),
                'subtitle'      => esc_html__('When there is no comment on the post' , 'koffee'),
                'default'       => 'No Comment',
                'required'      => array('show_blog_comment_count','equals',1)
            ),
            array(
                'id'            => 'blog_one_comment_text',
                'type'          => 'text',
                'title'         => esc_html__( 'One comment text', 'koffee' ),
                'subtitle'      => esc_html__('When there is one comment on the post' , 'koffee'),
                'default'       => '1 Comment',
                'required'      => array('show_blog_comment_count','equals',1)
            ),
            array(
                'id'            => 'blog_n_comment_text',
                'type'          => 'text',
                'title'         => esc_html__( 'N comment text', 'koffee' ),
                'subtitle'      => esc_html__('When there is number of comments on the post' , 'koffee'),
                'default'       => '% Comment',
                'required'      => array('show_blog_comment_count','equals',1)
            )
        )
    ));