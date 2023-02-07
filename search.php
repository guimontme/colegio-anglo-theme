<?php
/**
 * The Template for displaying Search Results pages.
 */

get_header();


?>
<header class="fancy-title" style="background-image: url('<?php echo get_template_directory_uri() . '/assets/img/fancy-busca.jpg'; ?>');">
	<h1 class="title">Busca</h1>
</header>

<!-- .entry-header -->
<?php echo do_shortcode( '[links_anglo]' ); ?>
<div class="container">


	<div class="row py-5">
		<div class="col-md-12">

<?php 
if ( have_posts() ) :
?>	
<header class="page-header mb-4">
		<h1 class="page-title"><?php printf( esc_html__( 'Resultados da pesquisa para: %s', 'colegio-anglo' ), get_search_query() ); ?></h1>
</header>
<?php
	get_template_part( 'archive', 'search' );
else :
?>
	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Nada encontrado', 'colegio-anglo' ); ?></h1>
		</header><!-- /.entry-header -->
		<p><?php esc_html_e( 'Desculpa, nada foi encontrado. Por favor tente algo diferente.', 'colegio-anglo' ); ?></p>
		<?php
			get_search_form();
		?>
	</article><!-- /#post-0 -->

		</div><!-- /.col-12 -->
	</div><!-- /.row -->
</div><!-- /.container -->
<?php
endif;
wp_reset_postdata();

get_footer();
