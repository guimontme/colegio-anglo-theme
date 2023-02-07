<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<header class="fancy-title" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/fancy-busca.jpg'; ?>');">
	<h1 class="title">404</h1>
</header>
<?php echo do_shortcode( '[links_anglo]' ); ?>
<div id="post-0" class="content error404 not-found container py-5">
	<h1 class="entry-title"><?php esc_html_e( 'Nada encontrado', 'colegio-anglo' ); ?></h1>
	<div class="entry-content">
		<p><?php esc_html_e( 'Essa página não exite, ou foi descontinuada. Por favor, tente pesquisar.', 'colegio-anglo' ); ?></p>
		<div>
			<?php
				if ( '1' === $search_enabled ) :
					get_search_form();
				endif;
			?>
		</div>
	</div><!-- /.entry-content -->
</div><!-- /#post-0 -->
<?php
get_footer();
