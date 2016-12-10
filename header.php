<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_BS3
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<?php wp_head(); ?>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<div class="blog-masthead">
	  	<div class="container">
		  	<?php 
				wp_nav_menu([
					'theme_location' 	=> 'primary', 
					'container'			=> 'nav', 
					'container_class'	=> 'blog-nav', 
					'items_wrap'		=> '%3$s', 
					'depth' 			=> 0,
					'walker' => new Custom_Nav_Menu()
				]);
			?>
	  	</div>
	</div>

	<div id="content" class="container">

		<div class="blog-header">
			<h1 class="blog-title"><?php bloginfo('name'); ?></h1>
        	<p class="lead blog-description"><?php bloginfo('description'); ?></p>
    	</div>