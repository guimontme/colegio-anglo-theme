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
	$fancy_bg_news = carbon_get_theme_option('fancy_bg_news'); 
	$fancy_title_news = carbon_get_theme_option('fancy_title_news');
	$title_news = carbon_get_theme_option('title_news');
?>
<header class="fancy-title" style="background-image: url('<?php echo $fancy_bg_news; ?>');">
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
				echo apply_filters( 'the_content', get_post_field( 'post_content', $page_id ) );
	
				edit_post_link( __( 'Edit', 'colegio-anglo' ), '<span class="edit-link">', '</span>', $page_id );
			?>
		</div><!-- /.col -->
		<div class="col-md-8">
			<?php
				get_template_part( 'archive', 'loop' );
			?>
		</div><!-- /.col-md-8 -->
		<aside class="col-md-4">
			<?php
				get_sidebar();
			?>
		</aside>
	</div><!-- /.row -->
</div>
<?php echo do_shortcode( '[depoimentos]' ); ?>
<?php
get_footer();
