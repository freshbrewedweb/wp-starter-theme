<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fbw
 */

?>
	</div><!-- .container -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'fbw' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'fbw' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'fbw' ), 'fbw', '<a href="https://automattic.com/" rel="designer">Fresh Brewed Web</a>' ); ?>
			</div><!-- .site-info -->
		</div><!-- #content.container -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
