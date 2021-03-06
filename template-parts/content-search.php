<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_BS3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
	<header>
		<?php the_title( sprintf( '<h2 class="blog-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<p class="blog-post-meta">
			<?php wp_bs3_posted_on(); ?>
		</p><!-- .blog-post-meta -->
		<?php endif; ?>
	</header>

	<?php the_excerpt(); ?>

	<footer>
		<?php wp_bs3_entry_footer(); ?>
	</footer>
</article><!-- #post-## -->
