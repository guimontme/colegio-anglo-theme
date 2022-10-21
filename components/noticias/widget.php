<div class="noticias-widget">
<?php
    $currentID = get_the_ID();
    $noticias = new WP_Query( array(
        'posts_per_page' => 4,
        'post__not_in' => array($currentID),
    ));
    if ($noticias->have_posts()) : while ($noticias->have_posts()) : $noticias->the_post();
?>
<section class="noticia-widget">
        <a href="<?php the_permalink(); ?>"><?php the_title('<h4>','</h4>'); ?></a>
        <!-- <header class="data-noticia mb-4">
        <i class="far fa-calendar-alt"></i> <?php // echo get_the_date(); ?>
        </header> -->
        <!-- <p>
            <?php //the_excerpt(); ?>
        </p> -->
        <p class="text-right leia-mais">
            <a href="<?php the_permalink(); ?>">[+]</a>
        </p>
</section>
<?php
        endwhile;
    endif;
?>
<?php wp_reset_postdata(); ?>
</div>
