<div id="carouselhome" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

<!-- Aqui entra o foreach -->
    <?php
    $banners_home = carbon_get_theme_option('crb_banners_home');
    foreach ( $banners_home as $key => $banner  ) {
        // var_dump($banner);
        // echo wp_get_attachment_image( $banner['imagem'] );
    //    var_dump(wp_get_attachment_image_src( $banner['imagem'], 'full')[0]);
            echo '<div class="carousel-item ';
            echo ($key == 0) ? 'active' : '';
            echo '">';
            echo '<img class="d-block w-100" src="'. wp_get_attachment_image_src( $banner['imagem'],'full')[0] . '" alt="'. esc_url( $banner['title'] ) .'">';
            if($banner['title'] || $banner['texto'] || $banner['url']) {
                echo '<div class="carousel-caption d-none d-md-flex align-items-center"><div>';
                echo ($banner['title']) ? '<h3>'.  $banner['title'] .'</h3>': '';
                echo ($banner['texto']) ? '<p>'.  $banner['texto'] .'</p>': '';
                echo ($banner['url']) ? '<p class="text-right"><a  class="btn btn-primary" href="' . esc_url( $banner['url'] ) . '" target="_blank" target="'.esc_attr($banner['target'] ).'" > Saiba + </a></p>' : '';
                echo '</div></div>'; // end caption
            }
            echo '</div>'; //end carousel-item
    }

    ?>
</div>
  <a class="carousel-control-prev" href="#carouselhome" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselhome" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>
