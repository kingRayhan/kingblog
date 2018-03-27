<?php

   /**
     * Blog
     */
    Redux::setSection( $opt_name, array(
        'title'            => esc_html__( 'Blog List', 'kingblog' ),
        'id'               => 'blog',
        'icon'             => 'el el-file-edit',
        'fields'           => array(


/**
 * Blog List
 */
            array(
                'id'            => 'blog_list_section',
                'type'          => 'section',
                'title'         => esc_html__( 'Article Card settings', 'kingblog' ),
                'indent'        => true
            ),
            array(
                'id'    => 'blog_content_display',
                'title' => esc_html__('Blog Content Display','kingblog'),
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
                'title'         => esc_html__( 'Blog excerpt length', 'kingblog' ),
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
                'title'         => esc_html__( 'Show fetured image', 'kingblog' ),
                'default'       => true,
            ),

            array(
                'id'            => 'blog_list_show_date',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show publish date', 'kingblog' ),
                'default'       => true,
            ),
            array(
                'id'            => 'blog_list_date_format',
                'type'          => 'text',
                'title'         => esc_html__( 'Date Format', 'kingblog' ),
                'desc'          => 'Control the date format. Here is <a href=".esc_url("http://php.net/manual/en/function.date.php").">Formatting Date and Time</a>',
                'default'       => 'F d, Y',
                'required'      => array('blog_list_show_date','equals',1)
            ),
            array(
                'id'            => 'show_blog_list_readmore',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show read more', 'kingblog' ),
                'default'       => true
            ),
            array(
                'id'    => 'blog_list_read_more_txt',
                'title' => esc_html__('Blog Read More text','kingblog'),
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
                'title'         => esc_html__( 'Blog Single Page', 'kingblog' ),
                'indent'        => true
            ),
            array(
                'id'            => 'single_show_fet_img',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show featured image', 'kingblog' ),
                'default'       => true
            ),
            array(
                'id'            => 'show_blog_author',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Author Name', 'kingblog' ),
                'default'       => true
            ),

            array(
                'id'            => 'show_blog_social_icons',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show Social Sharing Icons', 'kingblog' ),
                'default'       => true
            ),

            array(
                'id'            => 'blog_single_show_date',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show publish date', 'kingblog' ),
                'default'       => true,
            ),


            array(
                'id'            => 'show_blog_date_format',
                'type'          => 'text',
                'title'         => esc_html__( 'Date Format', 'kingblog' ),
                'desc'          => 'Control the date format. Here is <a href=".echo esc_url("http://php.net/manual/en/function.date.php").">Formatting Date and Time</a>',
                'default'       => 'F d, Y',
                'required'      => array('blog_single_show_date','equals',1)
            ),

            array(
                'id'            => 'show_blog_comment_count',
                'type'          => 'switch',
                'title'         => esc_html__( 'Show comment count', 'kingblog' ),
                'default'       => true
            ),
            array(
                'id'            => 'blog_no_comment_text',
                'type'          => 'text',
                'title'         => esc_html__( 'Zero comment text', 'kingblog' ),
                'subtitle'      => esc_html__('When there is no comment on the post' , 'kingblog'),
                'default'       => 'No Comment',
                'required'      => array('show_blog_comment_count','equals',1)
            ),
            array(
                'id'            => 'blog_one_comment_text',
                'type'          => 'text',
                'title'         => esc_html__( 'One comment text', 'kingblog' ),
                'subtitle'      => esc_html__('When there is one comment on the post' , 'kingblog'),
                'default'       => '1 Comment',
                'required'      => array('show_blog_comment_count','equals',1)
            ),
            array(
                'id'            => 'blog_n_comment_text',
                'type'          => 'text',
                'title'         => esc_html__( 'N comment text', 'kingblog' ),
                'subtitle'      => esc_html__('When there is number of comments on the post' , 'kingblog'),
                'default'       => '% Comment',
                'required'      => array('show_blog_comment_count','equals',1)
            )
        )
    ));