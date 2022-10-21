<?php 
// if (!is_page_template( 'page-templates/home.php' )) {
//     get_template_part( 'components/footer/footer', 'informativo' );
// }
$link_poltica = carbon_get_theme_option('link_poltica');
?>
<footer id="footer" class="site-footer" role="contentinfo">
    <div class="container">
        <?php get_template_part( 'components/footer/footer', 'widget' ); ?>
        <div class="row row-footer-copy">
            <div class="site-info col-lg-9">
                <p>
                    &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
                    <span class=""> . </span>
                    <!-- Todos os direitos reservados. -->
                    Design por <a href="http://yellowcarbo.design" target="_blank">yellowcarbo.design</a>. Code Guimont.me
                </p>
            </div><!-- close .site-info -->

            <div class="col-lg-3">
                <a href="<?php echo $link_poltica; ?>">Política de Privacidade</a>
            </div>
        </div>
	</div>
</footer><!-- #footer -->
