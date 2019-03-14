<?php 
    $articleDate = get_the_date();
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
?>

<div class="card forfaits">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <div class="card-text-content">
            <a href="<?php echo get_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
            <ul class="acf-fields">
                <li><?php the_field('nb_nuits'); ?></li>
                <li class="<?php echo $return ?>"><?php the_field('moyen_transport'); ?></li>
                <li><?php the_field('prix'); ?></li>
            </ul>
        </div>
    </article>
</div>