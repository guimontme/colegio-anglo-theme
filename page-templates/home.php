<?php

/**
*
* Template Name: Home
*
*/
get_header();

?>
<?php // get_template_part( 'components/header/header' ) ?><!-- #header -->
<main id="content" class="site-content">
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
<?php
get_footer();
