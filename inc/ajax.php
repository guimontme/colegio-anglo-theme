<?php

function anglo_load_more() {
    $ajaxposts = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => 6,
      'orderby' => 'date',
      'order' => 'DESC',
      'paged' => $_POST['paged'],
    ]);
  
    $response = '';
  
    if($ajaxposts->have_posts()) {
      while($ajaxposts->have_posts()) : $ajaxposts->the_post();
        $response .= get_template_part('content','index');
      endwhile;
    } else {
      $response = '';
    }
  
    echo $response;
    exit;
  }
  add_action('wp_ajax_anglo_load_more', 'anglo_load_more');
  add_action('wp_ajax_nopriv_anglo_load_more', 'anglo_load_more');