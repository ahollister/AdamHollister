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

		<button class="material-button material-button--projects" data-modal="projects">
			<div class="screen-reader-text">See Projects</div>
			<svg class="icon icon--projects"><use xlink:href="#icon-projects"></use></svg>
		</button>

		<button class="material-button material-button--skills" data-modal="skills">
			<div class="screen-reader-text">See Skills</div>
			<svg class="icon icon--skills"><use xlink:href="#icon-skills"></use></svg>
		</button>

		<button class="material-button material-button--close">
			<div class="screen-reader-text">Close modals</div>
			<svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>
		</button>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
