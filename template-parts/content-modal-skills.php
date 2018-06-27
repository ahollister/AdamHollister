<?php
/**
 * Template part for displaying the skills modal
 */
?>

<div class="cv-modal cv-modal--skills" data-modal="skills">
	<div class="cv-modal__inner">
		<header>
			<h1 class="cv-modal__title">
				<?php
				echo $data['skills_title'];
				?>
			</h1>
			<div class="cv-modal__introduction">
				<?php echo wp_kses_post( $data['skills_intro'] ); ?>
			</div>
		</header>
	</div>
</div>
