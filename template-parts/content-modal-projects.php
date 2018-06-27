<?php
/**
 * Template part for displaying the projects modal
 */
?>

<article class="cv-modal cv-modal--projects" data-modal="projects">
	<div class="cv-modal__inner">
		<header>
			<h1 class="cv-modal__title">
				<?php echo esc_html( $data['projects_title'] ); ?>
			</h1>
			<div class="cv-modal__introduction">
				<?php echo wp_kses_post( $data['projects_intro'] ); ?>
			</div>
		</header>

		<div class="grid">
			<?php
			// Start Projects query
			$the_query = new WP_Query( array( 'post_type' => array( 'project' ), 'posts_per_page' => 6 ) );
			?>
			<?php if ( $the_query->have_posts() ) : ?>
				<?php while ( $the_query->have_posts() ) : ?>
					<?php $the_query->the_post(); ?>
					<div class="project col">
						<?php $img_url = get_the_post_thumbnail_url(); ?>
						<div class="project__image" style="background-image: url(<?php echo $img_url; ?>); background-size: cover; background-position: 50% 0%">
							<div class="screen-reader-text">
								<?php echo get_post_meta( get_post_thumbnail_id(), '_wp_attachment_image_alt', true ); ?>
							</div>
						</div>
						<h3 class="project__title">
							<?php the_title(); ?>
						</h3>
						<div class="project__content">
							<?php echo apply_filters( 'the_content', get_the_content() ); ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</article>
