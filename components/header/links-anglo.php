<div class="container-xl links-anglo">
    <div class="card-links">

<!-- Aqui entra o foreach -->
    <?php
    $links_anglo = carbon_get_theme_option('crb_links_group');
    foreach ( $links_anglo as $key => $banner  ) {
      if($key < 5) {
        echo '<div class="card-item">';
        echo '<div class="card-logo">';
        echo '<a href="'. esc_url($banner['url']). '" title="' . $banner['title'] . '">';
        echo '<img class="logo" src="'. $banner['imagem'] . '" alt="'. esc_attr( $banner['title'] ) .'">';
        echo '<img class="icon" src="'. ($banner['icon'] ? $banner['icon'] : $banner['imagem'] ) . '" alt="'. esc_attr( $banner['title'] ) .'">';
        echo '</a>';
        echo '</div>'; //end carousel-item
        if($banner['url']) {
          echo ($banner['url']) ? '<p class="text-right saiba-mais"> <a href="'.esc_url($banner['url']) .'">Saiba mais <i class="icon-left"></i></a></p>' : '';
        }
        echo '</div>'; //end carousel-item
        
      }
  
    }

    ?>
  </div>
</div>
