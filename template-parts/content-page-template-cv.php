<?php
/**
 * Template part for displaying page content in page.php
 */

$data = get_fields();
?>

<article class="cv">
	<header>
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
	</header>

	<section class="cv-section cv-section--introduction">
		<div class="container">
			<h2 class="page-subheader">
				<span class="screen-reader-text">
					<?php echo esc_html( $data['welcome_text'] ); ?>
				</span>
			</h2>
			<div class="cv-introduction fadein">
				<?php echo wp_kses_post( $data['introduction'] ); ?>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1519.87 378.73">
			<path class="cls-1" d="M-534.56,492.79S-473.83,474-430.29,676.55s236.23,46.6,236.23,46.6S17.24,600.3,240.79,687.52s200.46-84.08,371.59-140.35S768.46,765.66,768.46,765.66s-6.1,127.4,93.92,1.31,122.93-323,122.93-323Z" transform="translate(534.56 -443.95)"/>
		</svg>
	</section><!-- Introduction -->

	<section class="cv-section cv-section--experience">
		<div class="container">
			<h2 class="cv-section-title">
				<?php echo esc_html( $data['experience_section_title'] ); ?>
			</h2>

			<?php foreach( $data['experience_items'] as $experience_item ) : ?>
				<div class="cv-item">
					<h3 class="cv-item__title">
						<?php echo esc_html( $experience_item['company'] ); ?>
						<span><?php echo esc_html( $experience_item['role'] ); ?></span>
					</h3>
					<div class="cv-item__date">
						<?php
							// Get start and end dates
							$start_date     = date( 'F Y', strtotime( $experience_item['start_date'] ) );
							$start_datetime = date( 'Y-m', strtotime( $experience_item['start_date'] ) );
							$end_date     = 'Current';
							$end_datetime = date( 'Y-m' );
							// If not the current role, use end_date
							if ( ! $experience_item['current'] && ! empty( $experience_item['end_date'] ) ) {
								$end_date     = date( 'F Y', strtotime( $experience_item['end_date'] ) );
								$end_datetime = date( 'Y-m', strtotime( $experience_item['end_date'] ) );
							}
						?>
						<time datetime="<?php echo $start_datetime; ?>">
							<?php echo $start_date; ?>
						</time>
						<span>to</span>
						<time datetime="<?php echo $end_datetime; ?>">
							<?php echo $end_date; ?>
						</time>
					</div>
					<div class="cv-item__description">
						<?php echo wpautop( wp_kses_post( $experience_item['role_description'] ) ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section><!-- Experience -->


	<section class="cv-section cv-section--education">
		<div class="container">
			<h2 class="cv-section-title">
				<?php echo esc_html( $data['education_section_title'] ); ?>
			</h2>

			<?php foreach( $data['education_items'] as $education_item ) : ?>
				<div class="cv-item">
					<h3 class="cv-item__title">
						<?php echo esc_html( $education_item['institution'] ); ?>

						<?php if ( ! empty( $education_item['degree_type'] ) ) : ?>
							<span><?php echo esc_html( $education_item['degree_type'] ); ?></span>
						<?php endif; ?>
					</h3>

					<?php if ( ! empty( $education_item['start_date'] ) && ! empty( $education_item['end_date'] ) ) : ?>
						<div class="cv-item__date">
							<?php
								// Get start and end dates
								$start_date     = date( 'F Y', strtotime( $education_item['start_date'] ) );
								$start_datetime = date( 'Y-m', strtotime( $education_item['start_date'] ) );
								$end_date       = date( 'F Y', strtotime( $education_item['end_date'] ) );
								$end_datetime   = date( 'Y-m', strtotime( $education_item['end_date'] ) );
							?>
							<time datetime="<?php echo $start_datetime; ?>">
								<?php echo $start_date; ?>
							</time>
							<span>to</span>
							<time datetime="<?php echo $end_datetime; ?>">
								<?php echo $end_date; ?>
							</time>
						</div>
					<?php endif; ?>

					<?php if ( ! empty( $education_item['description'] ) ) : ?>
						<div class="cv-item__description">
							<?php echo wpautop( wp_kses_post( $education_item['description'] ) ); ?>
						</div>
					<?php endif; ?>

				</div><!-- Item -->
			<?php endforeach; ?>
		</div>
	</section><!-- Education -->

	<?php
	// Projects modal
	include locate_template( 'template-parts/content-modal-projects.php' );
	// Skills modal
	include locate_template( 'template-parts/content-modal-skills.php' );
	?>

</article>
