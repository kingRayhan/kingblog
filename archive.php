<?php get_header(); ?>
    <div class="container">
        <div class="row">
			<div class="col-md-12 ml-auto mr-auto">
				<header class="archieve-header text-center">
					<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</header>
				<?php  
				// Grids
				// -------------
				// -> template-parts/blog-list/blog-list-grid
				// -> template-parts/blog-list/blog-list-large
				?>
				<?php echo get_template_part('template-parts/blog-list/blog-list-grid'); ?>
				<?php echo get_template_part('template-parts/pagination'); ?>


			</div>
        </div>
    </div>
<?php get_footer(); ?>