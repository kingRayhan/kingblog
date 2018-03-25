<div class="row grid">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-4 single-grid">
			<?php echo get_template_part('template-parts/article-card'); ?>
		</div>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
</div>