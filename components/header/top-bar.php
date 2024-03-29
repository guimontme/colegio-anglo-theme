<?php 
    $text_whatsapp = carbon_get_theme_option('text_whatsapp');
    $icon_whatsapp =   get_stylesheet_directory_uri() . '/assets/img/whatsapp_red.svg' ;
    $href_whatsapp = carbon_get_theme_option('href_whatsapp');
    $icon_tel = get_stylesheet_directory_uri() . '/assets/img/tel-icon-red.svg' ;
    $text_tel = carbon_get_theme_option('text_tel');
    $href_tel = carbon_get_theme_option('href_tel');
    $search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.

    $text_btn_blue = carbon_get_theme_option('text_btn_blue');
    $url_btn_blue = carbon_get_theme_option('url_btn_blue');
    $target_btn_blue = (!!carbon_get_theme_option('target_btn_blue')) ? '_blank' : '';

    $text_btn_red = carbon_get_theme_option('text_btn_red');
    $url_btn_red = carbon_get_theme_option('url_btn_red');
    $target_btn_red = (!!carbon_get_theme_option('target_btn_red')) ? '_blank' : '';

?>
<section class="top-bar">
    <div class="container-fluid">
        <div class="row">
            <div class="col d-none d-lg-block">
                <div class="col_tels">
                    <?php if(!empty($href_whatsapp) && !empty($text_whatsapp)): ?>
                    <a href="https://wa.me/<?= $href_whatsapp; ?>" target="_blank">
                        <img src="<?= $icon_whatsapp; ?>" alt="" srcset=""> <?= $text_whatsapp; ?>
                    </a>
                    <?php endif; ?>
                    <?php if(!empty($href_tel) && !empty($text_tel)): ?>
                    <a href="tel:+<?= $href_tel; ?>">
                        <img src="<?= $icon_tel; ?>" alt="" srcset=""> <?= $text_tel; ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- ./ whatsApp and phone -->

            <div class="col d-none d-lg-block col_search">
                <?php 
                    if ( '1' === $search_enabled ) :
					?>
							<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-control-search">
									<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e( 'Faça sua busca no site', 'colegio-anglo' ); ?>" title="<?php esc_attr_e( 'Search', 'colegio-anglo' ); ?>" />
									<button type="submit" name="submit" class="btn"><?php esc_html_e( 'Buscar', 'colegio-anglo' ); ?></button>
								</div>
							</form>
					<?php
						endif;
					?>
            </div><!-- search form -->

            <div class="col col_links">
                <?php if(!empty($url_btn_blue) && !empty($text_btn_blue)): ?>
                    <a href="<?= $url_btn_blue; ?>" target="<?= $target_btn_blue; ?>" class="btn btn-primary"><?= $text_btn_blue; ?></a>
                <?php endif; ?>
                <?php if(!empty($url_btn_red) && !empty($text_btn_red)): ?>
                    <a href="<?= $url_btn_red; ?>" target="<?= $target_btn_red; ?>" class="btn btn-danger"><?= $text_btn_red; ?></a>
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>