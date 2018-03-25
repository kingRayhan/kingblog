<?php
global $theme;
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kingrayhan-blog
 */

?>
</div><!-- #app (start at header.php ) -->

	<footer id="site-footer">
		<div class="container text-center">
			<div class="row">
				<div class="col-md-12">
					<div class="quote">
						<h3>Be who you want to be</h3>
					</div>
					<div class="social-links">
						<a href="#"><i class="fa fa-github"></i></a>
						<a href="#"><i class="fa fa-codepen"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--============================================== 
		WP generated footer Scripts start  
	==============================================-->

		<?php wp_footer(); ?>

	<!--============================================== 
		WP generated footer Scripts end  
	==============================================-->




	<?php if($theme['custom_js']): ?>
	<!--============================================== 
		Custom JS start  
	==============================================-->
	<script>
		<?php echo $theme['custom_js']; ?>
	</script>
	<!--============================================== 
		Custom JS end  
	==============================================-->
	<?php endif; ?>




	<?php if($theme['code_before_body']): ?>
	<!--============================================== 
		Custom footer code start  
	==============================================-->

	<?php echo $theme['code_before_body']; ?>
	
	<!--============================================== 
		Custom footer code end  
	==============================================-->
	<?php endif; ?>
</body>
</html>