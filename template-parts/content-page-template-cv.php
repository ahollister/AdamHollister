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

	<div class="cv-section cv-section--introduction fadein">
		<?php echo wp_kses_post( $data['introduction'] ); ?>
	</div><!-- Introduction -->

	<div class="cv-section cv-section--experience">
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

	</div><!-- Experience -->


	<div class="cv-section cv-section--education">
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
	</div><!-- Education -->

	<div class="cv-modal cv-modal--projects" data-modal="projects">
		<div class="cv-modal__inner">
			<h2>
				<?php echo esc_html( $data['projects_title'] ); ?>
			</h2>
			<div class="grid">
				<?php
				// Start Projects query
				$the_query = new WP_Query( array( 'post_type' => array( 'project' ), 'posts_per_page' => 4 ) );
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
	</div>

	<div class="cv-modal cv-modal--skills" data-modal="skills">
		<div class="cv-modal__inner">
			Etiam melius suscipit mea in, ea ipsum delicata eam, veri accusamus scribentur te nec. Ex soluta corrumpit euripidis est. Unum appetere eu vel. Cum et evertitur abhorreant intellegam, ad sit commodo tibique interpretaris. Iudico consul voluptaria his no, ignota reprehendunt definitionem te mea. Lorem ipsum dolor sit amet, minim molestie argumentum est at, pri legere torquatos instructior ex. Vis id odio atomorum oportere, quem modo fabellas sit at, dicat semper est ne. Apeirian detraxit pri eu. No solum accusam has. Ius ne harum mundi clita, eu pro tation audiam. Sed dicit necessitatibus in, id posse nominati eos. Ea vel dictas facilisi adipiscing, verear phaedrum sed ei, omnes oblique sanctus mea ex. Iudico pertinacia constituam cu eos. Te vel fugit libris, libris nemore no pri, graece oportere sea ea. Amet omnium epicuri cum te, sonet dignissim abhorreant pro ea, mei petentium constituam ad. Suscipit gloriatur necessitatibus has et. Eum at omnis omnesque percipitur, est ei melius scriptorem. At copiosae placerat vim, pro at sumo argumentum theophrastus, periculis theophrastus per et. No voluptatum contentiones eum, dolorem perfecto cu duo, duo eros nonumes ea. An has quaeque vivendum, iriure constituam ne nam. Electram maiestatis nec no. Id vis sumo voluptatum, his an pericula erroribus, ad pri laudem verear. Per idque aperiri ea, illud accusam imperdiet cu sed. Sea vitae deserunt ei, vim at erant vituperata. Ea idque congue vocibus mea, virtute lobortis deseruisse mea ut. Et populo prompta pertinax ius. Ut eam audire regione, audiam interesset consequuntur eu eos. In alterum vivendum intellegat eam. In idque legere persius sit, solum dissentiunt ius ea. Qui nonumy petentium at, an tota illud insolens eam, qui sint detraxit at. Ius id audire iuvaret lobortis, mei mutat commodo mnesarchum ne. Homero ponderum ne has. Et vim nemore scaevola, luptatum pertinax instructior no eam, at sale choro solet nam. At cum velit repudiare persequeris. At mea harum scripserit, sit graece ignota gloriatur an, ad forensibus omittantur quo. Ex veritus patrioque eum, eius diceret molestiae an sea. No veritus placerat pertinacia vix, eu mel error delicata, ad eos doctus veritus. Mundi forensibus pri ne, ei detracto scaevola scripserit mea. Nam meis vituperata ut, ei alia saperet ius, omnes labore recusabo mea an. Sit ea porro urbanitas comprehensam, persius corpora mei ne. Duo te nihil mollis phaedrum, pro eu nulla conceptam scriptorem. Elitr disputationi id usu, cum tollit possit suavitate at, te adhuc fabellas torquatos pro. Vivendo perpetua vim te, ne vel reque qualisque. Magna scripta vel et, quot aliquip quaerendum eu est. Et abhorreant elaboraret per. Ut esse dissentiet vel, menandri legendos vel ex. Ex ius dolorum comprehensam, nisl recusabo ea sit, exerci definitionem sea et. Eu sit vero audire maiestatis, at nec posse argumentum. Bonorum eruditi adipisci cum ei, recusabo euripidis pri id. Et eam petentium expetenda suavitate. Sale insolens at sit, vix ea movet clita. Vis in everti tritani luptatum, libris singulis ad usu. Vide atqui saepe quo no. Case dicit intellegat cum ea, ei pro veniam interesset. Suas mazim pro ei, affert altera postea id eum. Omnis debet delicata cu quo, eum te tollit facilisis, ne vel causae cetero adolescens.
		</div>
	</div>

</article>
