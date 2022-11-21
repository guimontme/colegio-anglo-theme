<div class="container-xl links-anglo">
    <div class="card-links">

<!-- Aqui entra o foreach -->
    <?php
    $links_anglo = carbon_get_theme_option('crb_links_group');
    foreach ( $links_anglo as $key => $banner  ) {
      if($key < 4) {
        echo '<div class="card-item">';
        echo '<div class="card-logo">';
        echo '<a href="'. esc_url($banner['url']). '">';
        echo '<img class="" src="'. $banner['imagem'] . '" alt="'. esc_attr( $banner['title'] ) .'"></a>';
        echo '</div>'; //end carousel-item
        if($banner['url']) {
          echo ($banner['url']) ? '<p class="text-right saiba-mais"> Saiba mais <i class="icon-left"></i></p>' : '';
        }
        echo '</div>'; //end carousel-item
        
      }
  
    }

    ?>
  </div>
</div>
