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

		<svg id="svg-defs" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<defs>
				<symbol id="icon-close" viewBox="0 0 24 24">
					<title><?php esc_html( 'Close' ); ?></title>
					<path d="M18.984 6.422l-5.578 5.578 5.578 5.578-1.406 1.406-5.578-5.578-5.578 5.578-1.406-1.406 5.578-5.578-5.578-5.578 1.406-1.406 5.578 5.578 5.578-5.578z"></path>
				</symbol>
				<symbol id="icon-menu" viewBox="0 0 24 24">
					<title><?php esc_html( 'Menu' ); ?></title>
					<path d="M12 15.984c1.078 0 2.016 0.938 2.016 2.016s-0.938 2.016-2.016 2.016-2.016-0.938-2.016-2.016 0.938-2.016 2.016-2.016zM12 9.984c1.078 0 2.016 0.938 2.016 2.016s-0.938 2.016-2.016 2.016-2.016-0.938-2.016-2.016 0.938-2.016 2.016-2.016zM12 8.016c-1.078 0-2.016-0.938-2.016-2.016s0.938-2.016 2.016-2.016 2.016 0.938 2.016 2.016-0.938 2.016-2.016 2.016z"></path>
				</symbol>
				<symbol id="icon-back" viewBox="0 0 24 24">
					<title><?php esc_html( 'Back' ); ?></title>
					<path d="M20.016 11.016v1.969h-12.188l5.578 5.625-1.406 1.406-8.016-8.016 8.016-8.016 1.406 1.406-5.578 5.625h12.188z"></path>
				</symbol>
				<symbol id="icon-projects" viewBox="0 0 24 24">
					<title><?php esc_html( 'See Projects' ); ?></title>
					<path d="M12 18.984c0.563 0 0.984-0.422 0.984-0.984s-0.422-0.984-0.984-0.984-0.984 0.422-0.984 0.984 0.422 0.984 0.984 0.984zM3.984 5.016v10.969h16.031v-10.969h-16.031zM20.016 18h3.984c0 1.078-0.938 2.016-2.016 2.016h-19.969c-1.078 0-2.016-0.938-2.016-2.016h3.984c-1.078 0-1.969-0.938-1.969-2.016v-10.969c0-1.078 0.891-2.016 1.969-2.016h16.031c1.078 0 1.969 0.938 1.969 2.016v10.969c0 1.078-0.891 2.016-1.969 2.016z"></path>
				</symbol>
				<symbol id="icon-skills" viewBox="0 0 24 24">
					<title><?php esc_html( 'See Skills' ); ?></title>
					<path d="M12 6c2.203 0 3.984 1.781 3.984 3.984 0 2.484-3 2.766-3 5.016h-1.969c0-3.234 3-3 3-5.016 0-1.078-0.938-1.969-2.016-1.969s-2.016 0.891-2.016 1.969h-1.969c0-2.203 1.781-3.984 3.984-3.984zM12 20.016c4.406 0 8.016-3.609 8.016-8.016s-3.609-8.016-8.016-8.016-8.016 3.609-8.016 8.016 3.609 8.016 8.016 8.016zM12 2.016c5.531 0 9.984 4.453 9.984 9.984s-4.453 9.984-9.984 9.984-9.984-4.453-9.984-9.984 4.453-9.984 9.984-9.984zM11.016 18v-2.016h1.969v2.016h-1.969z"></path>
				</symbol>
			</defs>
		</svg>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
