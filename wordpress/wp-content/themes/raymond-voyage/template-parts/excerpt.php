<?php $articleDate = get_the_date(); ?>

<div class="card">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <p class="date-excerpt"><?php echo $articleDate; ?></p>
        <a href="<?php echo get_permalink(); ?>" class="card-img"><?php the_post_thumbnail('large'); ?></a>
        <div class="card-text-content">
            <a href="<?php echo get_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
            <p><?php the_excerpt(); ?></p>
        </div>
        <hr>
        <a href="<?php echo get_permalink(); ?>" class="article-link">Lire la suite</a>
    </article>
</div>