<!-- Single Article card start -->
<article class="article-card">
	
	<?php if(has_post_thumbnail()): ?>
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
		<!-- 	<span class="sep">|</span> -->
			<div class="publish-time">
                <div class="publish-time text-muted">
					<?php the_time( 'F d, Y' ) ?>
                </div>
			</div>
		</div>
		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>
		<div class="readmore">
			[ <a href="<?php the_permalink(); ?>"><?php echo esc_html__( 'Details...', 'kingblog' ) ?></a> ]
		</div>
	</div>
</article>
<!-- Single Article card end -->