<?php get_header(); ?>
    <div class="container pt-5">
        <div class="row">
        	<div class="col-md-8 ml-auto mr-auto">
				<?php  
				// Grids
				// -------------
				// -> template-parts/blog-list/blog-list-grid
				// -> template-parts/blog-list/blog-list-large
				?>
				<?php echo get_template_part('template-parts/blog-list/blog-list-large'); ?>
				<?php echo get_template_part('template-parts/pagination'); ?>

			</div>
        </div>
    </div>
<?php get_footer(); ?>