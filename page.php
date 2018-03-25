<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kingrayhan-blog
 */

get_header(); ?>
    <div class="container <?php if(!has_post_thumbnail()): ?>pt-5<?php endif; ?> single-page-article-container">
        <div class="row">
            <div class="col-md-12">
                <article class="single-page-article">
		<?php
		while ( have_posts() ) :
			the_post(); ?>
					<?php if(has_post_thumbnail()): ?>
					<div class="thumbnail">
						<?php the_post_thumbnail() ?>
					</div>
					<?php endif; ?>
                    <div class="entry-tools">
                        <div class="categories">
                        <?php
                            if( has_tag() )
                            {
                                echo get_the_tag_list(' ' , ' ');
                            }
                        ?>
                        </div>
                        <div class="social-share">
                            <a target="_blank" class="twitter" data-network="Twitter" data-blog="The Mozilla Blog" href="#"><i class="fa fa-twitter"></i> Twitter</a>
                        </div>
                    </div>
                    <div class="article-header">
                        <h1 class="title">
							<?php the_title( ); ?>
						</h1>
                    </div>
                    <div class="article-meta-info">
                        <div class="publish-time">
                            <a href="#">
								March 15, 2018
							</a>
                        </div>
                    </div>
                    <div class="article-content">
                    	<?php the_content(); ?>
                    </div>

                <?php
        		  endwhile; // End of the loop.
        		?>
					
                </article>
            </div>
        </div>
    </div>



        <?php   // If comments are open or we have at least one comment, load up the comment template.
            // if ( comments_open() || get_comments_number() ) :
            //     comments_template();
            // endif; ?>
<?php get_footer();