<?php
/**
 * The template for displaying all single posts
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
		<?php endwhile; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
