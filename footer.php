<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_BS3
 */

?>

	</div><!-- #content -->

	<footer class="blog-footer">
		<p><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'wp_bs3' ), 'wp_bs3', '<a href="https://d8vjork.es" rel="designer">d8vjork</a>' ); ?></p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>
</html>
