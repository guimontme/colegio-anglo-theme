<?php 
    $text_whatsapp = carbon_get_theme_option('text_whatsapp');
    $icon_whatsapp = carbon_get_theme_option('icon_whatsapp');
    $href_whatsapp = carbon_get_theme_option('href_whatsapp');
    $icon_tel = carbon_get_theme_option('icon_tel');
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
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col_tels">
                <?php if(!empty($href_whatsapp) && !empty($icon_whatsapp) && !empty($text_whatsapp)): ?>
                <a href="https://wa.me/<?= $href_whatsapp; ?>" target="_blank">
                    <img src="<?= $icon_whatsapp; ?>" alt="" srcset=""> <?= $text_whatsapp; ?>
                </a>
                <?php endif; ?>
                <?php if(!empty($href_tel) && !empty($icon_tel) && !empty($text_tel)): ?>
                <a href="tel:+<?= $href_tel; ?>">
                    <img src="<?= $icon_tel; ?>" alt="" srcset=""> <?= $text_tel; ?>
                </a>
                <?php endif; ?>
            </div>
            <!-- ./ whatsApp and phone -->

            <div class="col-lg-4 hidden-xs col_search">
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

            <div class="col-lg-4 col_links">
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