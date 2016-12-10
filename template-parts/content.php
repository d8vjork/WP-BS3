<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_BS3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<header>
		<?php
		the_title( '<h2 class="blog-post-title">', '</h2>' );

		if ( 'post' === get_post_type() ) : ?>
		<p class="blog-post-meta">
			<?php wp_bs3_posted_on(); ?>
		</p><!-- .blog-post-meta -->
		<?php
		endif; ?>
	</header>

	<?php
		the_content( sprintf(
			/* translators: %s: Name of current post. */
			wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wp_bs3' ), array( 'span' => array( 'class' => array() ) ) ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp_bs3' ),
			'after'  => '</div>',
		) );
	?>

	<footer>
		<?php wp_bs3_entry_footer(); ?>
	</footer>
</article><!-- #post-## -->
