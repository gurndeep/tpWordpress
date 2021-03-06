<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raymond-voyage
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php if(is_front_page()): ?> id="front-page" <?php endif; ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'raymond-voyage' ); ?></a>

	<div class="background-front-page">
		<div class="container">
			<header id="masthead" class="site-header">
				<div class="site-branding">
					<?php
					the_custom_logo();
		/*			if ( is_front_page() && is_home() ) :
						?>
						<?php
					else :
						?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php
					endif;
					$raymond_voyage_description = get_bloginfo( 'description', 'display' );*/
					if ( $raymond_voyage_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $raymond_voyage_description; /* WPCS: xss ok. */ ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'raymond-voyage' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
			</header><!-- #masthead -->
			<?php 

			if(is_front_page()):
			$blogInfo = get_bloginfo('description');
			$link = get_post_type_archive_link('forfaits');

			?>
			<div class="slogan">
				<div>
					<h2><?php echo $blogInfo; ?></h2>
					<div class="button-container">
						<a href="<?php echo $link ?>">DÉCOUVREZ NOS FORFAITS</a>
					</div>
				</div>
			</div>
			<?php endif ?>
		</div>
	</div>

	<div id="content" class="site-content">
