<?php

// Template Name: Course Page

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kingrayhan-blog
 */

get_header(); ?>
<style>
    .course-page{
        background-color: #FFF;
        padding: 15px;
        box-shadow: 0 0 5px rgba(0,0,0,.1);
    }
</style>
    <div class="container course-page">
        <div class="row">
            <div class="col-md-12">
                <?php
                while ( have_posts() ) :
                    the_post(); ?>
                    <?php the_content(); ?>
                <?php
                  endwhile; // End of the loop.
                ?>
            </div>
        </div>
    </div>



        <?php   // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            //     comments_template();
            // endif; ?>
<?php get_footer();