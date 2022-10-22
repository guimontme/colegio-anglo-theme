<?php

$logo_footer = carbon_get_theme_option('logo_footer');
$description_footer = carbon_get_theme_option('description_footer');
$adderess_footer = carbon_get_theme_option('adderess_footer');
$email_footer = carbon_get_theme_option('email_footer');
$text_phone_footer = carbon_get_theme_option('text_phone_footer');
$href_phone_footer = carbon_get_theme_option('href_phone_footer');
$text_whatsapp_footer = carbon_get_theme_option('text_whatsapp_footer');
$href_whatsapp_footer = carbon_get_theme_option('href_whatsapp_footer');
$text_newsletter = carbon_get_theme_option('text_newsletter');
$shortcode_newsletter = carbon_get_theme_option('contato_shortcode');
$map_code = carbon_get_theme_option('map_code');

?>
        <div id="footer-widget" class="row my-2">
            <div class="container">
                <div class="row row_newsletter">
                    <div class="col-lg-6">
                        <label>
                            <?php echo $text_newsletter; ?>
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <?php echo (!empty($shortcode_newsletter)) ? do_shortcode($shortcode_newsletter) : ''; ?>
                    </div>
                </div>
                <div class="row">
                        <div class="col-12 col-lg-3 col_description">
                            <?php if($logo_footer): ?> 
                                <a href="<?php echo esc_url( home_url( '/' )); ?>" class="logo_footer">
                                    <img src="<?php echo $logo_footer; ?>"
                                        alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo">
                                </a>
                            <?php endif; ?> 

                            <!-- <p class="text_unidade">
                                Unidade <strong>São Lourenço</strong> 
                            </p> -->
                            <p class="description"><?php echo $description_footer; ?></p>
                        </div>
                        <div class="col-12 col-lg-3 col_contato">
                            <h3 class="contato_header">Contato</h3>
                            <ul class="contato_list">
                                <?php echo ($adderess_footer) ? "<li class='address'>{$adderess_footer}</li>" : "";?>
                                <?php echo ($text_whatsapp_footer && $href_whatsapp_footer) ? "<li class='whatsapp'><a href='https://wa.me/{$href_whatsapp_footer}'>{$text_whatsapp_footer}</a></li>" : "";?>
                                <?php echo ($text_phone_footer && $href_phone_footer) ? "<li class='phone'><a href='tel:{$href_phone_footer}'>{$text_phone_footer}</a></li>" : "";?>
                                <?php echo ($email_footer) ? "<li class='email'><a href='mailto:{$email_footer}'>{$email_footer}</a></li>" : "";?>
                            </ul>
                            <h4>Visite nossas redes sociais</h4>
                            <?php
                                // Get all entered urls from the database
                                $social_links = carbon_get_theme_option('crb_social_urls');
                                echo '<nav class="social_media">';
                                foreach ($social_links as $link) {
                                    // var_dump(wp_get_attachment_image_src($link['icon']));
                                    echo '<a href="' . esc_url($link['url']) . '" target="_blank" title="Link para ' . esc_attr($link['title']) . '" >';
                                    echo '<img src="' . wp_get_attachment_image_src($link['icon'], 'full')[0] . '" alt="' . esc_attr($link['title']) . '"></a>';
                                }
                                echo '</nav>';
                            ?>

                        </div>
                        <div class="col-12 col-lg-3 col_menu">
                            <h3>Links rápidos</h3>
                            <nav>
                            <?php
                                wp_nav_menu(array(
                                'theme_location'  => 'footer-menu',
                                'container'       => 'li',
                                'container_id'    => 'nav_footer',
                                'container_class' => 'nav',
                                'menu_id'         => false,
                                'menu_class'      => 'nav-footer',
                                'depth'           => 2,
                                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'          => new WP_Bootstrap_Navwalker()
                                ));
                                ?>
                            </nav>
                        
                        </div>
                    <div class="col-12 col-lg-3 col_map">
                        <h3>Onde estamos</h3>
                        <div class="map-responsive">
                            <?php echo do_shortcode( $map_code ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
