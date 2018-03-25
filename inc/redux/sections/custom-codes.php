<?php


// Custom code

    Redux::setSection( $opt_name, array(
        'title'      => esc_html__( 'Custom Code', 'kingblog' ),
        'id'         => 'editor-ace',
        'icon'  => 'el el-css',
        'fields'     => array(
            array(
                'id'       => 'custom_css',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'CSS Code', 'kingblog' ),
                'subtitle' => esc_html__( 'Paste your CSS code here.', 'kingblog' ),
                'desc'     => esc_html__('CSS Code
Enter your CSS code in the field below. Do not include any tags or HTML in the field. Custom CSS entered here will override the theme CSS. In some cases, the !important tag may be needed. Don\'t URL encode image or svg paths. Contents of this field will be auto encoded.','kingblog'),
                'mode'     => 'css',
                'theme'    => 'monokai',
            ),
            array(
                'id'       => 'custom_js',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'JS Code', 'kingblog' ),
                'subtitle' => esc_html__( 'Paste your JS code here.', 'kingblog' ),
                'mode'     => 'javascript',
                'theme'    => 'chrome',
                'default'  => "jQuery(document).ready(function(){\n\n});"
            ),
            array(
                'id'       => 'code_before_head',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Space before &lt;/head&gt;', 'kingblog' ),
                'desc' => esc_html__( 'Only accepts javascript code wrapped with &lt;script&gt; tags and HTML markup that is valid inside the &lt;/head&gt; tag.', 'kingblog' ),
                'mode'     => 'html',
                'theme'    => 'chrome',
            ),
            array(
                'id'       => 'code_before_body',
                'type'     => 'ace_editor',
                'title'    => esc_html__( 'Space before &lt;/body&gt;', 'kingblog' ),
                'desc' => esc_html__( 'Only accepts javascript code, wrapped with &lt;script&gt; tags and valid HTML markup inside the &lt;/body&gt; tag.', 'kingblog' ),
                'mode'     => 'html',
                'theme'    => 'chrome',
            ),


        )
    ) );