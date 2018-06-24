<?php
/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
