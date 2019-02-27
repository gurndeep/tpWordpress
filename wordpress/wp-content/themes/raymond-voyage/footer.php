<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package raymond-voyage
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<!--
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'raymond-voyage' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'raymond-voyage' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'raymond-voyage' ), 'raymond-voyage', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>--><!-- .site-info -->
		<div>
			<div>
				<?php the_custom_logo() ?>
			</div>
			<?php 
				dynamic_sidebar( 'footer-1' );
				dynamic_sidebar( 'footer-2' );
			?>

		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
