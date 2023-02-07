<div id="carouselHome" class="carousel slide banner_home" data-bs-ride="carousel"  data-bs-interval="100000">
    <div class="carousel-inner">

<!-- Aqui entra o foreach -->
    <?php
    $banners_home = carbon_get_theme_option('crb_banners_home');
    foreach ( $banners_home as $key => $banner  ) {
            echo '<div class="carousel-item ';
            echo ($key == 0) ? 'active' : '';
            echo '">';
            echo '<img class="d-block" src="'. $banner['imagem'] . '" alt="'. $banner['title'] .'">';
            if($banner['title'] || $banner['texto'] || $banner['url_']) {
                echo '<div class="carousel-caption d-md-flex align-items-center"><div>';
                echo ($banner['title']) ? '<h3>'.  $banner['title'] .'</h3>': '';
                echo ($banner['texto']) ? '<p>'.  $banner['texto'] .'</p>': '';
                echo ($banner['url_btn']) ? '<div><a class="btn btn-banner" href="' . esc_url( $banner['url_btn'] ) . '" target="_blank" target="'.esc_attr($banner['target_btn'] ).'" > '. $banner['txt_btn'] . ' </a></div>' : '';
                echo '</div></div>'; // end caption
            }
            echo '</div>'; //end carousel-item
    }

    ?>
</div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
