<?php
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

	<main class="article-grid">
		<aside>
			<div class="article-aside">
				<?php the_post_thumbnail('medium');?>
				<div>
					<p>DATE: <?php the_date(); ?></p>
					<?php

						$categories = get_the_category();
						if($categories):
					?>
						<span class="infos">Catégorie(s): </span>
						<ul class="no-style">
							<?php foreach($categories as $cat): ?>
								<?php $url = get_category_link($cat->term_id); ?>
								<li><a class="article-link" href="<?php echo $url; ?>">
									<?php echo $cat->name; ?>
								</a></li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</aside>
		<div class="entry-content content-article">
			<h2>PAR: <?php the_author(); ?></h2>
			<div>
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

				$blogUrl = get_permalink( get_option('page_for_posts'));
				?>
				<a href="<?php echo $blogUrl ?>" class="article-link">Retour au blogue</a>
			</div>
		</div><!-- .entry-content -->
	</main>

	<footer class="entry-footer">
		<!-- <?php raymond_voyage_entry_footer(); ?> -->
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
