<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package raymond-voyage
 */

get_header();
?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php
        // while ( have_posts() ) :
        // 	the_post();

        // 	get_template_part( 'template-parts/content', 'page' );

        // 	// If comments are open or we have at least one comment, load up the comment template.
        // 	// if ( comments_open() || get_comments_number() ) :
        // 	// 	comments_template();
        // 	// endif;

        // endwhile; // End of the loop.
        
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
        );
            
        $derniersArticles = new WP_Query($args);

        $argsForfait = array(
            'post_type' => 'forfaits',
            'posts_per_page' => 2
        );
            
        $derniersForfaits = new WP_Query($argsForfait);

        if ( $derniersForfaits->have_posts() ) :
            ?>
            <section class="forfaits">
                <div class="container">
                    <div class="row">
                        <?php
                        while ( $derniersForfaits->have_posts() ) {
                        $derniersForfaits->the_post();
                        get_template_part( 'template-parts/excerpt', get_post_type() );
                        }?>
                    </div>
                </div>
            </section>
        <?php endif;
        
        if ( $derniersArticles->have_posts() ) :
            ?>
            <section class="article">
                <div class="container">
                    <div class="row">
                        <?php
                        while ( $derniersArticles->have_posts() ) {
                        $derniersArticles->the_post();
                        get_template_part( 'template-parts/excerpt', get_post_type() );
                        }?>
                    </div>
                </div>
            </section>
        <?php endif;
            
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
