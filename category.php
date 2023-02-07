<?php
/**
 * The Template for displaying Category Archive pages.
 */

get_header();



?>

<?php 
	$fancy_bg_news = carbon_get_theme_option('fancy_bg_news'); 
	$fancy_title_news = carbon_get_theme_option('fancy_title_news');
	$title_news = carbon_get_theme_option('title_news');
?>
<header class="fancy-title" style="background: url('<?php echo $fancy_bg_news; ?>');">
	<h1 class="title"><?php echo $fancy_title_news; ?></h1>
</header>

<!-- .entry-header -->
<?php echo do_shortcode( '[links_anglo]' ); ?>
<div class="container">
	<div class="row py-5 ">
		<h4 class="anglo-title text-start mx-auto ">
			<?php echo $title_news; ?>
		</h4>
	</div>

	<div class="row py-5">
		<div class="col-md-12">

<?php 

if ( have_posts() ) :
?>
	<header class="page-header">
		<h1 class="page-title"><?php printf( esc_html__( 'Categorias: %s', 'colegio-anglo' ), single_cat_title( '', false ) ); ?></h1>
		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) ) :
				echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
			endif;
		?>
	</header>
<?php
	get_template_part( 'archive', 'loop' );
else :
	// 404.
	get_template_part( 'content', 'none' );
endif;

wp_reset_postdata(); // End of the loop.


?>
</div>
</div>
</div>

<?php
get_footer();
