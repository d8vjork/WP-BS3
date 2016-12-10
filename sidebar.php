<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_BS3
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="col-sm-3 col-sm-offset-1 blog-sidebar" role="complementary">
	<div class="sidebar-module sidebar-module-inset">
		<h4>Acerca de</h4>
		<p><?php bloginfo('description'); ?></p>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
