<?php
/**
 * Template part for displaying the projects modal
 */
?>

<article class="cv-modal cv-modal--skills" data-modal="skills">
	<div class="cv-modal__inner cv-modal__inner--thin">
		<header>
			<h1 class="cv-modal__title">
				<?php echo esc_html( $data['skills_title'] ); ?>
			</h1>
		</header>
		<section>
			<div class="cv-modal__introduction">
				<?php echo wp_kses_post( $data['skills_intro_commercial'] ); ?>
			</div>
			<?php if ( count( $data['skills_commercial'] ) > 0 ) : ?>
				<ul class="cv-modal__list">
					<?php foreach ( $data['skills_commercial'] as $skill ) : ?>
						<li><?php echo $skill['skill_name']; ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</section>
		<section>
			<div class="cv-modal__introduction">
				<?php echo wp_kses_post( $data['skills_intro_non_commercial'] ); ?>
			</div>
			<?php if ( count( $data['skills_non_commercial'] ) > 0 ) : ?>
				<ul class="cv-modal__list">
					<?php foreach ( $data['skills_non_commercial'] as $skill ) : ?>
						<li><?php echo $skill['skill_name']; ?></li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>
		</section>
	</div>
</article>
