<?php 
// if (!is_page_template( 'page-templates/home.php' )) {
//     get_template_part( 'components/footer/footer', 'informativo' );
// }
$link_poltica = carbon_get_theme_option('link_poltica');
$logo_whatsapp = carbon_get_theme_option('logo_whatsapp');
$link_tel_whatsapp = carbon_get_theme_option('link_tel_whatsapp');
?>
<footer id="footer" class="site-footer" role="contentinfo">
    <div class="container-fluid px-4 px-md-5">
        <?php get_template_part( 'components/footer/footer', 'widget' ); ?>
        <div class="row row-footer-copy">
            <div class="site-info col-lg-9 text-center text-md-start">
                <p>
                    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
                    <span class=""> . </span>
                    <!-- Todos os direitos reservados. -->
                    Design por <a href="http://yellowcarbo.design" target="_blank">yellowcarbo.design</a>. Code Guimont.me
                </p>
            </div><!-- close .site-info -->

            <div class="col-lg-3 text-center text-md-end pe-md-5">
                <a href="<?php echo $link_poltica; ?>">Política de Privacidade</a>
            </div>
        </div>
	</div>
</footer><!-- #footer -->
<?php if(!empty($link_tel_whatsapp) && !empty($logo_whatsapp)): ?>
    <a href="https://wa.me/<?= $link_tel_whatsapp ?>" target="_blank" class="floating_whatsapp">
        <img src="<?=$logo_whatsapp ?>" alt="">
    </a>
<?php endif; ?>
