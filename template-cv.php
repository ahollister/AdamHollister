<?php
/* Template Name: CV */
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'page-template-cv' ); ?>
		<?php endwhile; ?>

		<button class="material-button material-button--projects">
			<svg class="icon icon--projects"><use xlink:href="#icon-projects"></use></svg>
		</button>

		<button class="material-button material-button--skills">
			<svg class="icon icon--skills"><use xlink:href="#icon-skills"></use></svg>
		</button>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
