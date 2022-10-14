<?php

$logo = carbon_get_theme_option('logo_footer');
$description_footer = carbon_get_theme_option('description_footer');
$adderess_footer = carbon_get_theme_option('adderess_footer');
$email_footer = carbon_get_theme_option('email_footer');
$phone_footer = carbon_get_theme_option('phone_footer');
$text_newsletter = carbon_get_theme_option('text_newsletter');
$shortcode_newsletter = carbon_get_theme_option('shortcode_newsletter');

?>
        <div id="footer-widget" class="row my-2">
            <div class="container">
                <div class="row">
                        <div class="col-12 col-lg-3 col_description">
                            <a href="<?php echo esc_url( home_url( '/' )); ?>" class="logo_footer">
                                <img src="<?php echo wp_get_attachment_image_src( $logo, 'full')[0]; ?>"
                                    alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" class="logo">
                            </a>
                            <p class="description"><?php echo $description_footer; ?></p>
                        </div>
                        <div class="col-12 col-lg-3 col_contato">
                            <h3 class="contato_header">Contato</h3>
                            <ul class="contato_list">
                                <?php echo ($adderess_footer) ? "<li class='address'>{$adderess_footer}</li>" : "";?>
                                <?php echo ($phone_footer) ? "<li class='phone'><a href='tel:{$phone_footer}'>{$phone_footer}</a></li>" : "";?>
                                <?php echo ($email_footer) ? "<li class='email'><a href='mailto:{$email_footer}'>{$email_footer}</a></li>" : "";?>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-2 col_menu">
                            <h3>Menu</h3>
                            <nav>
                            <?php
                                wp_nav_menu(array(
                                'theme_location'  => 'rodape',
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
                    <div class="col-12 col-lg-4 col_newsletter">
                        <h3>INFORMATIVO</h3>
                        <p><?php echo $text_newsletter; ?></p>
                        <?php echo do_shortcode( $shortcode_newsletter ); ?>
                    </div>
                </div>
            </div>
        </div>
<?php 
