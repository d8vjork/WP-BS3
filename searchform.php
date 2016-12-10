<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_BS3
 */

?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" class="form-control" placeholder="<?php echo get_search_query(); ?>" name="s">
		<span class="input-group-btn">
        	<button class="btn btn-default" type="submit"><?php echo esc_html__( 'Search', 'wp_bs3' ); ?></button>
    	</span>
	</div>
</form>