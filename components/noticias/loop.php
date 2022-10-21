<div class="row">
<?php
    $noticias = new WP_Query( array(
        'posts_per_page' => 3,
    ));
    if($noticias->have_posts()) : while ($noticias->have_posts()) : $noticias->the_post();
?>
    <?php get_template_part( 'components/noticias' ) ?>
<?php
        endwhile;
    endif;
?>
</div>
<?php wp_reset_postdata(); ?>
