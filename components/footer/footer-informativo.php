<?php
$args = array (
    'post_type' => 'home_section',
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'p' => 56
  );
  $sections = new WP_Query( $args );
?>
<section class="py-4" id="informativo">
<?php
    while ( $sections->have_posts() ) : $sections->the_post();
        the_content();
    endwhile;
?>
</section>
