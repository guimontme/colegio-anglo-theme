<?php
/**
 * Template Name: Page (Default)
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();

the_post();
?>
<?php 
	$fancy_background = carbon_get_the_post_meta('fancy_background'); 
	$fancy_subtitle = carbon_get_the_post_meta('fancy_subtitle');
?>
<header class="fancy-title" 
<?php if(!empty($fancy_background)) : ?>
style="background-image: url('<?php echo $fancy_background; ?>');"
<?php endif; ?>
>
	<h1 class="title"><?php the_title(); ?></h1>
</header><!-- .entry-header -->
<?php echo do_shortcode( '[links_anglo]' ); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content'); ?>>

	<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'colegio-anglo' ),
				'after'  => '</div>',
			)
		);
		edit_post_link( esc_html__( 'Edit', 'colegio-anglo' ), '<span class="edit-link">', '</span>' );
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();
