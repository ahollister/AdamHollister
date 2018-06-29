<?php
/**
 * The header for our theme
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adamhollistercv' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>,
					</a>
				</h1>
			<?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>,
					</a>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav class="material-navigation">
			<button class="material-button material-button--projects" data-modal="projects">
				<div class="screen-reader-text">See Projects</div>
				<svg class="icon icon--projects"><use xlink:href="#icon-projects"></use></svg>
			</button>

			<button class="material-button material-button--skills" data-modal="skills">
				<div class="screen-reader-text">See Skills</div>
				<svg class="icon icon--skills"><use xlink:href="#icon-skills"></use></svg>
			</button>

			<button class="material-button material-button--menu">
				<div class="screen-reader-text">Menu</div>
				<svg class="icon icon--menu"><use xlink:href="#icon-menu"></use></svg>
			</button>
			<button class="material-button material-button--close-menu">
				<div class="screen-reader-text">Close menu</div>
				<svg class="icon icon--close"><use xlink:href="#icon-close"></use></svg>
			</button>

			<button class="material-button material-button--back">
				<div class="screen-reader-text">Back</div>
				<svg class="icon icon--back"><use xlink:href="#icon-back"></use></svg>
			</button>
		</nav><!-- #site-navigation -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
