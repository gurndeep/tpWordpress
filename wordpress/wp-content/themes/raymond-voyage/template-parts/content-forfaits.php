<?php

$field = get_field('moyen_transport');
$return = '';
if ($field == 'Par autobus'){
	$return = 'icone-bus';
}
elseif ($field == 'Par avion'){
	$return = 'icone-avion';
}
elseif ($field == 'Par train'){
	$return = 'icone-train';
}
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raymond-voyage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		// if ( 'post' === get_post_type() ) :
		// 	?>
		<!--	<div class="entry-meta">
		-->		<?php
		// 		raymond_voyage_posted_on();
		// 		raymond_voyage_posted_by();
		// 		?>
			</div><!-- .entry-meta -->
		<?php //endif; ?>
	</header><!-- .entry-header -->

	<main class="forfait-grid">
		<aside>
			<?php the_post_thumbnail('large');?>
			<div class="button-container">
				<a href="#">ACHETEZ CE FORFAIT</a>
			</div>
		</aside>
		<div class="entry-content content-article">
			<h2>DÉTAILS</h2>
			<ul class="acf-fields">
				<li><?php the_field('nb_nuits'); ?></li>
				<li class="<?php echo $return ?>"><?php the_field('moyen_transport'); ?></li>
				<li><?php the_field('prix'); ?></li>
			</ul>
			<div>
                <h2>DESCRIPTION</h2>
				<?php
					the_content();

				// the_content( sprintf(
				// 	wp_kses(
				// 		/* translators: %s: Name of current post. Only visible to screen readers */
				// 		__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'raymond-voyage' ),
				// 		array(
				// 			'span' => array(
				// 				'class' => array(),
				// 			),
				// 		)
				// 	),
				// 	get_the_title()
				// ) );

				// wp_link_pages( array(
				// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'raymond-voyage' ),
				// 	'after'  => '</div>',
				// ) );

				$blogUrl = get_post_type_archive_link('forfaits');
				?>
				<a href="<?php echo $blogUrl ?>" class="article-link">Retour au forfaits</a>
			</div>
		</div><!-- .entry-content -->
	</main>

	<footer class="entry-footer">
		<!-- <?php raymond_voyage_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
