<?php 
// if (!is_page_template( 'page-templates/home.php' )) {
//     get_template_part( 'components/footer/footer', 'informativo' );
// }
?>
<footer id="footer" class="site-footer" role="contentinfo">
    <div class="container pt-3 pb-3">
        <?php get_template_part( 'components/footer/footer', 'widget' ); ?>
        <div class="site-info text-center">
            &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
            <span class=""> . </span>
            Todos os direitos reservados.
        </div><!-- close .site-info -->
	</div>
</footer><!-- #footer -->
