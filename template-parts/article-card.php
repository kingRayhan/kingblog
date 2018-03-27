<?php global $theme; ?>
<!-- Single Article card start -->
<article class="article-card">
	
	<?php if(has_post_thumbnail() && $theme['blog_list_show_fet_img']): ?>
	<div class="thumbnail">
		<?php the_post_thumbnail() ?>
	</div>
	<?php endif; ?>
	
	<div class="article-content">
		<h2 class="title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<div class="article-meta-info">
			<!-- <span class="author-name">
				<a href="#">
					King Rayhan
				</a>
			</span> -->
			<?php if( $theme['blog_list_show_date'] ): ?>
			<!-- <span class="sep">|</span> -->
			<div class="publish-time">
                <div class="publish-time text-muted">
					<?php the_time( $theme['blog_list_date_format'] ) ?>
                </div>
			</div>
			<?php endif; ?>
		</div>
		<div class="excerpt">
			<?php 
			if( $theme['blog_content_display'] == 'excerpt' )
			{
				echo wp_trim_words( get_the_content(), $theme['blog_excerpt_length'] );
			}else{
				the_content();
			}

			?>
		</div>
		<div class="readmore">
			[ <a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Details...', 'kingblog' ) ?></a> ]
		</div>
	</div>
</article>
<!-- Single Article card end -->