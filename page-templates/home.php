<?php

/**
*
* Template Name: Home
*
*/

?>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body class="home">
<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Pular para o conteúdo', 'colegio-anglo' ); ?></a>
	<?php get_template_part( 'components/header/header' ) ?><!-- #header -->
<main id="content" class="site-content ">
            <?php
            $args = array (
                'post_type' => 'home_section',
                'post_status' => 'publish',
                'orderby' => 'menu_order',
                'order' => 'ASC',
                'posts_per_page' => 10
              );
              $sections = new WP_Query( $args );
                while ( $sections->have_posts() ) : $sections->the_post();
                    get_template_part( 'components/home/section', 'home' );
                endwhile;
            ?>
</main>
<?php get_template_part( 'components/footer/footer' ); ?>
<?php wp_footer(); ?>
<?php /* <script src="https://code.jquery.com/jquery-1.10.2.js"></script> */ ?>
</body>

</html>
