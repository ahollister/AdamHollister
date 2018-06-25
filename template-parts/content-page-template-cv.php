<?php
/**
 * Template part for displaying page content in page.php
 */

$data = get_fields();
?>

<article>
	<header class="page-header">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<h2 class="page-subheader">
		<span class="screen-reader-text">
			<?php echo esc_html( $data['welcome_text'] ); ?>
		</span>
	</h2>

	<div class="page-introduction fadein">
		<?php echo wp_kses_post( $data['introduction'] ); ?>
	</div>

	<div class="element"></div>

</article>
