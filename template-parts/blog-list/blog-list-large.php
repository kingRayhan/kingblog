<div class="article-list">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php echo get_template_part('template-parts/article-card'); ?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>