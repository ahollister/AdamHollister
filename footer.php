<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'adamhollistercv' ) ); ?>">
				<?php echo esc_html__( 'Proudly powered by WordPress', 'adamhollistercv' ); ?>
			</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
