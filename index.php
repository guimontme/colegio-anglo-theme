<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>
<?php 
	$fancy_background = carbon_get_the_post_meta('fancy_background'); 
	$fancy_subtitle = carbon_get_the_post_meta('fancy_subtitle');
?>
<header class="fancy-title" style="background: url('<?php echo $fancy_background; ?>');">
	<h1 class="title"><?php the_title(); ?></h1>
</header><!-- .entry-header -->
<?php echo do_shortcode( '[links_anglo]' ); ?>
<div class="row">
	<div class="col-md-12">
		<?php
			echo apply_filters( 'the_content', get_post_field( 'post_content', $page_id ) );

			edit_post_link( __( 'Edit', 'colegio-anglo' ), '<span class="edit-link">', '</span>', $page_id );
		?>
	</div><!-- /.col -->
	<div class="col-md-12">
		<?php
			get_template_part( 'archive', 'loop' );
		?>
	</div><!-- /.col -->
</div><!-- /.row -->
<?php
get_footer();
