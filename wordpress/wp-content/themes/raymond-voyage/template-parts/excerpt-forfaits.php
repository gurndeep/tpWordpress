<?php $articleDate = get_the_date(); ?>

<div class="card forfaits">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div>
            <a href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <hr>
            <ul class="acf-fields">
                <li><?php the_field('nb_nuits'); ?></li>
                <li><?php the_field('moyen_transport'); ?></li>
                <li><?php the_field('prix'); ?></li>
            </ul>
        </div>
    </article>
</div>