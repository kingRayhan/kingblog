<?php
global $theme;
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kingrayhan-blog
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<!--============================================== 
		Site Meta information start
	==============================================-->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="corporate, creative, general, portfolio, photography, blog, e-commerce, shop, product, gallery, retina, responsive">
    <meta name="author" content="KingRayhan">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--============================================== 
		Site Meta information end
	==============================================-->
	

	<!--============================================== 
		WP generated header Scripts start  
	==============================================-->
	<?php wp_head(); ?>
	<!--============================================== 
		WP generated header Scripts end  
	==============================================-->


	<?php if($theme['custom_css']): ?>
	<!--============================================== 
		Custom css start  
	==============================================-->
	<style>
		<?php echo $theme['custom_css']; ?>
	</style>
	<!--============================================== 
		Custom css end  
	==============================================-->
	<?php endif; ?>


	<?php if($theme['code_before_head']): ?>
	<!--============================================== 
		Custom header code start  
	==============================================-->

	<?php echo $theme['code_before_head']; ?>

	<!--============================================== 
		Custom header code end  
	==============================================-->
	<?php endif; ?>


</head>
<body <?php body_class(); ?>>
<div id="app">
	<?php 

	/**
	 * Page Banner
	 */
	if (is_home() && $theme['show_banner_in']['index'])
	{
		echo get_template_part('template-parts/banner');
	}
	if( is_page() && $theme['show_banner_in']['page'] )
	{
		echo get_template_part('template-parts/banner');
	}
	if( is_single() && $theme['show_banner_in']['single'] )
	{
		echo get_template_part('template-parts/banner');
	}

	?>
	<?php echo get_template_part('template-parts/navbar') ?>
	<div class="container" id="page-content">