<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raymond-voyage
 */

get_header();
?>

	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
					$post_type = get_post_type();
					if($post_type == 'post'):?>
						<h1>Blogue</h1>
						<h2 class="archive-categorie"><?php the_archive_title();?></h2>
						<?php
						else : ?>
							<h1><?php echo $post_type; ?></h1>
						<?php
						endif;
						?>


					<!-- the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?> -->
				</header><!-- .page-header -->

				<section class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						* Include the Post-Type-specific template for the content.
						* If you want to override this in a child theme, then include a file
						* called content-___.php (where ___ is the Post Type name) and that will be used instead.
						*/
						get_template_part( 'template-parts/excerpt', get_post_type() );

					endwhile;

					the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
				</section>

				<!-- <div class="bottom-nav">
					<ul>
						<li><a href="#">FORFAITS PLUS ANCIENS</a></li>
						<li><a href="#">FORFAITS PLUS RÉCENTS</a></li>
					</ul>
				</div> -->

			</main><!-- #main -->
		</div><!-- #primary -->
	</div>

<?php
get_footer();
