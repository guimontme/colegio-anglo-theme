<div class="container">
    <div class="card card-links">

<!-- Aqui entra o foreach -->
    <?php
    $links_anglo = carbon_get_theme_option('crb_links_group');
    foreach ( $links_anglo as $key => $banner  ) {
      if($key < 4) {
        echo '<div class="card-item">';
        echo '<div class="card-logo">';
        echo '<img class="" src="'. $banner['imagem'] . '" alt="'. esc_attr( $banner['title'] ) .'">';
        echo '</div>'; //end carousel-item
        if($banner['url']) {
          echo ($banner['url']) ? '<p class="text-right saiba-mais"><a  class="" href="' . esc_url( $banner['url'] ) . '" target="_blank" target="'.esc_attr($banner['target'] ).'" > Saiba mais <i class="icon-left"></i> </a></p>' : '';
        }
        echo '</div>'; //end carousel-item
        
      }
  
    }

    ?>
  </div>
</div>
