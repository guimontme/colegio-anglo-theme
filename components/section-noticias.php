<section class="full-cover section-azul-blocos py-5">

<div class="container">

    <div class="row pb-4">
        <h2 class="anglo-title-amarelo color-white">Últimas Notícias</h2>
        <p class="small">Acompanhe nosso dia a dia com nossas atualizações</p>
    </div>
    <div class="row news_row">
    <?php
        $noticias_home = new WP_Query( array(
        // 'category_name' => 'news',
            'posts_per_page' => 3,
        ));
        if($noticias_home->have_posts()) : while ($noticias_home->have_posts()) : $noticias_home->the_post();
    ?>
        <?php get_template_part( 'components/noticias' ) ?>
    <?php
        endwhile;
        endif;
    ?>
    </div>
    <?php /* ?>
    <p class="text-center clear-fix mt-5">
        <a href="<?php echo esc_url( home_url( '/' )); ?>artigos" class="btn btn-primary">Leia todas as notícias</a>
    </p>
    <?php */ ?>
    <?php wp_reset_postdata(); ?>
</div>
</section>